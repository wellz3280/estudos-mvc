<?php

    namespace Weliton\PhpMvc\Infra\Persistance;

use PDO;
use PDOException;

class SqliteConn implements InterfaceConection
{
    public function startService(): \PDO
    {
        try{
            
            $connSqLite = new PDO ('sqlite:'.__DIR__.'/../../../notas.sqlite');

            return $connSqLite;
        }catch(PDOException $e){
            echo "Error". $e->getMessage();
        }
    }
}