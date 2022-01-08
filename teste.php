<?php

use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

require 'vendor/autoload.php';

$conn = new SqliteConn();
$pdo = $conn->startService();

// $sql = 'CREATE TABLE "note" (
//     "idNote"  INTEGER NOT NULL,
//     "titulo"  TEXT(128) NOT NULL,
//     "nota"  TEXT(128) NOT NULL,
   
//     PRIMARY KEY ("idNote")
//     );';


// $pdo->exec($sql);