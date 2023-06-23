<?php

// Esta función es sólamente para separar los ejercicios de manera visual
function mostrarEjercicio($ejercicio)
{
    echo "<br><br> --------  Ejercicio " . $ejercicio . " --------<br>";
}

// Ejercicio 1
// Crea una variable nombre y asígnale tu nombre (Marina).
// Imprime el contenido de la variable.
$nombre = "Marina";
mostrarEjercicio(1);
echo $nombre;

// Ejercicio 2
// Crea dos variables num1 y num2 y asígnales dos números.
// Realiza la suma, resta, multiplicación y división de estas dos variables e imprime los resultados.
$num1 = 19;
$num2 = 85;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division = $num1 / $num2;

mostrarEjercicio(2);
echo "Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicación: " . $multiplicacion . "<br>";
echo "División: " . $division;

// Ejercicio 3
// Crea una variable numérica precio y asígnale un valor decimal que represente el precio de un producto.
$precio = 1299.99;
mostrarEjercicio(3);
echo $precio . "€";

// Ejercicio 4
// Crea una variable de cadena de texto $producto y asígnale el nombre de un producto.
// Imprime un mensaje que muestre el nombre del producto y su precio utilizando concatenación de cadenas.
$producto = "Mac Book Air";
mostrarEjercicio(4);
echo $producto . " - " . $precio . "€";

// Ejercicio 5
// Crea una variable $numero y asígnale un número entero.
// Utilizando una estructura if, verifica si el número es par o impar e imprime un mensaje correspondiente.
$numero = 7;
function parOimpar($num)
{
    if ($num % 2 == 0) {
        echo " El número " . $num . " es par";
    } else {
        echo " El número " . $num . " es impar";
    }
}
mostrarEjercicio(5);
parOimpar($numero);

// Ejercicio 6
// Crea una variable $calificacion y asígnale un número del 1 al 10.
// Utilizando una estructura switch, imprime un mensaje que indique la calificación correspondiente.
$calificacion = 8;
function imprimirCalificacion($nota)
{
    switch ($nota) {
        case 1:
        case 2:
        case 3:
            echo " Calificación: Insuficiente";
            break;
        case 4:
        case 5:
            echo " Calificación: Suficiente";
            break;
        case 6:
            echo " Calificación: Bien";
            break;
        case 7:
        case 8:
            echo " Calificación: Notable";
            break;
        case 9:
        case 10:
            echo " Calificación: Sobresaliente";
            break;
        default:
            echo " Calificación inválida";
            break;
    }
}
mostrarEjercicio(6);
imprimirCalificacion($calificacion);

// Ejercicio 7
// Utilizando un bucle for, imprime los números del 1 al 10 en orden ascendente.
mostrarEjercicio(7);

for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
}


