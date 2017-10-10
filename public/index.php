<?php
include '../bootstrap/bootstrap.php';

var_dump(PUBLIC_DIR);

$route = \codingbootcamp\tinymvc\request::get('route', 404);

use \codingbootcamp\tinymvc\request as request;

$route = request::get('route', 404);

echo $route;

//have a look at the request and return the name of the controller and the name of the action that should handle this request
function getControllerActionFromRequest()
{
    //declares $routes as an empty array
    $routes = [];

    //replaces $routes with the variable $routes defined in web.php
    include ROUTES_DIR . '/web.php';

    //get the current route from the request or homepage
    $current_route= request('route', 'homepage');

    //if there is an item in $routes with $current_route for index
    if(isset($routes[$current_route]))
    {
        return $routes[$current_route];
    }
    else
    {
        return [
            'controller' => 'errorController',
            'action' => 'error404'
        ];
    }

    //var_dump($routes);
}

function runControllerMethod($controller_name, $action_name)
{
    //for testing
include APP_DIR . '/controllers/' .$controller_name . '.php';

//create a new controller object
$controller_class = '\\app\\controllers\\' . $controller_name;
$controller = new $controller_class;

//call the RIGHT action of the controller object
echo $controller->$action_name();
}

//we get the array with the name of the controllerand its action from request
$controller_action = getControllerActionFromRequest();

//we run the right controller and its action
runControllerMethod($controller_action['controller'], $controller_action['action']);




