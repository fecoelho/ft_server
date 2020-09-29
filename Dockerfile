#   Getting Debian Buster image.
FROM debian:buster

#   Run installation.
ARG DEBIAN_FRONTEND=noninteractive

#   Label.
LABEL author="Felipe Coelho" id="fcoelho"

#   Download package info.
RUN apt-get -y update

#   Dowload latest patches
RUN apt-get -y upgrade

#   Install basic tools
RUN apt-get install -qy wget

#	Install Nginx.
RUN apt-get install -qy nginx

#   Install OpenSSL.
RUN apt-get install -qy openssl

#   Install MariaDB
RUN apt-get install -qy mariadb-server

#	Instal PHP 7.3 and PHP extensions
RUN apt-get install -qy php7.3 php-fpm php-mysql php-cli php-mbstring

# Copy source files to the root of the container.
COPY srcs /root/

# Server setup.
RUN bash /root/setup.sh

# Expose network ports that are going to be used.
EXPOSE 80/tcp
EXPOSE 80/udp

EXPOSE 443/tcp
EXPOSE 443/udp

# Start services.
ENTRYPOINT bash /root/start.sh

# Keeps container running
CMD tail -f /dev/null