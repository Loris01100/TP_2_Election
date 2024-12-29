<VirtualHost *:80>
	ServerName vhostelection
	DocumentRoot "c:/wamp64/www/phpsymphony"
	<Directory  "c:/wamp64/www/phpsymphony/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
