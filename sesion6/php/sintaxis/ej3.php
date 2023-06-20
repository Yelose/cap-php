<?php

function procesarCesta($importe, $categoria)
{
    if ($importe < 19) {
        if ($categoria == 'mascotas') {
            echo 'No se puede realizar el envío';
        } elseif ($categoria == 'ropa') {
            echo 'Los gastos de envío son 9 euros';
        }
    } elseif ($importe >= 19 && $importe <= 40) {
        echo 'Los gastos de envío son 9 euros';
    } elseif ($importe > 40 && $importe <= 200) {
        echo 'Los portes de envío son gratis';
    } elseif ($importe > 200) {
        echo 'Código de descuento: CODIGODESC33';
    }
    echo "<br>";
}

// Ejemplo de uso
$importe1 = 15;
$categoria1 = 'mascotas';

$importe2 = 30;
$categoria2 = 'ropa';

$importe3 = 50;
$categoria3 = 'electronica';

$importe4 = 250;
$categoria4 = 'hogar';

echo "Importe $importe1 <br>";
procesarCesta($importe1, $categoria1);
echo "<br> Importe $importe2 <br>";
procesarCesta($importe2, $categoria2);
echo "<br> Importe $importe3 <br>";
procesarCesta($importe3, $categoria3);
echo "<br> Importe $importe4 <br>";
procesarCesta($importe4, $categoria4);