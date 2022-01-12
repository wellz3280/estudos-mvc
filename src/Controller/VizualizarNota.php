<?php

    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class VizualizarNota extends ControllerComHtml implements InterfaceControladorRequisicao
{
    private \PDO $pdo;

    public function __construct()
    {
        $conn = new SqliteConn();
        $this->pdo = $conn->startService();
    }

    public function processaRequisicao(): void
    {
        $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_STRING);
        
        $query = new QueryBuilder($this->pdo);
        
        $result = $query
        ->columns(['*'])
        // ->columns(['titulo'])
        ->from("note")
        ->where('where','idNote',$id)
        ->get('select');
        
        $nota = $result;
        
        echo $this->renderizaHtml('notas/viewNota.php',[
            'nota' => $nota,
            'tituloPagina' => 'Vizualizar Notas'
        ]);
    

    }
}