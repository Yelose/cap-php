<?php

class Password
{
    private $longitud;
    private $contrasena;

    public function __construct($longitud = 8)
    {
        $this->longitud = $longitud;
        $this->generarPassword();
    }

    public function esFuerte()
    {
        $mayusculas = preg_match_all('/[A-Z]/', $this->contrasena);
        $minusculas = preg_match_all('/[a-z]/', $this->contrasena);
        $numeros = preg_match_all('/[0-9]/', $this->contrasena);

        return ($mayusculas >= 2 && $minusculas >= 1 && $numeros >= 5);
    }

    public function generarPassword()
    {
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $this->contrasena = '';

        for ($i = 0; $i < $this->longitud; $i++) {
            $randomIndex = mt_rand(0, strlen($caracteres) - 1);
            $this->contrasena .= $caracteres[$randomIndex];
        }
    }

    public function getContrasena()
    {
        return $this->contrasena;
    }

    public function getLongitud()
    {
        return $this->longitud;
    }

    public function setLongitud($longitud)
    {
        $this->longitud = $longitud;
        $this->generarPassword();
    }
}

// Array de ejemplo de contrasenas
$arrayPasswords = ["cosa", "ah!1", "pvq12?AS215JQ8"];

$tamañoArray = count($arrayPasswords);

// Crear un array de objetos Password utilizando las contrasenas del array de ejemplo
for ($i = 0; $i < $tamañoArray; $i++) {
    $longitud = strlen($arrayPasswords[$i]);
    $arrayPasswords[$i] = new Password($longitud);
}

// Crear un array de booleanos para almacenar si cada password es fuerte o no
$arrayPasswordsFuertes = [];

// Comprobar si cada password es fuerte y agregar el resultado al array $arrayPasswordsFuertes
foreach ($arrayPasswords as $password) {
    $arrayPasswordsFuertes[] = $password->esFuerte();
}

// Imprimir el resultado
echo "Resultados:\n";
for ($i = 0; $i < $tamañoArray; $i++) {
    echo "Contraseña " . ($i + 1) . ": " . $arrayPasswords[$i]->getContrasena() . "\n";
    echo "Es fuerte: " . ($arrayPasswordsFuertes[$i] ? 'Sí' : 'No') . "\n";
    echo "\n";
}