<<<<<<< HEAD
<<<<<<< HEAD
# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy the current directory contents into the container at /var/www/html/
COPY . /var/www/html/

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
=======
# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy the current directory contents into the container at /var/www/html/
COPY . /var/www/html/

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
>>>>>>> ebd8675763b0223774f4c8821a30c05b1ecd60f0
=======
# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Copy the current directory contents into the container at /var/www/html/
COPY . /var/www/html/

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Set permissions for Apache
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html
>>>>>>> ebd8675763b0223774f4c8821a30c05b1ecd60f0
