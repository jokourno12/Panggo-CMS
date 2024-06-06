# Image wordpress
FROM wordpress:latest

# Maintainer
LABEL maintainer="Jokourno <jokourno@panggo.com>"

# Configuration
COPY wp-config.php /var/www/html/wp-config.php

# Update
RUN rm -rf /var/www/html/
COPY . /var/www/html/

# Default expose port
EXPOSE 80
