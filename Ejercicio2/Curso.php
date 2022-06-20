<?php

namespace App\Models;

class Curso
{
    private $materia;

    private $creditos;

    public function __construct($materia, $creditos)
    {
        $this->maetira = $materia;

        $this->creditos = $creditos;
    }

    public function getMateria()
    {
        return $this->nombre;
    }

    public function getCreditos()
    {
        return $this->creditos;
    }
}