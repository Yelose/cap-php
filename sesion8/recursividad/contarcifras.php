<?php
$resultadoContarCifras = "Resultado aquí";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["number"])) {
        $number = $_POST["number"];

        // Llamada a la función recursiva para contar los dígitos
        $count = contarDigitos($number);

        $resultadoContarCifras = "El número de dígitos en " . $number . " es: " . $count;
    }
}

function contarDigitos($number)
{
    if ($number < 10) {
        return 1;
    } else {
        return 1 + contarDigitos(floor($number / 10));
    }
}