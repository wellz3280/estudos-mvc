<?php
    namespace Weliton\PhpMvc\Entity;

class NewNotas
{
    private int $id;
    private string $titulo;
    private string $nota;

    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id):void
    {
        $this->id = $id;
    }

    public function getTitulo():string
    {
        return $this->titulo;
    }
    
    public function setTitulo(string $titulo):void
    {
        $this->titulo = $titulo;
    }

    public function getNota():string
    {
        return $this->nota;
    }

    public function setNota(string $nota):void
    {
        $this->nota = $nota;
    }
}