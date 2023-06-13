<?php
class Cuenta
{
    private $titular;
    private $cantidad;


    public function __construct($titular, $cantidad)
    {
        $this->titular = $titular;
        $this->cantidad = $cantidad;
    }

    /**
     * Get the value of titular
     */
    public function getTitular()
    {
        return $this->titular;
    }

    /**
     * Set the value of titular
     *
     * @return  self
     */
    public function setTitular($titular)
    {
        $this->titular = $titular;

        return $this;
    }

    /**
     * Get the value of cantidad
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set the value of cantidad
     *
     * @return  self
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    public function ingresar($ingreso)
    {
        if ($ingreso <= 0) {
            return;
        }
        $this->setCantidad($this->getCantidad() + $ingreso);
    }

    public function retirar($extracto)
    {
        if ($extracto <= 0) {
            $this->setCantidad(0);
        }
        $this->setCantidad($this->getCantidad() - $extracto);
    }
}
$cuenta1 = new Cuenta("Marina", 25);
$cuenta1->ingresar(10);

echo $cuenta1->getCantidad() . "<br>";

$cuenta1->retirar(5);
echo $cuenta1->getCantidad();

?>