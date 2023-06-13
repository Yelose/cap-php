<?php

class Persona
{
    protected $nombre;
    protected $apellidos;
    protected $edad;


    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEdad()
    {
        return $this->edad;
    }


    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    public function esMayorDeEdad($edad)
    {
        if ($edad >= 18) {
            return true;
        }
        return false;
    }

    public function nombreCompleto()
    {
        return $this->nombre . " " . $this->apellidos;
    }

}

?>