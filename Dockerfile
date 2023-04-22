FROM php:7.3-apache

RUN apt-get update && \
    apt-get install -y git expect tcl-expect-dev && \
    rm -rf /var/lib/apt/lists/*

RUN pecl install expect && \
    docker-php-ext-enable expect
    
# Copy project folder to container
RUN git clone https://github.com/TheWation/XXESandbox.git /var/www/html

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

CMD ["apache2-foreground"]