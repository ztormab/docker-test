FROM php:5.6-apache

# Install PDO MySQL module
RUN docker-php-ext-install pdo pdo_mysql

# Install git
RUN apt-get -y update && apt-get -y install git

# Copy Github keys
RUN mkdir -p /root/.ssh
COPY keys /root/.ssh/
RUN chmod 600 /root/.ssh/id_ecdsa

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chmod +x /usr/local/bin/composer
