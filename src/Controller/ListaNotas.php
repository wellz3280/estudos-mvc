<?php
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Entity\Usuario;
use Weliton\PhpMvc\Helper\RenderizaHtml;
use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class ListaNotas implements InterfaceControladorRequisicao
{
    use RenderizaHtml;
    
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
        ->columns(['*'])
        // ->columns(['titulo'])
        ->from("note")
        ->where('desc','idNote','10')
        ->get('select');


        $nota = $result;
        echo $this->renderizaHtml('notas/lista-notas.php',[
            'nota' => $nota,
            'tituloPagina' => 'Lista Notas'
        ]);
       
    }
}