# HomegrownMVC Skeleton
Skeleton for project using [HomegrownMVC](https://github.com/konapun/HomegrownMVC) with the recommended setup:
  * Models: HomegrownMVC
  * Controllers: HomegrownMVC
  * Views: [Smarty](http://www.smarty.net/) (included in /lib/Smarty)
  * Database: [PDO](http://php.net/pdo) (add your connection params in /config/environments/production.json)
  * Requests: HomegrownMVC
  * Configuration: [tiered-configuration](https://github.com/konapun/tiered-configuration) read in and made available as static functions via `Config`

## Getting started
  1. Assuming you have installed PDO with drivers for the database of your choice, simply download this project and put it in your webroot.
  2. Ensure your Apache config has `AllowOverride` enabled so this project's .htaccess can do URL rewrites.
  3. Next, open config/environments/production.json (or whatever specific environment file you're using) and edit PDO connection parameters for your database. **If you're NOT using a database then set the USE_DATABASE parameter to false in /config/environments/GLOBAL.json**.
  4. Make sure your permissions are correctly set. The server needs to be able to read and execute every folder/file and needs to be able to write to /tmp and /templates_c.
  5. Start creating controllers and defining your routes, and creating models (see [HomegrownMVC documentation](https://github.com/konapun/HomegrownMVC) for details).
  6. Create your pages in views as Smarty templates and invoke the view engine from your controller.
    - A sample error controller and error page is included and can be used as an example
