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
// DIA DE HOY 1-10-2026
$router -> get('/movie/add', function(){
    include_once "app/Views/backend/admin.movie.new.php";
});

$router -> post('/movie', function(){
  //Que hacemos con los datos de la pelicula
    var_dump($_POST);
    var_dump($_FILES);

});
//-------------------------------------------------------------------------------------------

// 1. Ruta para MOSTRAR el formulario
$router->get('/admin/nueva-pelicula', function(){
    return include_once "app/Views/backend/admin.movie.new.php";
});

// 2. Ruta para PROCESAR el formulario cuando el usuario hace clic en "Guardar"
$router->post('/admin/nueva-pelicula', function(){

    // A) RECOGIDA Y SANEAMIENTO DE DATOS (Aplicando tus apuntes)
    // striptags: elimina etiquetas HTML inyectadas
    // htmlspecialchars: convierte caracteres especiales por seguridad
    $titulo      = htmlspecialchars(striptags($_POST['titulo']));
    $descripcion = htmlspecialchars(striptags($_POST['descripcion']));
    $edad        = htmlspecialchars($_POST['edad']);
    $categoria   = htmlspecialchars($_POST['categoria']);

    // B) TRATAMIENTO DE LA IMAGEN ($_FILES)
    // [No está en tu material, pero es la función nativa obligatoria de PHP]
    $imagen = $_FILES['caratula'];

    // Obtenemos el nombre original y dónde la ha guardado PHP temporalmente
    $nombre_imagen = $imagen['name'];
    $ruta_temporal = $imagen['tmp_name'];

    // Definimos dónde queremos guardarla definitivamente
    // IMPORTANTE: Crea una carpeta 'uploads' dentro de 'src' para que esto funcione
    $ruta_destino = "uploads/" . basename($nombre_imagen);

    // move_uploaded_file es la función que mueve la imagen de la memoria temporal a nuestra carpeta
    if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
        return "Éxito: La película '$titulo' de categoría '$categoria' se ha guardado. Imagen subida correctamente.";
    } else {
        return "Error: No se ha podido guardar la carátula.";
    }
});

//-------------------------------------------------------------------------------------------


//Rutas del backend
    $router->get('/admin', function(){
        return 'Estas intentando acceder a la funcion de admin';
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