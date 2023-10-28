<?php

$path = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $path . 'app' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $path . 'views' . DIRECTORY_SEPARATOR);
define('UPLOADS_PATH', $path . 'uploads' . DIRECTORY_SEPARATOR);

require APP_PATH . 'Database.php';

