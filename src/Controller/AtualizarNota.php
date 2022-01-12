<?php

    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Entity\NewNotas;
use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class AtualizarNota implements InterfaceControladorRequisicao
{   
    private \PDO $pdo;

    public function __construct()
    {
        $conn = new SqliteConn();
        $this->pdo = $conn->startService();    
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,'id',FILTER_VALIDATE_INT);
        
        if(is_null($id) || $id === false ){
            header('Location:/listaNotas');
            return;
        }

        $query = new QueryBuilder($this->pdo);

        $nota = $query
        ->columns(['*'])
        // ->columns(['email','idCliente'])
        ->from("note")
        ->where('where','idNote',$id)
        ->get('select');
       
        foreach($nota as $notas){
            $data = new NewNotas();
            $data->setId($notas['idNote']);
            $data->setTitulo($notas['titulo']);
            $data->setNota($notas['nota']);
        }

         $titulo = "Atualizar {$data->getTitulo()}";

         
        require __DIR__.'/../../view/notas/formulario.php';
    }

    public function update():self
    {
        return $this;
    }
}