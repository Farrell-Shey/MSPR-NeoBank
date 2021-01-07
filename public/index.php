<?php

require '../vendor/autoload.php';

require '../controllers/Autoloader.php';
\MSPR\Autoloader::Register();


$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();

$router->map('GET', '/', 'home');
$router->map('GET', '/contact', 'contact', 'contact');
$router->map('GET', '/blog/[*:slug]-[i:id]', 'blog/article', 'article');

$match = $router->match();


if (is_array($match)) {

    $params = $match['params'];
    var_dump($params);

//    $controller = new MSPR\UserController();
//    $controller->showUser($params);




    /*
        if (isset($match['target'])) {
            $class = ucfirst($match['target']) . 'Controller';
            $controller = new $class();
            $controller->Update();
        }
    */

} else {
    \MSPR\Controller::error();
}
