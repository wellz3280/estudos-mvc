<?php

    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Entity\NewNotas;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

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
        $novaNota = new NewNotas();
        $novaNota->setTitulo($_POST['titulo']);
        $novaNota->setNota($_POST['nota']);

        echo "titulo {$novaNota->getTitulo()}"."<br>";
        echo "nota {$novaNota->getNota()}";
    }
}