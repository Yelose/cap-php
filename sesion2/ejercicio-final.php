<?php
class Producto
{
    private $id;
    private $titulo;
    private $descripcion;
    private $precioSinIVA;
    private $unidadesStock;

    public function __construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock)
    {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->descripcion = $descripcion;
        $this->precioSinIVA = $precioSinIVA;
        $this->unidadesStock = $unidadesStock;
    }

    public function calcularPrecioConIVA($iva)
    {
        return $this->precioSinIVA * (1 + $iva / 100);
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }


    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getPrecioSinIVA()
    {
        return $this->precioSinIVA;
    }

    public function setPrecioSinIVA($precioSinIVA)
    {
        $this->precioSinIVA = $precioSinIVA;

        return $this;
    }

    public function getUnidadesStock()
    {
        return $this->unidadesStock;
    }

    public function setUnidadesStock($unidadesStock)
    {
        $this->unidadesStock = $unidadesStock;

        return $this;
    }
}

class Ropa extends Producto
{
    private $talla;
    private $tallas;

    public function __construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock, $talla, $tallas)
    {
        parent::__construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock);
        $this->talla = $talla;
        $this->tallas = $tallas;
    }

    public function mostrarGuiaTallas()
    {
        echo "Guía de tallas:<br>";
        foreach ($this->tallas as $talla) {
            echo $talla . "<br>";
        }
    }


    public function getTalla()
    {
        return $this->talla;
    }

    public function setTalla($talla)
    {
        $this->talla = $talla;

        return $this;
    }

    public function getTallas()
    {
        return $this->tallas;
    }

    public function setTallas($tallas)
    {
        $this->tallas = $tallas;

        return $this;
    }
}

class Comida extends Producto
{
    private $fechaCaducidad;
    private $gramos;

    public function __construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock, $fechaCaducidad, $gramos)
    {
        parent::__construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock);
        $this->fechaCaducidad = $fechaCaducidad;
        $this->gramos = $gramos;
    }

    public function getFechaCaducidad()
    {
        return $this->fechaCaducidad;
    }

    public function setFechaCaducidad($fechaCaducidad)
    {
        $this->fechaCaducidad = $fechaCaducidad;

        return $this;
    }

    public function getGramos()
    {
        return $this->gramos;
    }

    public function setGramos($gramos)
    {
        $this->gramos = $gramos;

        return $this;
    }
}

class Artesania extends Producto
{
    private $autor;

    public function __construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock, $autor)
    {
        parent::__construct($id, $titulo, $descripcion, $precioSinIVA, $unidadesStock);
        $this->autor = $autor;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }
}

$producto = new Producto(1, "Producto genérico", "Descripción del producto", 100, 10);
$tallas = ["S", "M", "L", "XL"];
$ropa = new Ropa(2, "Camiseta", "Camiseta de algodón", 50, 5, "M", $tallas);
$comida = new Comida(3, "Chocolate", "Chocolate negro", 5, 20, "2023-12-31", 100);
$artesania = new Artesania(4, "Cuadro", "Cuadro pintado a mano", 200, 2, "Juan Pérez");

echo "Producto:<br>";
echo "ID: " . $producto->getId() . "<br>";
echo "Título: " . $producto->getTitulo() . "<br>";
echo "Descripción: " . $producto->getDescripcion() . "<br>";
echo "Precio sin IVA: " . $producto->getPrecioSinIVA() . "<br>";
echo "Unidades en stock: " . $producto->getUnidadesStock() . "<br>";
echo "Precio con IVA: " . $producto->calcularPrecioConIVA(21) . "<br>";

echo "<br>";

echo "Ropa:<br>";
echo "ID: " . $ropa->getId() . "<br>";
echo "Título: " . $ropa->getTitulo() . "<br>";
echo "Descripción: " . $ropa->getDescripcion() . "<br>";
echo "Precio sin IVA: " . $ropa->getPrecioSinIVA() . "<br>";
echo "Unidades en stock: " . $ropa->getUnidadesStock() . "<br>";
echo "Talla: " . $ropa->getTalla() . "<br>";
echo "Precio con IVA: " . $ropa->calcularPrecioConIVA(21) . "<br>";
$ropa->mostrarGuiaTallas();

echo "<br>";

echo "Comida:<br>";
echo "ID: " . $comida->getId() . "<br>";
echo "Título: " . $comida->getTitulo() . "<br>";
echo "Descripción: " . $comida->getDescripcion() . "<br>";
echo "Precio sin IVA: " . $comida->getPrecioSinIVA() . "<br>";
echo "Unidades en stock: " . $comida->getUnidadesStock() . "<br>";
echo "Fecha de caducidad: " . $comida->getFechaCaducidad() . "<br>";
echo "Gramos: " . $comida->getGramos() . "<br>";
echo "Precio con IVA: " . $comida->calcularPrecioConIVA(4) . "<br>";

echo "<br>";

echo "Artesanía:<br>";
echo "ID: " . $artesania->getId() . "<br>";
echo "Título: " . $artesania->getTitulo() . "<br>";
echo "Descripción: " . $artesania->getDescripcion() . "<br>";
echo "Precio sin IVA: " . $artesania->getPrecioSinIVA() . "<br>";
echo "Unidades en stock: " . $artesania->getUnidadesStock() . "<br>";
echo "Autor: " . $artesania->getAutor() . "<br>";
echo "Precio con IVA: " . $artesania->calcularPrecioConIVA(10) . "<br>";