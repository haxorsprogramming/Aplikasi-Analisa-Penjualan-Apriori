# Use the official Nginx image as the base image
FROM php:8.1.2-fpm-alpine

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the Nginx server block configuration file
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy the Laravel application files to the container
COPY . .

# Install PHP and necessary extensions
RUN apk update && apk --no-cache add autoconf \
    $PHPIZE_DEPS \
    postgresql-dev \
    mysql-dev \
    libzip-dev \
    freetype \
    libpng \
    libjpeg-turbo \
    freetype-dev \
    libpng-dev \
    jpeg-dev \
    libjpeg \
    libjpeg-turbo-dev \
    php-xml \
    php-json \
    php-curl \
    php-zip \
    icu-dev \
    linux-headers

RUN docker-php-ext-install gd

RUN apk --no-cache add shadow && \
    usermod -u 1000 www-data && \
    groupmod -g 1000 www-data


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

EXPOSE 9000
CMD ["php-fpm"]
