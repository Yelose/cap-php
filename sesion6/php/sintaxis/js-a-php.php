<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ejercicios de Funciones Sesión 5</title>
    <style>
        body {
            padding: 20px;
        }

        form {
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <form method="post">
        <!-- la línea de value es para que vuelva el valor al DOM como estaba en el ejercicio de JS -->
        <input type="number" name="cifras-entero" placeholder="introduce un número entero"
            value="<?php echo isset($_POST['cifras-entero']) ? $_POST['cifras-entero'] : ''; ?>" />
        <button type="submit" name="submit-cifras">Contar cifras</button>
    </form>

    <form method="post">
        <!-- la línea de value es para que vuelva el valor al DOM como estaba en el ejercicio de JS -->
        <input name="asteriscos-input" type="number" placeholder="número para secuencia"
            value="<?php echo isset($_POST['asteriscos-input']) ? $_POST['asteriscos-input'] : ''; ?>" />
        <button type="submit" name="submit-asteriscos">Asteriscos</button>
        <button type="submit" name="submit-secuencia">Secuencia *+_</button>
        <button type="submit" name="submit-triangulo">Triángulo</button>
    </form>

    <form method="post">
        <label for="fecha-inicio">Fecha de inicio:</label>
        <input type="date" name="fecha-inicio" />
        <br />
        <label for="fecha-fin">Fecha de fin:</label>
        <input type="date" name="fecha-fin" />
        <br />
        <button type="submit" name="submit-diferencia">Calcular diferencia</button>
        <p id="resultado-diferencia"></p>
    </form>

    <?php
    if (isset($_POST['submit-cifras'])) {
        contarCifras();
    }

    if (isset($_POST['submit-asteriscos'])) {
        ponerAsteriscos();
    }

    if (isset($_POST['submit-secuencia'])) {
        ponerSecuencia();
    }

    if (isset($_POST['submit-triangulo'])) {
        mostrarTriangulo();
    }

    if (isset($_POST['submit-diferencia'])) {
        calcularDiferencia();
    }

    function contarCifras()
    {
        $cifrasElement = $_POST["cifras-entero"];
        $contarCifrasResultElement = "contar-cifras-result";
        $result = "Resultado aquí";

        $numero = intval($cifrasElement);

        if (is_nan($numero)) {
            $result = "El valor introducido no es un número válido.";
        } else {
            $result = strlen(strval($numero));
        }

        echo "<p id='$contarCifrasResultElement'>El número de cifras es: $result</p>";
    }

    function ponerAsteriscos()
    {
        $numero = $_POST["asteriscos-input"];
        $asteriscosResultElement = "asteriscos-result";
        $asteriscos = str_repeat("*", $numero);

        echo "<p id='$asteriscosResultElement'>$asteriscos</p>";
    }

    function ponerSecuencia()
    {
        $numero = $_POST["asteriscos-input"];
        $asteriscosResultElement = "asteriscos-result";
        $simbolos = ["*", "+", "_"];
        $secuencia = "";

        for ($i = 0; $i < $numero; $i++) {
            $indice = $i % count($simbolos);
            $secuencia .= $simbolos[$indice];
        }

        echo "<p id='$asteriscosResultElement'>$secuencia</p>";
    }

    function mostrarTriangulo()
    {
        $numero = $_POST["asteriscos-input"];
        $asteriscosResultElement = "asteriscos-result";
        $triangulo = "";

        for ($i = 1; $i <= $numero; $i++) {
            for ($j = 1; $j <= $i; $j++) {
                $triangulo .= "*";
            }
            $triangulo .= "<br>";
        }

        echo "<p id='$asteriscosResultElement'>$triangulo</p>";
    }

    function calcularDiferencia()
    {
        $fechaInicioElement = $_POST["fecha-inicio"];
        $fechaFinElement = $_POST["fecha-fin"];
        $resultadoElement = "resultado-diferencia";

        $fechaInicio = strtotime($fechaInicioElement);
        $fechaFin = strtotime($fechaFinElement);

        $diferencia = abs($fechaFin - $fechaInicio);
        $diferenciaDias = floor($diferencia / (60 * 60 * 24));

        echo "<p id='$resultadoElement'>La diferencia en días es: $diferenciaDias</p>";
    }
    ?>
</body>

</html>