<?php

include 'coche.php';

// Instanciar un objeto de la clase Coche
$coche = new Coche("MiCoche", "MiMarca", "Rojo");

// Mostrar la información inicial del coche
echo "Información inicial del coche:<br>";
$coche->mostrarInformacion();
echo "<br>";

// Modificar los atributos del coche utilizando los setters
$coche->setNombre("NuevoCoche");
$coche->setMarca("NuevaMarca");
$coche->setColor("Azul");

// Mostrar la información actualizada del coche
echo "Información actualizada del coche:<br>";
$coche->mostrarInformacion();