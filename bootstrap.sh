apt-get update
apt-get upgrade

apt-get install -y apache2

a2enmod rewrite

service apache2 restart

sudo apt install -y python3-pip
pip3 install flask==1.1.2

cp /var/www/html/site1.html /var/www/html/index.html 

cp /var/www/html/task3.crt /etc/ssl/certs/task3.crt 
cp /var/www/html/task3.key /etc/ssl/private/task3.key 

cp /var/www/html/ssl-params.conf /etc/apache2/conf-available/ssl-params.conf

cp /var/www/html/httpd.conf /etc/apache2/conf-available/httpd.conf
cp /etc/apache2/sites-available/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf.bak
cp /var/www/html/default-ssl.conf /etc/apache2/sites-available/default-ssl.conf

cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf.bak
cp /var/www/html/000-default.conf /etc/apache2/sites-available/000-default.conf


sudo a2enmod ssl
sudo a2enmod headers

sudo a2ensite default-ssl

sudo a2enconf ssl-params

sudo apache2ctl configtest


python3 /var/www/html/server.py