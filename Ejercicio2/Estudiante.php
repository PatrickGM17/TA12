<?php

namespace App\Models;

class Estudiante
{
    private $nombre;

    private $apellidos;

    private $dni;

    private $codigoEstudiante;

    public function __construct($nombre, $dni, $codigoEstudiante)
    {
        $this->nombre = $nombre;

        $this->apellidos = $apellidos;

        $this->dni = $dni;

        $this->codigo = $codigoEstudiante;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getDni()
    {
        return $this->dni;
    }

    public function getCodigo()
    {
        return $this->codigoEstudiante;
    }

}