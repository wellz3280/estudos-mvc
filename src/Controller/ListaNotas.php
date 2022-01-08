<?php
    namespace Weliton\PhpMvc\Controller;

class ListaNotas implements InterfaceControladorRequisicao
{
    private array $repositorioNotas;

    public function __construct()
    {   
        $this->repositorioNotas = [
            'Token git',
            'Conta Santander',
            'Nu Conta'
          
        ];
        
        
    }
    
    public function processaRequisicao():void
    {
        $nota = $this->repositorioNotas;
        $titulo = "Lista Notas";
        require __DIR__. '/../../view/notas/lista-notas.php';
    }
}