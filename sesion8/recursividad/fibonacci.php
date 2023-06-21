<?php
$resultadoFibonacci = "Resultado aquí";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["n"])) {
        $n = $_POST["n"];

        // Llamada a la función recursiva para calcular el número de Fibonacci
        $fibonacci = fibonacci($n);

        $resultadoFibonacci = "El número de Fibonacci en la posición " . $n . " es: " . $fibonacci;
    }
}

function fibonacci($n)
{
    if ($n === 0) {
        return 0;
    } elseif ($n === 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}