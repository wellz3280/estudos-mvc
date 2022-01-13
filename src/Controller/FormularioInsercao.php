<?php
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Helper\RenderizaHtml;

class FormularioInsercao implements InterfaceControladorRequisicao
{
    use RenderizaHtml;
    
    public function processaRequisicao():void
    {
        
      echo $this->renderizaHtml('notas/formulario.php',[
            'tituloPagina' => "Adicionar Nova Nota"
        ]);
    
    }
}