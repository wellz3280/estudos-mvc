<?php

use Weliton\PhpMvc\Controller\FormularioInsercao;
use Weliton\PhpMvc\Controller\ListaNotas;
use Weliton\PhpMvc\Controller\Persistencia;

$rotas = [
    '/novaNota' =>  FormularioInsercao::class,
    '/listaNotas' => ListaNotas::class,
    '/salvar-nota' => Persistencia::class
];

return $rotas;