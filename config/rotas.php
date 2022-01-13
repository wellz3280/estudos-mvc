<?php

use Weliton\PhpMvc\Controller\AtualizarNota;
use Weliton\PhpMvc\Controller\CadUsuarioForm;
use Weliton\PhpMvc\Controller\Exclusao;
use Weliton\PhpMvc\Controller\FormularioInsercao;
use Weliton\PhpMvc\Controller\FormularioLogin;
use Weliton\PhpMvc\Controller\ListaNotas;
use Weliton\PhpMvc\Controller\Logout;
use Weliton\PhpMvc\Controller\Persistencia;
use Weliton\PhpMvc\Controller\PersistenciaUsuario;
use Weliton\PhpMvc\Controller\RealizarLogin;
use Weliton\PhpMvc\Controller\VizualizarNota;

return [
    '/novaNota' =>  FormularioInsercao::class,
    '/listaNotas' => ListaNotas::class,
    '/salvar-nota' => Persistencia::class,
    '/vizualizar-nota' => VizualizarNota::class,
    '/excluir-nota' => Exclusao::class,
    '/atualizar-nota' => AtualizarNota::class,
    '/login' => FormularioLogin::class,
    '/realiza-login' => RealizarLogin::class,
    '/cadastrar-usuario-login' => CadUsuarioForm::class,
    '/salvar-usuario-login' => PersistenciaUsuario::class,
    '/logout' => Logout::class
];

