<?php
$resultadoRevertirTexto = "Resultado aquí";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["text"])) {
        $text = $_POST["text"];

        // Llamada a la función recursiva para revertir la cadena de texto
        $reversedText = revertirTexto($text);

        $resultadoRevertirTexto = "El texto revertido es: " . $reversedText;
    }
}

function revertirTexto($text)
{
    if (strlen($text) === 0) {
        return "";
    } else {
        $lastChar = substr($text, -1);
        $remainingText = substr($text, 0, -1);
        return $lastChar . revertirTexto($remainingText);
    }
}