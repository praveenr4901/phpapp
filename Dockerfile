FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    unzip && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd mysqli pdo pdo_mysql zip xml

# Install Composer
RUN curl -sS https://getcomposer.org/installer -o /tmp/composer-setup.php && \
    HASH=$(curl -sS https://composer.github.io/installer.sig) && \
    php -r "if (hash_file('SHA384', '/tmp/composer-setup.php') !== '$HASH') { echo 'Installer corrupt'; unlink('composer-setup.php'); exit(1); }" && \
    php /tmp/composer-setup.php --install-dir=/usr/local/bin --filename=composer && \
    rm /tmp/composer-setup.php

# Set work directory
WORKDIR /var/www/html

# Copy app files
COPY . .

# Adjust permissions
RUN chown -R www-data:www-data .

# Install PHP Composer dependencies
RUN composer install

# Expose port
EXPOSE 80

# Clean up to reduce image size
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

