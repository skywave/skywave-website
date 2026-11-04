# Running the website on a local server

The server follows GitHub: within a minute of a push to `master`, the site on the server is updated.
It runs in Docker (Apache + PHP from the official image, MariaDB for bookings), next to anything
else on the server.

## Set up (once)

On the server (Linux with Docker and docker compose):

```bash
sudo git clone https://github.com/skywave/skywave-website.git /opt/skywave-website
sudo bash /opt/skywave-website/deploy/setup.sh
```

It creates `deploy/.env` (database passwords, port, email settings; not in git), builds and
starts the containers, and installs `skywave-website-update.timer`, which checks GitHub every minute.

## Day to day

- **Change the site:** commit and push to `master`. The server updates itself within a minute.
- **Never edit files on the server:** the next update overwrites them. `deploy/.env` and
  `app/config.php` are the exceptions; they are not in git.
- **What happened:** `journalctl -u skywave-website-update -n 50`
- **Update now / rebuild** (e.g. after changing `deploy/.env`, or to pull a newer patched PHP):
  `sudo bash /opt/skywave-website/deploy/update.sh --force`
- **Bookings:** `sudo docker compose -f /opt/skywave-website/deploy/compose.yaml --env-file /opt/skywave-website/deploy/.env exec db mariadb -uroot -p skywave_db -e "SELECT * FROM bookings ORDER BY id DESC LIMIT 20"`
  (the root password is `DB_ROOT_PASS` in `deploy/.env`)

## Booking-form emails

Fill in `SMTP_HOST`, `SMTP_PORT`, `SMTP_USER`, `SMTP_PASS` and `SMTP_FROM` in `deploy/.env`, then
`sudo bash deploy/update.sh --force`. Without them bookings are still saved, but no emails are sent.

## Not served

`docs/`, `graphify-out/`, `.playwright-mcp/`, `deploy/`, `app/database/`, `app/config.php`, `.git`
and the Markdown files are refused by the web server (404).
