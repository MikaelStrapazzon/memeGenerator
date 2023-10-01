FROM node:18.18-alpine as node
FROM webdevops/php-apache:8.2-alpine

COPY --from=node / /