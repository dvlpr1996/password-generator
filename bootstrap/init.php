<?php

use Dotenv\Dotenv;

define('APP_BASE_PATH', __DIR__ . '/../');

require_once APP_BASE_PATH . '/vendor/autoload.php';
require_once APP_BASE_PATH . '/errors/errors.php';

try {
    $dotenv = Dotenv::createImmutable(APP_BASE_PATH);
    $dotenv->safeLoad();
    $dotenv->required(['title', 'PathBase', 'UrlBase']);
    $dotenv->required('title')->notEmpty();
    $dotenv->required('PathBase')->notEmpty();
    $dotenv->required('UrlBase')->notEmpty();
} catch (Exception $e) {
    display_error($e->getMessage());
}

require_once APP_BASE_PATH . 'libs/constants.php';
