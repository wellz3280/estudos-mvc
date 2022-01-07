<?php
    namespace Weliton\PhpMvc\Controller;

class ListaNotas implements interfaceControladorRequisicao
{
    private array $repositorioNotas;

    public function __construct()
    {   
        $this->repositorioNotas = [
            'Token git',
            'jdgghsdgfyeyuwetrywerqwhfjhsaj',
            'Nu Conta',
            'valor total cartão de crédito'
        ];
        
        
    }
    
    public function processaRequisicao():void
    {
        $nota = $this->repositorioNotas;
        $titulo = "Lista Notas";
        require __DIR__. '/../../view/notas/lista-notas.php';
    }
}