FROM node:current-alpine3.14

COPY client/docker/run.sh /opt/run.sh
RUN chmod 777 /opt/run.sh

WORKDIR /var/www

USER 1000

CMD ["/opt/run.sh"]