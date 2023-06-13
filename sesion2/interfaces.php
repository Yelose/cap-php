<?php

// Interface Persona con el método saludar()
interface Person
{
    public function saludar();
}

// Clases Ingles, Aleman y Frances que implementan la interfaz Persona
// Cada clase proporciona una implementación concreta del método saludar()
class Ingles implements Person
{
    public function saludar()
    {
        return 'Hello!';
    }
}

class Aleman implements Person
{
    public function saludar()
    {
        return 'Hallo!';
    }
}

class Frances implements Person
{
    public function saludar()
    {
        return 'Bonjour!';
    }
}

// Función saludando() que acepta un array de objetos que implementan la interfaz Persona
function saludando($personas)
{
    foreach ($personas as $persona) {
        echo $persona->saludar();
    }
}

// Llamada a la función
$personas = [new Ingles(), new Aleman(), new Frances()];
saludando($personas);