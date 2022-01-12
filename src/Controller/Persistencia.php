<?php

    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Entity\NewNotas;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;
use \PDOException;
use Symfony\Component\Console\Input\Input;

class Persistencia implements InterfaceControladorRequisicao
{
    private \PDO $pdo;

    public function __construct()
    {
         $conn = new SqliteConn();
         $this->pdo = $conn->startService();
        

    }

    public function processaRequisicao(): void
    {
        try{
            
            $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
            $nota = filter_input(INPUT_POST, 'nota', FILTER_SANITIZE_STRING);
            $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
            
            
            $novaNota = new NewNotas();
            $novaNota->setTitulo($titulo);
            $novaNota->setNota($nota);
            
            $query = new QueryBuilder($this->pdo);

            if(!is_null($id) && $id !== false){
                $novaNota->setId($id);
                
                $query->parameters(['titulo' => $novaNota->getTitulo()
                ,'nota' => $novaNota->getNota(), 'idNote'=> $novaNota->getId()])
                ->from('note')
                ->where('where','idNote','?')
                ->get('update');


            }else{

                $query->parameters(['titulo' => $novaNota->getTitulo(),
                'nota' => $novaNota->getNota()])
                ->from('note')
                ->get('insert');
            }

            header('Location: /listaNotas',302);

        }catch(PDOException $e){
            echo "Error". $e->getMessage();
        }
    }
}