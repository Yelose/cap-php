<?php

function mostrarMensajeEnvio($importe)
{
    if ($importe < 30) {
        echo '<strong>Compra más o te cobraremos los abusivos 30 euros de gastos de envío</strong>';
    } elseif ($importe < 90) {
        $falta = 90 - $importe;
        echo '¡¡¡Con solo ' . number_format($falta, 2) . '€ más podrás tener gastos de envío gratis!!!';
    } else {
        echo '<strong>Gastos de envío incluidos</strong>';
    }
    echo "<br>";
}

// Ejemplo de uso con diferentes importes
$importe1 = 25.50;
$importe2 = 50.75;
$importe3 = 95.20;

echo "Importe: $importe1 <br>";
mostrarMensajeEnvio($importe1);
echo "<br> Importe: $importe2 <br>";
mostrarMensajeEnvio($importe2);
echo "<br> Importe: $importe3 <br>";
mostrarMensajeEnvio($importe3);