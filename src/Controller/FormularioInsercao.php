<?php
    namespace Weliton\PhpMvc\Controller;

class FormularioInsercao extends ControllerComHtml implements InterfaceControladorRequisicao
{
    public function processaRequisicao():void
    {
        
      echo $this->renderizaHtml('notas/formulario.php',[
            'tituloPagina' => "Adicionar Nova Nota"
        ]);
    
    }
}