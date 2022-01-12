<?php
    namespace Weliton\PhpMvc\Controller;

use PDO;
use PDOException;
use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class Exclusao implements InterfaceControladorRequisicao
{
    private PDO $pdo;

    public function __construct()
    {
            
        $conn = new SqliteConn();
        $this->pdo = $conn->startService();
    }

    public function processaRequisicao(): void
    {
        try{
            $id = filter_input( INPUT_GET,'id', FILTER_VALIDATE_INT);
            if(is_null($id) || $id === false){
                header('Location:/listaNotas');
                return;
            }

            $query = new QueryBuilder($this->pdo);

            $query->from('note')
            ->where('where','idNote',$id)
            ->get('delete');

            header('Location:/listaNotas');
            
        }catch(PDOException $e){
            echo "ERROR". $e->getMessage();
        }
        
    }
}