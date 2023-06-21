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

    // Getter para obtener el nombre del coche
    public function getNombre()
    {
        return $this->nombre;
    }

    // Setter para establecer el nombre del coche
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    // Getter para obtener la marca del coche
    public function getMarca()
    {
        return $this->marca;
    }

    // Setter para establecer la marca del coche
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    // Getter para obtener el color del coche
    public function getColor()
    {
        return $this->color;
    }

    // Setter para establecer el color del coche
    public function setColor($color)
    {
        $this->color = $color;
    }

    // Método adicional para mostrar información del coche
    public function mostrarInformacion()
    {
        echo "Nombre: " . $this->nombre . "<br>";
        echo "Marca: " . $this->marca . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}