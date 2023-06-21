<?php
include 'contarcifras.php';
include 'fibonacci.php';
include 'revertirtexto.php';
include 'sumarray.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h2>Cálculo de la suma de los elementos de un array</h2>
        <label for="array">Introduce los números separados por comas:</label>
        <input type="text" name="array" id="array">
        <button type="submit">Calcular suma</button>
        <p class="result">
            <?php echo $resultadoSumaArray; ?>
        </p>
    </form>

    <!-- Formulario para generación de la serie de Fibonacci -->
    <form method="POST">
        <h2>Generación de la serie de Fibonacci</h2>
        <label for="n">Introduce un número entero:</label>
        <input type="number" name="n" id="n">
        <button type="submit">Generar número de Fibonacci</button>
        <p class="result">
            <?php echo $resultadoFibonacci; ?>
        </p>

    </form>

    <!-- Formulario para conteo de dígitos en un número entero -->
    <form method="POST">
        <h2>Conteo de dígitos en un número entero</h2>
        <label for="number">Introduce un número entero:</label>
        <input type="number" name="number" id="number">
        <button type="submit">Contar dígitos</button>
        <p class="result">
            <?php echo $resultadoContarCifras; ?>
        </p>

    </form>

    <!-- Formulario para revertir una cadena de texto -->
    <form method="POST">
        <h2>Revertir una cadena de texto</h2>
        <label for="text">Introduce una cadena de texto:</label>
        <input type="text" name="text" id="text">
        <button type="submit">Revertir texto</button>
        <p class="result">
            <?php echo $resultadoRevertirTexto; ?>
        </p>

    </form>
</body>

</html>