<?php

//define the system directory
define('SYSTEM_DIR', __DIR__ . '/..');

//define the public directory
define('PUBLIC_DIR', SYSTEM_DIR . '/public');

//define the vendor directory
define('VENDOR_DIR', SYSTEM_DIR . '/vendor');

//define the app directory
define('APP_DIR', SYSTEM_DIR . '/app');

//define the routes directory
define('ROUTES_DIR', SYSTEM_DIR . '/routes');

//require_once the 3 files that we created
require_once VENDOR_DIR . '/codingbootcamp/exercises/db.php';
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/helpers.php';
require_once VENDOR_DIR . '/codingbootcamp/tinymvc/request.php';
require_once VENDOR_DIR . '/polakjan/tinymvc/config.php';
