FROM ubuntu:16.04
#FROM php:7.3.11-apache

#Update Repository
RUN apt-get update -y

#Install Apache
RUN apt-get install -y apache2

#Install PHP Modules
RUN apt-get install -y php7.0 libapache2-mod-php7.0 php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml  php7.0-mysql  php7.0-mcrypt  php7.0-zip 

#Copy Application Files
#COPY . /usr/src/diaperplanner
#WORKDIR /usr/src/diaperplanner
RUN rm -rf /var/www/html/*
ADD . /var/www/html/

#Open Port 80
EXPOSE 80

#Start Apache Service
CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND" ]
#CMD [ "/usr/sbin/apache2ctl", "-D", "FOREGROUND", "php", "./index.php" ]

#CMD [ "php", "./index.php" ]