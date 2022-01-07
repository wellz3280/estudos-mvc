<?php

    namespace Weliton\PhpMvc\Infra\Persistance;

use PDO;

interface InterfaceConection
{
    public function startService():\PDO;
}