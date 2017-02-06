FROM zekai/lamp
MAINTAINER Ankan Basu <basu.ankan@gmail.com>
RUN apt-get update
COPY mywebproject /var/www/html
#COPY htdocs/ /var/www/html
#COPY htdocsIncludes/ /var/www/html
#COPY classnotes/ /var/www/html
#COPY random/ /var/www/html

RUN ["service", "apache2", "start"]

