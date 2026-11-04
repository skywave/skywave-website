# Skywave website: Apache + PHP (official image, so patched PHP releases arrive with "docker compose build --pull").
# PHP must be 8.3.36 or newer (CVE-2026-109618 / CVE-2026-109619, see SECURITY.md); setup.sh checks it.
FROM php:8.3-apache

RUN apt-get update \
 && apt-get install -y --no-install-recommends msmtp ca-certificates \
 && rm -rf /var/lib/apt/lists/* \
 && docker-php-ext-install mysqli \
 && a2enmod rewrite headers

COPY deploy/apache-site.conf /etc/apache2/sites-available/000-default.conf
COPY deploy/php.ini /usr/local/etc/php/conf.d/skywave.ini
COPY deploy/entrypoint.sh /usr/local/bin/skywave-entrypoint
RUN chmod 755 /usr/local/bin/skywave-entrypoint

ENTRYPOINT ["skywave-entrypoint"]
CMD ["apache2-foreground"]
