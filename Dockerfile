FROM php:7.4-apache

# Install Apache and PHP extensions
RUN apt-get update && apt-get install -y \
    apache2 \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . .

# Expose port 80 to the outside world
EXPOSE 80

# Set ServerName to suppress warning
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Start Apache in the foreground
CMD ["apache2ctl", "-D", "FOREGROUND"]

