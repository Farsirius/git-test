<?php
define("DEBUG", 1);
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("WWW", ROOT.'/public');
define("APP", ROOT.'/app');
define("CORE", ROOT.'/vendor/scifishop/core');
define("LIBRARIES", ROOT.'/vendor/scifishop/core/libraries');
define("CACHE", ROOT.'/tmp/cache');
define("CONF", ROOT.'/config');
define("LAYOUT", 'farcorp');
define("ADMIN", ROOT.'/admin');

require_once ROOT.'/vendor/autoload.php';