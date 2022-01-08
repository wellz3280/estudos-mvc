<?php

require __DIR__.'/../vendor/autoload.php';

use Weliton\PhpMvc\Controller\FormularioInsercao;
use Weliton\PhpMvc\Controller\ListaNotas;
use Weliton\PhpMvc\Controller\Persistencia;

switch ($_SERVER['PATH_INFO']) {
        case '/novaNota':
            $controlador = new FormularioInsercao();
            $controlador->processaRequisicao();
        break;
        
        case '/listaNotas':
            $controlador = new ListaNotas();
            $controlador->processaRequisicao();
        break;
        
        case '/salvar-nota':
            $controlador =  new Persistencia();
            $controlador->processaRequisicao();
        break;
        
        default:
            echo "Error 404";
        break;
    }