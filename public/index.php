<?php

require __DIR__.'/../vendor/autoload.php';

use Weliton\PhpMvc\Controller\FormularioInsercao;
use Weliton\PhpMvc\Controller\ListaNotas;
use Weliton\PhpMvc\Controller\Persistencia;

$path = $_SERVER['PATH_INFO'];
$routes = require __DIR__.'/../config/rotas.php';

if(!array_key_exists($path,$routes)){
    
    http_response_code(404);
    exit();

}else{
    $classeControladora = $routes[$path]; 
    $controlador = new $classeControladora();
    $controlador->processaRequisicao();
}
