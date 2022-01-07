<?php
    namespace Weliton\PhpMvc\Controller;

class FormularioInsercao implements interfaceControladorRequisicao
{
    public function processaRequisicao():void
    {
        $titulo = "Adicionar Nova nota";
      require __DIR__.'/../../view/notas/formulario.php';
    }
}