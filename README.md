# Laravix
Laravix is simple quick start Laravel 5 skeleton application

## Create a virual host ##

Go to `C:\xampp\apache\conf\extra` and edit `httpd-vhosts.conf` file by adding

`<VirtualHost laravix.dev:80>
DocumentRoot "C:/xampp/htdocs/laravix"
ServerName localhost
</VirtualHost>`

Go to `C:\Windows\System32\drivers\etc` and edit `hosts` file by adding

`127.0.0.1 laravix.dev`

restart the apache server

## Installation ##

* `git clone https://github.com/AppflowDevelopment/Laravix.git projectname`
* `cd projectname`
* `composer install`
* create a database and edit your *.env* file (remove *.example*)
* `php artisan migrate` to create tables
* `php artisan db:seed` to populate tables

Now go to [laravix.dev] (http://laravix.dev/)

## Credits ##

- [Laravel](https://laravel.com/)
- [Bootstrap](https://getbootstrap.com/)
- [JQuery](https://jquery.com/)
- [Font Awesome](http://fontawesome.io/)

## License ##
This is free software distributed under the terms of the MIT license.
