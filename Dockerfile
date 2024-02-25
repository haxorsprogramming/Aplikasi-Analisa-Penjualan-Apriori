# Use the official Nginx image as the base image
FROM nginx:alpine

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
