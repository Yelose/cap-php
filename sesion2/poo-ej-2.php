<?php
class SimpleCar
{
    private $marca;
    private $modelo;
    private $numSerie;

    public function __construct($marca, $modelo, $numSerie)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->numSerie = $numSerie;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getNumSerie()
    {
        return $this->numSerie;
    }

    public function setNumSerie($numSerie)
    {
        $this->numSerie = $numSerie;
    }
}

class Coche extends SimpleCar
{
    protected $anoLanz;
    protected $color;
    private $claxon;

    public function __construct($marca, $modelo, $numSerie, $anoLanz, $color, $claxon)
    {
        parent::__construct($marca, $modelo, $numSerie);
        $this->anoLanz = $anoLanz;
        $this->color = $color;
        $this->claxon = $claxon;
    }

    public function sonarClaxon()
    {
        echo "Sonido del claxon: " . $this->claxon . "<br>";
    }

    public function getAnoLanzamiento()
    {
        return $this->anoLanz;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
}

class CochePolicia extends Coche
{
    private $sirena;

    public function __construct($marca, $modelo, $numSerie, $anoLanz, $claxon, $sirena)
    {
        parent::__construct($marca, $modelo, $numSerie, $anoLanz, "blanco", $claxon);
        $this->sirena = $sirena;
    }

    public function sirena()
    {
        echo "Sonido de la sirena: " . $this->sirena . "<br>";
    }
}

// Crear un Renault Koleos
$renaultKoleos = new Coche("Renault", "Koleos", "123456", 2015, "blanco", "Beep!");

// Mostrar detalles del Renault Koleos
echo "Marca: " . $renaultKoleos->getMarca() . "<br>";
echo "Modelo: " . $renaultKoleos->getModelo() . "<br>";
echo "Color: " . $renaultKoleos->getColor() . "<br>";
$renaultKoleos->sonarClaxon() . "<br>";
echo "Número de serie: " . $renaultKoleos->getNumSerie() . "<br>";
echo "Año de lanzamiento: " . $renaultKoleos->getAnoLanzamiento() . "<br>";

echo "<br>";
// Mostrar detalles cambiando su color
$renaultKoleos->setColor("negro") . "<br>";
echo "Marca: " . $renaultKoleos->getMarca() . "<br>";
echo "Modelo: " . $renaultKoleos->getModelo() . "<br>";
echo "Color: " . $renaultKoleos->getColor() . "<br>";
echo "Número de serie: " . $renaultKoleos->getNumSerie() . "<br>";
echo "Año de lanzamiento: " . $renaultKoleos->getAnoLanzamiento() . "<br>";