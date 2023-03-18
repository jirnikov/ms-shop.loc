<?php

define("DEBUG", 1);
define("ROOT", dirname(__DIR__));
define("WWW", ROOT.'/public');
define("APP", ROOT.'/app');
define("CORE", ROOT.'/vendor/jdv');
define("HELPERS", ROOT.'/vendor/jdv/helpers');
define("CACHE", ROOT.'/tmp/cache');
define("LOGS", ROOT.'/tmp/logs');
define("CONFIG", ROOT.'/config');
define("LAYOUT", "msshop" );
define("PATH", "http://ms-shop.loc");
define("ADMIN", "http://ms-shop.loc/admin");
define("NO_IMAGE", "upload/no_image.jpg");

require_once ROOT .'/vendor/autoload.php';
