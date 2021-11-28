<?php

use Dotenv\Dotenv;

define("BASEPATH", __DIR__ . "/../");

include BASEPATH . "bootstrap/config.php";
include BASEPATH . "/vendor/autoload.php";

try {
	$dotenv = Dotenv::createImmutable(BASEPATH);
	$dotenv->safeLoad();
	$dotenv->required(['title', 'path_base', 'url_base']);
	$dotenv->required('title')->notEmpty();
	$dotenv->required('path_base')->notEmpty();
	$dotenv->required('url_base')->notEmpty();
} catch (Exception $e) {

	echo "<pre style='color: #9c4100; background: #fff; z-index: 999; position: relative; padding: 10px; margin: 10px; border-radius: 5px; border-left: 3px solid #c56705;'>";
	echo $e->getMessage();
	echo "</pre>";
	
}

include "constants.php";
include BASEPATH . "libs/helper.php";
