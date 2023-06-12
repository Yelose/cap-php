<?php
class Empleado
{
    //Atributos de una clase
    public $nombre;
    public $apellido;
    public $dni;
    public $edad;

    //Métodos de una clase
    public function trabajar()
    {
        echo "Estoy trabajando <br>";
    }

    public function descansar()
    {
        echo "Estoy descansando <br>";
    }

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;

    }



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
     * Get the value of apellido
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set the value of apellido
     *
     * @return  self
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get the value of dni
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set the value of dni
     *
     * @return  self
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get the value of edad
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set the value of edad
     *
     * @return  self
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

}
$empleado = new Empleado("Marina", "González Suárez");
$empleado2 = new Empleado("Ejemplo", "Apellidos");

var_dump($empleado);
echo "<br>";
var_dump($empleado2);
echo "<br>";

$empleado->nombre = "Jorge";
$empleado->apellido = "Rodríguez";
$empleado->dni = "87585351N";

var_dump($empleado);

$empleado->trabajar(); //Llamada al método trabajar
$empleado->descansar(); //Llamada al método descansar

?>