# HomegrownMVC Skeleton
Skeleton for project using [HomegrownMVC](https://github.com/konapun/HomegrownMVC) with the recommended setup:
  * Models: HomegrownMVC
  * Controllers: HomegrownMVC
  * Views: [Smarty](http://www.smarty.net/) (included in /lib/Smarty)
  * Database: [PDO](http://php.net/pdo) (add your connection params in /config/Config.php)
  * Requests: HomegrownMVC

Your Apache config must `AllowOverride` so this project's .htaccess can do URL rewrites.

## Getting started
  1. Assuming you have installed PDO with drivers for the database of your choice, simply download this project and put it in your webroot.
  2. Next, open config/Config.php and edit PDO connection parameters for your database
  3. Start creating controllers and defining your routes (see [documentation](https://github.com/konapun/HomegrownMVC) for details)
  4. Create your pages in views as Smarty templates and invoke the view engine from your controller.
    - A sample error controller and error page is included and can be used as an example
