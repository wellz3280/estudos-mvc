<?php

    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class Persistencia implements InterfaceControladorRequisicao
{
    private \PDO $pdo;

    public function __construct()
    {
         $conn = $this->pdo = new SqliteConn();
         $conn->startService();
        
    }

    public function processaRequisicao(): void
    {
        
    }
}