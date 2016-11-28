sudo apt-get -y update 
sudo apt-get -y install apache2
sudo apt-get install -y php5
sudo apt-get install -y curl php5-cli git
sudo apt-get install -y wget

sudo curl -sS https://getcomposer.org/installer | php

cd /var/www/html
sudo wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/index.php
#if you need composer, enable these lines
sudo wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/composer.json
sudo wget http://getcomposer.org/composer.phar
sudo php composer.phar install
sudo rm /var/www/html/index.html

cd
echo "ServerName localhost" | sudo tee /etc/apache2/conf-available/servername.conf
sudo a2enconf servername
cd /var/www/html
sudo service apache2 restart


