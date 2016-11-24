#!/bin/bash
# wait for Linux Diagnostic Extension to complet
# install Apache and PHP
apt-get -y update
apt-get -y install apache2 php5
apt-get install curl php5-cli git
apt-get install wget

curl -sS https://getcomposer.org/installer | php
# write some PHP
cd /var/www/html
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/index.php
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/composer.json
wget http://getcomposer.org/composer.phar
php composer.phar install       
rm /var/www/html/index.html
# restart Apache
apachectl restart

