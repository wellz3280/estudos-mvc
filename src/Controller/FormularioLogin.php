<?php
    namespace Weliton\PhpMvc\Controller;

class FormularioLogin extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
       echo $this->renderizaHtml('login/formulario.php',['tituloPagina' => 'Login']);
    }
}