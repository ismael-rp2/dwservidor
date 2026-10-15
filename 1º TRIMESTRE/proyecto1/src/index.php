<?php

    //$titulo = $_SERVER['REQUEST_RI'];

    include_once "./vendor/autoload.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;
use Ismael\Proyecto1\Controllers\UserController;
use Ismael\Proyecto1\Controllers\PeliculaController;

    $router = new RouteCollector();

    $router->get('/obtener-passwd', function(){
       include_once  "ejemplos/funciones.php";
       echo create_pass();
    });

//-------------------------------------------------------------------------------------------
//DIA DE HOY 1-10-2026
$router -> get('/movie/add', function(){
    include_once "app/Views/backend/admin.movie.new.php";
});

$router -> post('/movie', function(){
  //Que hacemos con los datos de la pelicula
    var_dump($_POST);
    manageFiles($_FILES);

});

//-------------------------------------------------------------------------------------------


//-------------------------------------------------------------------------------------------



$router = new RouteCollector();

//RUTAS DE USUARIO
$router -> get('/register',[UserController::class,'create']);
$router -> get('/user/{id}/edit',[UserController::class,'edit']);
$router -> get('/user', [UserController::class, 'index']);
$router -> get('/user/{id}', [UserController::class, 'show']);
$router -> post('/user', [UserController::class, 'store']);
$router -> put('/user/{id}', [UserController::class, 'update']);
$router -> delete('/user', [UserController::class, 'destroy']);






/*
Rutas de ejemplos
    $router->get('/admin', function(){
        return include_once "./app/Views/backend/admin.index.php";
        //return 'Estas intentando acceder a la funcion de admin';
    });

    $router->get('/', function(){
        return include_once "app/Views/fronted/code.php";
    });
*/
    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    try{
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch(HttpRouteNotFoundException $e){
        $response = "Eres muyyyy tonto, zoquete!!!.";
    }

    // Print out the value returned from the dispatched function
    echo $response;
