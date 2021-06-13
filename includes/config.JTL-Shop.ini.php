<?php
define('PFAD_ROOT', 'C:\\xampp-7\\htdocs\\jtl/');
define('URL_SHOP', 'http://localhost/jtl');
define('DB_HOST','localhost');
define('DB_NAME','arafa');
define('DB_USER','root');
define('DB_PASS','');

define('BLOWFISH_KEY', 'f02c1dfbe3fa541863b4b103716723');

define('EVO_COMPATIBILITY', false);

//enables printing of warnings/infos/errors for the shop frontend
define('SHOP_LOG_LEVEL', E_ALL);
//enables printing of warnings/infos/errors for the dbeS sync
define('SYNC_LOG_LEVEL', E_ALL ^ E_NOTICE ^ E_DEPRECATED ^ E_WARNING);
//enables printing of warnings/infos/errors for the admin backend
define('ADMIN_LOG_LEVEL', E_ALL);
//enables printing of warnings/infos/errors for the smarty templates
define('SMARTY_LOG_LEVEL', E_ALL);
//excplicitly show/hide errors
ini_set('display_errors', 0);
