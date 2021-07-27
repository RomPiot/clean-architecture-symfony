# https://github.com/bitnami/bitnami-docker-php-fpm/blob/8.0.8-debian-10-r24/8.0/debian-10/Dockerfile

FROM bitnami/php-fpm:8.0.8

# RUN apt-get update && \
#     apt-get install -y --no-install-recommends libssl-dev zlib1g-dev curl git unzip netcat libxml2-dev libpq-dev libzip-dev && \
#     pecl install apcu && \
#     docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql && \
#     docker-php-ext-install -j$(nproc) zip opcache intl pdo_pgsql pgsql && \
#     docker-php-ext-enable apcu pdo_pgsql sodium && \
#     apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN apt-get update
RUN apt-get install -y --no-install-recommends apt-utils libicu-dev libpng-dev libssl-dev zlib1g-dev curl git unzip netcat libxml2-dev libpq-dev libzip-dev libonig-dev libxslt-dev
RUN docker-php-ext-configure intl
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql
RUN docker-php-ext-install zip opcache intl pdo pdo_pgsql pgsql gd mbstring xsl
RUN docker-php-ext-enable apcu pdo_pgsql sodium
RUN pecl install apcu && docker-php-ext-enable apcu

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

EXPOSE 9000