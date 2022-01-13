<?php
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Helper\RenderizaHtml;

class FormularioLogin  implements InterfaceControladorRequisicao
{
    use RenderizaHtml;
    
    public function processaRequisicao(): void
    {
       echo $this->renderizaHtml('login/formulario.php',['tituloPagina' => 'Login']);
    }
}