<?php
// HTTP
define('HTTP_SERVER', 'http://localhost/upload/');

// HTTPS
define('HTTPS_SERVER', 'http://localhost/upload/');

// DIR
define('DIR_OPENCART', '/var/www/opencart/upload/');
define('DIR_APPLICATION', '/var/www/opencart/upload/catalog/');
define('DIR_EXTENSION', '/var/www/opencart/upload/extension/');
define('DIR_IMAGE', '/var/www/opencart/upload/image/');
define('DIR_SYSTEM', '/var/www/opencart/upload/system/');
define('DIR_STORAGE', '/var/www/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'manas');
define('DB_PASSWORD', 'manasopencart');
define('DB_DATABASE', 'opencart');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');