<?php

abstract class Animal
{
    public $nombre;
    public $color;
    abstract public function hablar();
    /**
     * Get the value of nombre
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    /**
     * Get the value of color
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}

class Cerdo extends Animal
{
    public $nombre = "cerdo";
    public $color = "rosa";
    public function hablar()
    {
        return "oing oing";
    }
}

class Vaca extends Animal
{
    public $nombre = "vaca";
    public $color = "marrón";
    public function hablar()
    {
        return "Muuuuu";
    }
}

class Gallina extends Animal
{
    public $nombre = "gallina";
    public $color = "amarilla";
    public function hablar()
    {
        return "Co, co, co";
    }
    public function ponerHuevos()
    {
        return "La gallina Turuleka, ha puesto un huevo, ha puesto dos, ha puesto tres.";
    }
}

function sonidosDeLosAnimalitos($animales)
{
    foreach ($animales as $animal) {
        echo "El/la " . $animal->getNombre() . " " . $animal->getColor() . " hace: " . $animal->hablar() . "<br>";
    }

}
$animales = [new Cerdo(), new Vaca(), new Gallina()];
sonidosDeLosAnimalitos($animales);
$gallina = new Gallina;

echo $gallina->ponerHuevos();