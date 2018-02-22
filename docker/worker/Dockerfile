FROM ubuntu:16.04

RUN apt-get update && \
  apt-get -y --no-install-recommends install wget ca-certificates && \
  apt-get update && \
  apt-get -y --no-install-recommends install \
    php7.0-cli \
    php7.0-curl \
    php7.0-json \
    php7.0-xml \
    php7.0-sqlite && \
  apt-get -y autoremove && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

COPY ./rootfs /

CMD ["/usr/bin/queuelistener.sh"]
