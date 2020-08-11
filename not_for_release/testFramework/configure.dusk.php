<?php
// This should be considered as an example file only.
// you should create a local.configure.dusk.php file


define('STRICT_ERROR_REPORTING', true);

define('HTTP_SERVER', 'http://localhost');
define('HTTPS_SERVER', 'https://localhost');

define('DIR_WS_CATALOG', '/');
define('DIR_WS_HTTPS_CATALOG', '/');

define('DIR_FS_CATALOG', getcwd());

define('DB_TYPE', 'mysql'); // always 'mysql'
define('DB_PREFIX', ''); // prefix for database table names -- preferred to be left empty
define('DB_CHARSET', 'utf8mb4'); // 'utf8mb4' or older 'utf8' / 'latin1' are most common
define('DB_SERVER', 'localhost');  // address of your db server
define('DB_SERVER_USERNAME', 'root');
define('DB_SERVER_PASSWORD', '');
define('DB_DATABASE', 'zencart');

define('DEVELOPER_MODE', true);

define('ADMIN_NAME', 'Admin');
define('ADMIN_EMAIL', 'test@zencart.test');
