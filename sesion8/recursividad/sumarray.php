<?php
$resultadoSumaArray = "Resultado aquí";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["array"])) {
        $array = explode(",", $_POST["array"]);

        // Llamada a la función recursiva para sumar los elementos del array
        $sum = sumArray($array);

        $resultadoSumaArray = "La suma de los elementos del array es: " . $sum;
    }
}

function sumArray($array)
{
    if (count($array) === 0) {
        return 0;
    } else {
        $current = array_shift($array);
        return $current + sumArray($array);
    }
}