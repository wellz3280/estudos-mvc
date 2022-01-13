<?php
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Helper\RenderizaHtml;

class CadUsuarioForm  implements InterfaceControladorRequisicao
{   use RenderizaHtml;
    
    public function processaRequisicao(): void
    {
       echo $this->renderizaHtml('login/formCadastroUsuario.php',[
            'tituloPagina' => 'Novo Usuario'
        ]);
    }
}