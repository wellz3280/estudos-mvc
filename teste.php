<?php

use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

require 'vendor/autoload.php';

$conn = new SqliteConn();
$conn->startService();