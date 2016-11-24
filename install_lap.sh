#!/bin/bash

# install Apache and PHP (in a loop because a lot of installs happen
# on VM init, so won't be able to grab the dpkg lock immediately)
apt-get -y update 
apt-get -y install apache2 php5
apt-get install curl
apt-get install php7.0-cli



# write some PHP; these scripts are downloaded beforehand as fileUris
cp index.php /var/www/html/
cp composer.json /var/www/html/
curl -O /var/www/html http://getcomposer.org/composer.phar
php /var/www/html/composer.phar install
chown www-data:www-data /var/www/html/*
rm /var/www/html/index.html

# restart Apache
apachectl restart
