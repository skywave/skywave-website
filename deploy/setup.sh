#!/bin/bash
# One-time setup of the Skywave website on a local Linux server with Docker.
#   sudo git clone https://github.com/skywave/skywave-website.git /opt/skywave-website
#   sudo bash /opt/skywave-website/deploy/setup.sh
# Afterwards the server follows GitHub (branch master) by itself, checking every minute.
set -euo pipefail
[ "$(id -u)" = 0 ] || { echo "run with sudo"; exit 1; }
DIR="$(cd "$(dirname "$0")/.." && pwd)"
cd "$DIR"
command -v docker >/dev/null || { echo "Docker is not installed"; exit 1; }
docker compose version >/dev/null || { echo "docker compose is missing"; exit 1; }

ENV=deploy/.env
if [ ! -f "$ENV" ]; then
  gen() { tr -dc 'A-Za-z0-9' </dev/urandom | head -c "$1"; }
  umask 077
  cat > "$ENV" <<CONF
# Skywave website, server-only settings (not in git). Change, then: sudo bash deploy/update.sh --force
WEB_PORT=80
DB_PASS=$(gen 24)
DB_ROOT_PASS=$(gen 24)
ADMIN_EMAIL=support@skywavetech.co.zm
# Booking-form emails: fill in a mailbox's SMTP login to send them (empty = bookings saved, no emails)
SMTP_HOST=
SMTP_PORT=587
SMTP_USER=
SMTP_PASS=
SMTP_FROM=
CONF
  echo "==> Created $ENV with new database passwords"
fi
chmod 600 "$ENV"

echo "==> Building and starting the website (first time takes a few minutes)"
docker compose -f deploy/compose.yaml --env-file "$ENV" build --pull
docker compose -f deploy/compose.yaml --env-file "$ENV" up -d --remove-orphans

echo "==> Following GitHub: checking every minute"
install -m 644 deploy/skywave-website-update.service deploy/skywave-website-update.timer /etc/systemd/system/
sed -i "s|/opt/skywave-website|$DIR|g" /etc/systemd/system/skywave-website-update.service
systemctl daemon-reload
systemctl enable --now skywave-website-update.timer >/dev/null

# Is the website container up? (Apache stops at once on a settings error)
dc() { docker compose -f deploy/compose.yaml --env-file "$ENV" "$@"; }
for i in $(seq 20); do
  [ "$(docker inspect -f '{{.State.Running}} {{.State.Restarting}}' "$(dc ps -q web)" 2>/dev/null)" = "true false" ] && break
  sleep 2
done
if [ "$(docker inspect -f '{{.State.Running}} {{.State.Restarting}}' "$(dc ps -q web)" 2>/dev/null)" != "true false" ]; then
  echo "!!  The website container is not running. Its log:"
  dc logs --tail 20 web
  exit 1
fi
v=$(dc exec -T web php -r 'echo PHP_VERSION;')
if dc exec -T web php -r 'exit(version_compare(PHP_VERSION, "8.3.36", ">=") ? 0 : 1);'; then
  echo "==> PHP $v (patched)"
else
  echo "!!  PHP $v is older than 8.3.36 (CVE-2026-109618/109619). Run: sudo bash deploy/update.sh --force"
fi

port=$(grep '^WEB_PORT=' "$ENV" | cut -d= -f2)
ip=$(hostname -I | awk '{print $1}')
echo
echo "Done. The website is at http://$ip${port:+$( [ "$port" = 80 ] || echo ":$port")}/"
echo "Updates: push to GitHub (master); the server picks them up within a minute."
echo "Log of updates: journalctl -u skywave-website-update -n 50"
