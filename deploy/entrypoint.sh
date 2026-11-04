#!/bin/sh
# Mail for the booking form: msmtp with the SMTP settings from deploy/.env.
# Without SMTP_HOST, mail() is a no-op (bookings are still saved in the database).
set -e
if [ -n "${SMTP_HOST:-}" ]; then
  umask 077
  cat > /etc/msmtprc <<CONF
defaults
auth           on
tls            on
tls_trust_file /etc/ssl/certs/ca-certificates.crt
logfile        /proc/self/fd/2
account        default
host           ${SMTP_HOST}
port           ${SMTP_PORT:-587}
user           ${SMTP_USER}
password       ${SMTP_PASS}
from           ${SMTP_FROM:-$SMTP_USER}
CONF
  [ "${SMTP_PORT:-587}" = 465 ] && echo "tls_starttls  off" >> /etc/msmtprc
  chown www-data /etc/msmtprc
else
  echo 'sendmail_path = "/bin/true"' > /usr/local/etc/php/conf.d/zz-nomail.ini
fi
exec docker-php-entrypoint "$@"
