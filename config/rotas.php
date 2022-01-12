<?php

use Weliton\PhpMvc\Controller\AtualizarNota;
use Weliton\PhpMvc\Controller\Exclusao;
use Weliton\PhpMvc\Controller\FormularioInsercao;
use Weliton\PhpMvc\Controller\ListaNotas;
use Weliton\PhpMvc\Controller\Persistencia;
use Weliton\PhpMvc\Controller\VizualizarNota;

return [
    '/novaNota' =>  FormularioInsercao::class,
    '/listaNotas' => ListaNotas::class,
    '/salvar-nota' => Persistencia::class,
    '/vizualizar-nota' => VizualizarNota::class,
    '/excluir-nota' => Exclusao::class,
    '/atualizar-nota' => AtualizarNota::class
];

