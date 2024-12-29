# Configuration de VirtualHost pour PHP/Symfony

## Configuration du VirtualHost

Ajoutez la configuration suivante à votre fichier `httpd-vhosts.conf` pour configurer un VirtualHost local pour votre projet Symfony :

```apache
<VirtualHost *:80>
    ServerName vhostelection
    DocumentRoot "c:/wamp64/www/phpsymphony"
    <Directory "c:/wamp64/www/phpsymphony/">
        Options +Indexes +Includes +FollowSymLinks +MultiViews
        AllowOverride All
        Require local
    </Directory>
</VirtualHost>
