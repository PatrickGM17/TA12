<?php

namespace App\Controllers;

use App\Models\{Estudiante,Curso};

class Matricula
{
    private $estudiante;

    private $curso;

    private $arreglo;


    public function __construct()
        
    {
        $this->arreglo=[];
    }

    public function setEstudiante(Estudiante $estudiante)
{
     $this->estudiante = $estudiante;
}

    public function getEstudiante()
{
    return $this->estudiante;
}

public function agregarCurso(Curso $curso)
{
    $this->arreglo[]=$curso;
}
public function listarCurso()
{
    return $this->arreglo;
}
}