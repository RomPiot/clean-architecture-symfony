FROM php:8.0-fpm

RUN apt-get update && \
    apt-get install -y --no-install-recommends g++ apt-utils libssl-dev zlib1g-dev libpng-dev sqlite3 libsqlite3-dev curl git unzip netcat libxml2-dev libicu-dev libpq-dev libzip-dev libonig-dev libxslt-dev && \
    docker-php-ext-configure intl && \
    docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
    docker-php-ext-install -j$(nproc) zip opcache intl pdo pdo_pgsql pgsql pdo_mysql gd xsl mbstring && \
    pecl install apcu && docker-php-ext-enable apcu && \
    apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# TODO : run make file

EXPOSE 9000