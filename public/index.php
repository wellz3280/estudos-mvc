<?php

require __DIR__.'/../vendor/autoload.php';

$path = $_SERVER['PATH_INFO'];
$routes = require __DIR__.'/../config/rotas.php';

if(!array_key_exists($path,$routes)){
    
    http_response_code(404);
    exit();

}
    session_start();
    $ehRotaDeLogin = stripos($path,'login');
    if(!isset($_SESSION['logado']) && $ehRotaDeLogin === false){
        header('Location:/login');
        exit();
    }

    $classeControladora = $routes[$path]; 
    $controlador = new $classeControladora();
    $controlador->processaRequisicao();

