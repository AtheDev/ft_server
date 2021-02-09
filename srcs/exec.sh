mkdir /var/www/localhost

rm /etc/nginx/sites-available/default
mv ./default /etc/nginx/sites-available/

mkdir /etc/nginx/ssl
mv ./localhost.key /etc/nginx/ssl/
mv ./localhost.pem /etc/nginx/ssl/

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar -zxvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages /var/www/localhost/phpMyAdmin
mv ./config.inc.php /var/www/localhost/phpMyAdmin/

if [[ "$AUTOINDEX" == "off" ]]
then
	sed -i 's/autoindex on/autoindex off/g' /etc/nginx/sites-available/default
	mv ./index.php /var/www/localhost/
fi
service php7.3-fpm start

service mysql start
echo "CREATE DATABASE new_database;" | mysql -u root
echo "CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON new_database.* TO 'username' IDENTIFIED BY 'password';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

wget https://wordpress.org/latest.tar.gz
tar xzvf latest.tar.gz
mv wordpress/ /var/www/localhost/
mv ./wp-config.php /var/www/localhost/wordpress/

chown www-data:www-data /var/www/* -R
chmod 755 /var/www/* -R

service nginx start
service php7.3-fpm restart
service mysql restart

