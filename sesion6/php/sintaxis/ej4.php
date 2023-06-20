<?php

function encontrarNumeroMasGrande($num1, $num2, $num3, $num4)
{
    return max($num1, $num2, $num3, $num4);
}

// Ejemplo de uso
$numero1 = 10;
$numero2 = 5;
$numero3 = 8;
$numero4 = 12;

$masGrande = encontrarNumeroMasGrande($numero1, $numero2, $numero3, $numero4);
echo 'El número más grande es: ' . $masGrande;