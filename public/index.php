<?php
include '../bootstrap/bootstrap.php';
var_dump(PUBLIC_DIR);

$route = \codingbootcamp\tinymvc\request::get('route', 404);

use \codingbootcamp\tinymvc\request as request;

$route = request::get('route', 404);

echo $route;