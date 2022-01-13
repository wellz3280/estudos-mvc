<?php
    
    namespace Weliton\PhpMvc\Helper;

trait RenderizaHtml
{
    public function renderizaHtml(string $caminhoTemplate, array $dados):string
    {
       extract($dados);
       ob_start();
        require __DIR__. '/../../view/'.$caminhoTemplate;
        $html = ob_get_clean();
        
        return $html;
    }
}