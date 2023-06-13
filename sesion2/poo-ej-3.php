<?php

class Multimedia
{
    protected $titulo;
    protected $autor;
    protected $formato;
    protected $duracion;

    public function __construct($titulo, $autor, $formato, $duracion)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->formato = $formato;
        $this->duracion = $duracion;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function setAutor($autor)
    {
        $this->autor = $autor;
    }

    public function getFormato()
    {
        return $this->formato;
    }

    public function setFormato($formato)
    {
        $this->formato = $formato;
    }

    public function getDuracion()
    {
        return $this->duracion;
    }

    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    public function imprimirInformacion()
    {
        echo "Título: " . $this->titulo . "\n";
        echo "Autor: " . $this->autor . "\n";
        echo "Formato: " . $this->formato . "\n";
        echo "Duración: " . $this->duracion . " minutos\n";
    }

    public function esIgual($multimedia)
    {
        return ($this->titulo === $multimedia->getTitulo() && $this->autor === $multimedia->getAutor());
    }
}

class Pelicula extends Multimedia
{
    protected $actorPrincipal;
    protected $actrizPrincipal;

    public function __construct($titulo, $autor, $formato, $duracion, $actorPrincipal, $actrizPrincipal)
    {
        parent::__construct($titulo, $autor, $formato, $duracion);
        $this->actorPrincipal = $actorPrincipal;
        $this->actrizPrincipal = $actrizPrincipal;

        if ($actorPrincipal === null && $actrizPrincipal === null) {
            throw new Exception("Debe proporcionarse al menos un actor o actriz principal.");
        }
    }

    public function getActorPrincipal()
    {
        return $this->actorPrincipal;
    }

    public function setActorPrincipal($actorPrincipal)
    {
        $this->actorPrincipal = $actorPrincipal;
    }

    public function getActrizPrincipal()
    {
        return $this->actrizPrincipal;
    }

    public function setActrizPrincipal($actrizPrincipal)
    {
        $this->actrizPrincipal = $actrizPrincipal;
    }

    public function imprimirInformacion()
    {
        parent::imprimirInformacion();
        echo "Actor principal: " . $this->actorPrincipal . "\n";
        echo "Actriz principal: " . $this->actrizPrincipal . "\n";
    }
}

class ListaMultimedia
{
    private $objetos;
    private $contador;
    private $tamano;

    public function __construct($tamano)
    {
        $this->objetos = array();
        $this->contador = 0;
        $this->tamano = $tamano;
    }

    public function dameTamano()
    {
        return $this->contador;
    }

    public function addObjeto($objeto)
    {
        if ($this->contador < $this->tamano) {
            $this->objetos[] = $objeto;
            $this->contador++;
            if ($this->contador === $this->tamano) {
                return true;
            }
        }
        return false;
    }

    public function getObjeto($posicion)
    {
        if ($posicion >= 0 && $posicion < $this->contador) {
            return $this->objetos[$posicion];
        }
        return null;
    }

    public function imprimirLista()
    {
        foreach ($this->objetos as $objeto) {
            $objeto->imprimirInformacion();
            echo "\n";
        }
    }
}

// Crear un objeto de tipo ListaMultimedia de tamano 10
$listaMultimedia = new ListaMultimedia(10);

// Crear tres películas y anadirlas a la lista
$pelicula1 = new Pelicula("Pelicula 1", "Autor 1", "Formato 1", 120, "Actor 1", "Actriz 1");
$pelicula2 = new Pelicula("Pelicula 2", "Autor 2", "Formato 2", 90, "Actor 2", "Actriz 2");
$pelicula3 = new Pelicula("Pelicula 3", "Autor 3", "Formato 3", 105, "Actor 3", "Actriz 3");

$listaMultimedia->addObjeto($pelicula1);
$listaMultimedia->addObjeto($pelicula2);
$listaMultimedia->addObjeto($pelicula3);

// Imprimir la lista por pantalla
$listaMultimedia->imprimirLista();