# Use the official Nginx image as the base image
FROM nginx:alpine

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the Nginx server block configuration file
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy the Laravel application files to the container
COPY . .

# Install PHP and necessary extensions
RUN apk --update --no-cache add \
    php8 \
    php8-fpm \
    php8-opcache \
    php8-openssl \
    php8-pdo \
    php8-pdo_mysql \
    php8-mbstring \
    php8-tokenizer \
    php8-json \
    php8-xml \
    php8-ctype \
    php8-xmlwriter \
    php8-fileinfo \
    php8-gd \
    php8-pecl-imagick \
    php8-session \
    php8-zip \
    php8-curl \
    php8-dom \
    php8-xmlreader \
    php8-redis \
    php8-exif \
    php8-intl \
    php8-simplexml

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Laravel dependencies
RUN composer install --no-dev

# Set permissions
RUN chmod -R 775 storage bootstrap/cache

# Expose port 80
EXPOSE 80

# Start PHP-FPM and Nginx
CMD ["nginx", "-g", "daemon off;"]
