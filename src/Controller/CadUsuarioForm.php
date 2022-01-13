<?php
    namespace Weliton\PhpMvc\Controller;

class CadUsuarioForm extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao(): void
    {
       echo $this->renderizaHtml('login/formCadastroUsuario.php',[
            'tituloPagina' => 'Novo Usuario'
        ]);
    }
}