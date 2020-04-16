# Laravix 5 is DEPRECATED
Laravix is simple quick start Laravel 5 skeleton application

## Create a virual host ##

Go to `C:\xampp\apache\conf\extra` and edit `httpd-vhosts.conf` file by adding

`<VirtualHost laravix.web:80>
DocumentRoot "C:/xampp/htdocs/laravix"
ServerName localhost
</VirtualHost>`

Go to `C:\Windows\System32\drivers\etc` and edit `hosts` file by adding

`127.0.0.1 laravix.web`

restart the apache server

## Installation ##

* `git clone https://github.com/AppflowDevelopment/Laravix.git laravix`
* `cd laravix`
* `composer install`
* create a database and edit your *.env* file (remove *.example*)
* `php artisan migrate` to create tables
* `php artisan db:seed` to populate tables

Now go to [laravix.web] (http://laravix.web/)

## Update ##

Modify "composer.json"
* `composer update`

## How to Create Symbolic Link with mklink ##
* mklink /D "C:\xampp\htdocs\Laravix" "C:\Users\Administrator\Documents\GitHub\Laravix"

## Credits ##

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [JQuery](https://jquery.com/)
- [Font Awesome](http://fontawesome.io/)

## License ##
This is free software distributed under the terms of the MIT license.
