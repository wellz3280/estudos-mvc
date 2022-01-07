<?php

    namespace Weliton\PhpMvc\Infra\Persistance;

use \PDO;
use \PDOException;

class MysqlConn implements InterfaceConection
{
    private string $host = 'localhost';
    private string $dbname = '';
    private string $user = 'weliton';
    private string $pass = 'well1006';

    public function startService():\PDO
    {
        try{
            return $conn = new PDO("mysql:host={$this->host};dbname={$this->dbname}",
            "{$this->user}","{$this->pass}");
        
        }catch(PDOException $e){
            echo "Error". $e->getMessage();
        }        
    }
} 