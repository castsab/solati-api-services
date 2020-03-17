# solati-api-services

### Installing Lumen 6.x

* [Lumen] (https://lumen.laravel.com/docs/6.x) - Installing Lumen

### Installation

* `composer install`
* `php artisan migrate`

### Setting virtual host 

```
path: C:\xampp\apache\conf\extra\httpd-vhosts.conf

<Directory C:/xampp/htdocs>
    AllowOverride All
    Require all granted
    Allow from all
</Directory>

<VirtualHost *:80>
    DocumentRoot C:/xampp/htdocs
    ServerName localhost
</VirtualHost>

<VirtualHost *:80>
    DocumentRoot C:/xampp/htdocs/solati-api-services/public
    ServerName api.solati
</VirtualHost>
```

### Add ServerName etc host windows

```
path: c:\Windows\System32\Drivers\etc\hosts

Add host: 127.0.0.1 api.solati
```