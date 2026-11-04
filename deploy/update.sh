#!/bin/bash
# Bring the website up to date with GitHub (run every minute by skywave-website-update.timer).
#   Pulls the branch (default master). If the Docker files changed, rebuilds the website container.
#   Files edited by hand on the server are overwritten: change things in GitHub instead.
#   deploy/.env and app/config.php are not in git, so they are kept.
set -euo pipefail
DIR="$(cd "$(dirname "$0")/.." && pwd)"
BRANCH="${BRANCH:-master}"
cd "$DIR"
exec 9>/run/skywave-website-update.lock
flock -n 9 || exit 0

git fetch --quiet origin "$BRANCH"
old=$(git rev-parse HEAD)
new=$(git rev-parse "origin/$BRANCH")
[ "$old" = "$new" ] && [ "${1:-}" != "--force" ] && exit 0

echo "Updating ${old:0:8} -> ${new:0:8}:"
git --no-pager log --oneline "$old..$new" 2>/dev/null | head -20 || true
changed=$(git diff --name-only "$old" "$new" 2>/dev/null || echo deploy/)
git reset --quiet --hard "$new"
git clean -qfd -e deploy/.env -e app/config.php          # files deleted in GitHub disappear here too

if grep -q '^deploy/' <<<"$changed" || [ "${1:-}" = "--force" ]; then
  echo "Docker settings changed: rebuilding the website container"
  docker compose -f deploy/compose.yaml --env-file deploy/.env up -d --build --remove-orphans
fi
echo "Now at ${new:0:8}"
