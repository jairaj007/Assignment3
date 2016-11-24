#!/bin/bash
# wait for Linux Diagnostic Extension to complete
while ( ! grep "Start mdsd" /var/log/azure/Microsoft.OSTCExtensions.LinuxDiagnostic/2.1.5/extension.log); do
    sleep 5
done

# install Apache and PHP
apt-get -y update
apt-get -y install apache2 php5
apt-get install php7.0-cli

# write some PHP
cd /var/www/html
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/index.php
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/composer.json
wget http://getcomposer.org/composer.phar
php composer.phar install                    
rm /var/www/html/index.html
# restart Apache
apachectl restart

