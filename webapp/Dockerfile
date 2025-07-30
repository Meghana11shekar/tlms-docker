# Use official PHP image with Apache
FROM php:8.2-apache

# Enable mod_rewrite for URL rewriting (if needed)
RUN a2enmod rewrite

# Copy all files from current directory into the Apache web root
COPY . /var/www/html/

# Optional: Set permissions (Linux-friendly)
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Expose port 80 to the outside
EXPOSE 80
