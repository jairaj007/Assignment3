apt-get -y update
apt-get -y install apache2
apache2ctl configtest
apt-get install -y php7
sudo apt install php libapache2-mod-php
apt-get install -y curl php7.0-cli git
apt-get install -y wget

curl -sS https://getcomposer.org/installer | php

cd /var/www/html
#wget https://raw.githubusercontent.com/irwinwilliams/azure-quickstart-templates/101-vm-simple-linux-withphp/master/index.php

wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/composer.json
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/index.php
wget https://raw.githubusercontent.com/jairaj007/Assignment3/master/do_work.php
wget http://getcomposer.org/composer.phar
php composer.phar install
rm /var/www/html/index.html

apachectl restart
