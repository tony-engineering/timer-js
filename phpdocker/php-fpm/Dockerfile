FROM phpdockerio/php74-fpm:latest
WORKDIR "/application"
RUN chmod -R 777 /application

# Fix debconf warnings upon build
ARG DEBIAN_FRONTEND=noninteractive