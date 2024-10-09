# Use the official PHP image
FROM php:latest

# Install cURL extension
RUN apt-get update && apt-get install -y libcurl4-openssl-dev \
    && docker-php-ext-install curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Copy application files to the container
COPY . /var/www/html/

# Set permissions if needed
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80

# Start the PHP built-in server
CMD ["php", "-S", "0.0.0.0:80", "-t", "/var/www/html"]
