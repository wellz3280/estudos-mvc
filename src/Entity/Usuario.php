<?php
    namespace Weliton\PhpMvc\Entity;

class Usuario
{
    private int $id;
    private string $email;
    private string $senha;

    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id):void
    {
        $this->id = $id;
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function setEmail(string $email):void
    {
        $this->email = $email;
    }

    public function getSenha():string
    {
        return $this->senha;
    }


    public function verificaSenha(string $senha):string
    {
        
       return  md5($senha);
    }
}