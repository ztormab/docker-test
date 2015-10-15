FROM ztorm/base-without-code

# Checkout code
WORKDIR /var
RUN rm -rf www && git clone git@github.com:ztormab/docker-test www
RUN if [ -f composer.json ]; then composer install --no-interaction; fi

