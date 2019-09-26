<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

   $app->get('/', 'IndexController');
   $app->post('/addToDo', 'AddToDoController');
   $app->post('/updateToDo', 'UpdateToDoController');
};
