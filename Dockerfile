# Use the official PHP image with FPM
FROM php:8.1-fpm

# Install NGINX
RUN apt-get update && apt-get install -y nginx && \
    apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy NGINX configuration
COPY nginx/default.conf /etc/nginx/conf.d/default.conf

# Copy project files
COPY project1 /var/www/html/mikhmon-old
COPY project2 /var/www/html/mikhmon-new

# Set file permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose ports
EXPOSE 80

# Start NGINX and PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]
