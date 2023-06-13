<?php

$paises = file_get_contents("paises.json");
$data = json_decode($paises, true);

$paisLocalidad8 = $data["localidad_8"]["País"];

echo "País de la localidad_8: " . $paisLocalidad8 . "<br>";


$localidadNueva = [
    "Continente" => "América del Norte",
    "País" => "Canadá",
    "Capital" => "Ottawa"
];

//añade Habitantes a todos los objetos
foreach ($data as &$localidad) {
    $localidad['Habitantes'] = 0;
}
function mostrarPaises($data)
{
    unset($localidad);
    foreach ($data as &$localidad) {
        echo 'Continente: ' . $localidad['Continente'] . "<br>" . 'País: ' . $localidad['País'] . "<br>" . "Capital: " . $localidad["Capital"] . "<br> Habitantes: " . $localidad["Habitantes"] . '<br><br>';
    }
}

echo "<br><br> Países: <br> <br>";

mostrarPaises($data);

$data['localidad_4']['Habitantes'] = 210147125;

echo "------------------------------ <br>";
mostrarPaises($data);