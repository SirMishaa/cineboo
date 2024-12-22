FROM dunglas/frankenphp:1-builder-php8.4

RUN apt-get update \
    && DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends \
    git \
    unzip \
    librabbitmq-dev \
    libpq-dev \
    libicu-dev \
    libzip-dev \
    supervisor

RUN install-php-extensions \
    gd \
    opcache \
    pcntl \
    pdo \
    pdo_pgsql \
    redis \
    intl \
    zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
WORKDIR /var/www/html

# Copy the Laravel application files into the container.
COPY ./cineboo-api/ .

# Start with base PHP config, then add extensions.
COPY ./cineboo-infra/php/php.ini /usr/local/etc/php/
COPY ./cineboo-infra/etc/supervisor.d/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Install PHP extensions
RUN pecl install xdebug

# Install Laravel dependencies using Composer.
RUN composer install

# Enable PHP extensions
RUN docker-php-ext-enable xdebug

# Set permissions for Laravel.
RUN chown -R www-data:www-data storage bootstrap/cache

EXPOSE 8000 443 5173
CMD ["/usr/bin/supervisord", "-n", "-c",  "/etc/supervisor/conf.d/supervisord.conf"]

# Set Caddy server name to "http://" to serve on 80 and not 443
# Read more: https://frankenphp.dev/docs/config/#environment-variables
#ENV SERVER_NAME="http://"

#FROM --platform=linux/amd64 dunglas/frankenphp:static-builder as build
## Copy your app
#WORKDIR /go/src/app/dist/app
#COPY . .
#
## Remove the tests and other unneeded files to save space
## Alternatively, add these files to a .dockerignore file
#RUN rm -Rf tests/
#
## Copy .env file
#RUN cp .env.example .env
## Change APP_ENV and APP_DEBUG to be production ready
#RUN sed -i'' -e 's/^APP_ENV=.*/APP_ENV=production/' -e 's/^APP_DEBUG=.*/APP_DEBUG=false/' .env
#
## Make other changes to your .env file if needed
#
## Install the dependencies
#RUN composer install --ignore-platform-reqs --no-dev -a
#
## Build the static binary
#WORKDIR /go/src/app/
#RUN EMBED=dist/app/ ./build-static.sh
