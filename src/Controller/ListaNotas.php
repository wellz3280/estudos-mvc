<?php
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class ListaNotas implements InterfaceControladorRequisicao
{
    private \PDO $pdo;

    public function __construct()
    {   
        $conn = new SqliteConn();
        $this->pdo = $conn->startService();
        
    }
    
    public function processaRequisicao():void
    {
        $query = new QueryBuilder($this->pdo);
        
        $result = $query
        //->columns(['*'])
        ->columns(['titulo'])
        ->from("note")
        ->where('desc','idNote')
        ->get('select');

        $nota = $result;
        $titulo = "Lista Notas";
        require __DIR__. '/../../view/notas/lista-notas.php';
    }
}