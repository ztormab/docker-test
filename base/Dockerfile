FROM php:5.6-apache

# Install git
RUN apt-get -y update && apt-get -y install git

# Copy Github keys
RUN mkdir -p /root/.ssh
COPY keys /root/.ssh/
RUN chmod 600 /root/.ssh/id_ecdsa

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN chmod +x /usr/local/bin/composer

# Checkout code
WORKDIR /var
RUN rm -rf www && git clone git@github.com:ztormab/docker-test www
RUN if [ -f composer.json ]; then composer install --no-interaction; fi