// Ejercicio 8
// Crea una función llamada esPrimo que reciba un número entero como parámetro y devuelva true si es primo y false si no lo es.
// Prueba la función con varios números.
function esPrimo($numero)
{
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

mostrarEjercicio(8);

$numerosPrueba = [1, 7, 12, 23, 16, 29, 199, 1234154];
foreach ($numerosPrueba as $numero) {
    if (esPrimo($numero)) {
        echo $numero . " es primo<br>";
    } else {
        echo $numero . " no primo<br>";
    }
}

// Ejercicio 9
// Crea un array con los nombres de 5 países.
// Utilizando un bucle foreach, imprime cada uno de los nombres.
$paises = ["España", "Francia", "Italia", "Alemania", "Reino Unido"];
mostrarEjercicio(9);
echo "* Países:<br>";
foreach ($paises as $pais) {
    echo "- " . $pais . "<br>";
}

// Ejercicio 10
// Crea una función llamada invertirArray que reciba un array como parámetro y devuelva un nuevo array con los elementos en orden inverso.
// Prueba la función con un array de números. NO usar funciones predefinidas.
function invertirArray($array)
{
    $resultado = [];
    for ($i = count($array) - 1; $i >= 0; $i--) {
        $resultado[] = $array[$i];
    }
    return $resultado;
}

mostrarEjercicio(10);
echo "<br>";
$numeros = [1, 2, 3, 4, 5];
$inverso = invertirArray($numeros);
print_r($inverso);

// Ejercicio 11
// Crea una variable $temperatura y asígnale un valor numérico que represente una temperatura en grados Celsius.
// Utilizando una estructura if, comprueba si la temperatura es mayor a 30 grados Celsius.
// Si es así, imprime "Hace mucho calor". De lo contrario, imprime "La temperatura es agradable".
// Crea una variable $llueve y asígnale un valor booleano (true o false) que represente si está lloviendo o no.
// Utilizando una estructura if, comprueba si está lloviendo.
// Si es así, imprime "Lleva un paraguas contigo". De lo contrario, imprime "No olvides tu protector solar".
$temperatura = 32;
$llueve = true;

mostrarEjercicio(11);

if ($temperatura > 30) {
    echo "Hace mucho calor<br>";
} else {
    echo "La temperatura es agradable<br>";
}

if ($llueve) {
    echo "Lleva un paraguas contigo";
} else {
    echo "No olvides tu protector solar";
}

// Ejercicio 12
// Crea un array asociativo llamado $persona que contenga las siguientes claves y valores: "nombre", "edad", "ciudad", "profesión".
// Asigna valores adecuados para cada clave.
// Utilizando un bucle foreach, recorre el array $persona e imprime cada clave y su valor correspondiente.
$persona = [
    "nombre" => $nombre,
    "edad" => 37,
    "ciudad" => "Asturias",
    "profesion" => "Software Engineer"
];

mostrarEjercicio(12);
echo "Datos personales:<br>";
foreach ($persona as $clave => $valor) {
    echo $clave . ": " . $valor . "<br>";
}

// Ejercicio 13
// Crea una cadena de caracteres $frase que contenga una frase de tu elección.
// Convierte la cadena de caracteres en un array, tomando como separador el espacio en blanco.
// Imprime cada palabra del array en una línea separada.
$frase = "¡Hola cara de bola!";
$arrayFrase = explode(" ", $frase);

mostrarEjercicio(13);
echo "Palabras de la frase: " . $frase . ": <br>";
foreach ($arrayFrase as $palabra) {
    echo $palabra . "<br>";
}

// Ejercicio 14
// Crea un array llamado $alumnos que contenga información de varios alumnos.
// Cada elemento del array debe ser un array asociativo con las claves "nombre", "edad" y "curso" para representar el nombre, la edad y el curso de cada alumno.
// Utilizando un bucle foreach, recorre el array $alumnos y calcula el promedio de edades de los alumnos.
// Imprime el resultado del promedio de edades.
$alumnos = [
    ["nombre" => $nombre, "edad" => 37, "curso" => "PHP"],
    ["nombre" => "Andrea", "edad" => 41, "curso" => "Bootcamp Full Stack"],
    ["nombre" => "Ana Lis", "edad" => 28, "curso" => "Máster en algo con un nombre muy largo"],
    ["nombre" => "Paz", "edad" => 37, "curso" => "Salesforce"]
];

$totalEdades = 0;
foreach ($alumnos as $alumno) {
    $totalEdades += $alumno["edad"];
}
$promedioEdades = $totalEdades / count($alumnos);

mostrarEjercicio(14);
echo "Promedio de edades: " . $promedioEdades . "<br>";

// Ejercicio 15
// Crea una función llamada dividir que reciba dos números como parámetros y realice la división del primer número por el segundo número.
// Dentro de la función, verifica si el segundo número es igual a cero.
// Si el segundo número es cero, lanza una excepción de tipo Exception con un mensaje indicando que la división por cero no está permitida.
// Si el segundo número no es cero, devuelve el resultado de la división.
// Fuera de la función, utiliza un bloque try-catch para capturar la excepción en caso de que ocurra y muestra un mensaje de error.
function dividir($numerador, $denominador)
{
    if ($denominador == 0) {
        throw new Exception("Error: No se puede dividir un número por cero");
    }
    return $numerador / $denominador;
}

mostrarEjercicio(15);
try {
    $resultado = dividir(10, 0);
    echo "Resultado de la división: " . $resultado . "<br>";
} catch (Exception $e) {
    echo $e->getMessage() . "<br>";
}

// Buen fin de semana