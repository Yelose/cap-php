<?php
class Coche
{
    protected $nombre;
    protected $marca;
    protected $color;

    public function __construct($nombre, $marca, $color)
    {
        $this->nombre = $nombre;
        $this->marca = $marca;
        $this->color = $color;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}