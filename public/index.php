<?php

use App\Models\CoreModel;
use App\Utils\Database;

require_once '../vendor/autoload.php';

session_start();


/* ------------
--- ROUTAGE ---
-------------*/

$router = new AltoRouter();

if (array_key_exists('BASE_URI', $_SERVER)) {

    $router->setBasePath($_SERVER['BASE_URI']);

} else {

    $_SERVER['BASE_URI'] = '/';
}

if(substr($_SERVER['BASE_URI'], -1) !== "/")
{
    $_SERVER['BASE_URI'] = $_SERVER['BASE_URI'] . '/'; 
}


$router->map(
    'GET',
    '/',
    [
        'method' => 'home',
        'controller' => '\App\Controllers\MainController'
    ],
    'main-home'
);


/************
 * AUTHOR *
 ************/


$router->map(
    'GET',
    '/author/list',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\AuthorController'
    ],
    'author-list'
);


/***********
 * BOOK *
 ***********/

$router->map(
    'GET',
    '/book/list',
    [
        'method' => 'list',
        'controller' => '\App\Controllers\BookController'
    ],
    'book-list'
);

$router->map(
    'GET',
    '/book/review',
    [
        'method' => 'review',
        'controller' => '\App\Controllers\BookController'
    ],
    'book-review'
);


/* -------------
--- DISPATCH ---
--------------*/

$match = $router->match();

$dispatcher = new Dispatcher($match, '\App\Controllers\ErrorController::err404');

$dispatcher->dispatch();


