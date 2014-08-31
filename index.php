<?php
header("Content-type: text/html; charset=utf-8");
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('APP_DEBUG', true);
define('SITE_URL', 'http://127.0.0.1');
define('CSS_URL', 'http://127.0.0.1/shop/public/Home/css');
define('IMAGES_URL', 'http://127.0.0.1/shop/public/Home/images');
define('JS_URL', 'http://127.0.0.1/shop/public/Home/js');

define('ADMIN_CSS_URL', 'http://127.0.0.1/shop/public/Admin/css');
define('ADMIN_IMAGES_URL', 'http://127.0.0.1/shop/public/Admin/img');
require '../thinkphp/ThinkPHP/ThinkPHP.php';
