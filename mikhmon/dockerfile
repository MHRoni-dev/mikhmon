# Use an official PHP runtime as a parent image
FROM php:8.2-apache

# Copy application source code into the container
COPY . /var/www/html

# Set permissions and ownership
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Install any PHP extensions if needed
RUN docker-php-ext-install mysqli pdo pdo_mysql
