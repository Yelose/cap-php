<?php

$dia_ingles = date('D');

if ($dia_ingles == 'Mon') {
    echo 'Lunes';
} elseif ($dia_ingles == 'Tue') {
    echo 'Martes';
} elseif ($dia_ingles == 'Wed') {
    echo 'Miércoles';
} elseif ($dia_ingles == 'Thu') {
    echo 'Jueves';
} elseif ($dia_ingles == 'Fri') {
    echo 'Viernes';
} elseif ($dia_ingles == 'Sat') {
    echo 'Sábado';
} elseif ($dia_ingles == 'Sun') {
    echo 'Domingo';
}

echo "<br>";

$dia_ingles = date('D');

switch ($dia_ingles) {
    case 'Mon':
        echo 'Lunes';
        break;
    case 'Tue':
        echo 'Martes';
        break;
    case 'Wed':
        echo 'Miércoles';
        break;
    case 'Thu':
        echo 'Jueves';
        break;
    case 'Fri':
        echo 'Viernes';
        break;
    case 'Sat':
        echo 'Sábado';
        break;
    case 'Sun':
        echo 'Domingo';
        break;
}