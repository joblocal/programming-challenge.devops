FROM ubuntu:16.04

RUN apt-get update && \
  apt-get -y --no-install-recommends install wget ca-certificates && \
  apt-get update && \
  apt-get -y --no-install-recommends install \
    runit \
    nginx \
    php7.0-fpm \
    php7.0-cli \
    php7.0-curl \
    php7.0-json \
    php7.0-xml \
    php7.0-sqlite && \
  apt-get -y autoremove && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* && \
  usermod -u 1000 www-data && \
  chown -R www-data:www-data /var/log/nginx && \
  ln -sf /dev/stdout /var/log/nginx/access.log && \
  ln -sf /dev/stderr /var/log/nginx/error.log

COPY ./rootfs /

CMD ["/usr/bin/runsvdir", "-P", "/etc/service"]
