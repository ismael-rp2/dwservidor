<?php

    //$titulo = $_SERVER['REQUEST_RI'];

    include_once "./vendor/autoload.php";

use Phroute\Phroute\Exception\HttpRouteNotFoundException;
use Phroute\Phroute\RouteCollector;

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


//Rutas del backend
    $router->get('/admin', function(){
        return include_once "./app/Views/backend/admin.index.php";
        //return 'Estas intentando acceder a la funcion de admin';
    });

    $router->get('/', function(){
        return include_once "app/Views/fronted/code.php";
    });

    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

    try{
        $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }catch(HttpRouteNotFoundException $e){
        $response = "Eres muyyyy tonto, zoquete!!!.";
    }

    // Print out the value returned from the dispatched function
    echo $response;