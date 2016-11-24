#!/bin/bash
# wait for Linux Diagnostic Extension to complet
# install Apache and PHP
apt-get -y update
apt-get -y install apache2 php5
apt-get install php7.0-cli
apt-get install curl php5-cli git
apt-get install wget

curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# write some PHP
cd /var/www/html
curl -sS https://getcomposer.org/installer | php
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/index.php
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/composer.json
wget http://getcomposer.org/composer.phar
php composer.phar install       
composer.phar install  
rm /var/www/html/index.html
# restart Apache
apachectl restart

