#!/bin/bash

if [ "$(whoami)" != 'root' ]; then
echo "Has d'executar l'script amb root."
exit 1;
fi
read -p "Nom del domini: " servn
read -p "Usuari que vols utilitzar: " usr
if ! mkdir -p /var/www/html/$servn; then
echo "El directori web ja existeix."
else
echo "Directori creat amb éxit!"
fi
echo "<?php echo '<h1>Hello World</h1><p>$servn</p>'; ?>" > /var/www/html/$servn/index.php
chown -R $usr:$usr /var/www/html/$servn
chmod -R '755' /var/www/html/$servn
mkdir /var/log/$$servn


echo "<VirtualHost *:80>
        ServerAdmin admin@$servn
        ServerName $servn
        ServerAlias www.$servn
        DocumentRoot /var/www/html/$servn
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
       </VirtualHost>" > /etc/apache2/sites-available/$servn.conf
if ! echo -e /etc/apache2/sites-available/$servn.conf; then
echo "No s'ha creat el VirtualHost."
else
echo "VirtualHost creat!"
fi

echo "127.0.0.1 $servn" >> /etc/hosts
if [ "$alias" != "$servn" ]; then
echo "127.0.0.1 $alias" >> /etc/hosts
fi
a2ensite $servn.conf
systemctl reload apache2
echo "Tot correcte! Recorda configurar el fitxer host de Windows."
