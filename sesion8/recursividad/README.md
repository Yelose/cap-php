# Ejercicios de recursividad con PHP

En este proyecto se encuentran varios ejercicios implementados en PHP que abordan conceptos de recursividad. Los ejercicios incluidos son los siguientes:

1. Cálculo de la suma de los elementos de un array
2. Generación de la serie de Fibonacci
3. Conteo de dígitos en un número entero
4. Revertir una cadena de texto

## Archivo index.php

Este archivo es la página principal donde se encuentran los formularios para interactuar con los diferentes ejercicios.

- **Cálculo de la suma de los elementos de un array:** Este formulario permite ingresar una lista de números separados por comas. Al presionar el botón "Calcular suma", se enviará el formulario al archivo sumarray.php para realizar la suma de los elementos del array.

- **Generación de la serie de Fibonacci:** En este formulario se puede ingresar un número entero. Al presionar el botón "Generar número de Fibonacci", se enviará el formulario al archivo fibonacci.php para calcular el n-ésimo número de la serie de Fibonacci.

- **Conteo de dígitos en un número entero:** Este formulario permite ingresar un número entero. Al presionar el botón "Contar dígitos", se enviará el formulario al archivo contarcifras.php para contar la cantidad de dígitos en el número ingresado.

- **Revertir una cadena de texto:** En este formulario se puede ingresar una cadena de texto. Al presionar el botón "Revertir texto", se enviará el formulario al archivo revertirtexto.php para revertir la cadena de texto.

## Archivo sumarray.php

Este archivo contiene el código para calcular la suma de los elementos de un array utilizando recursividad.

El proceso es el siguiente:

1. Se comprueba si el método de solicitud es POST.
2. Se obtiene el valor del input "array" del formulario.
3. Se convierte la cadena de números separados por comas en un array utilizando la función `explode()`.
4. Se realiza una llamada a la función recursiva `sumArray($array)` para calcular la suma de los elementos del array.
5. La función `sumArray($array)` toma como parámetro el array y realiza la suma de los elementos utilizando recursividad.
6. El resultado se muestra en la página.

## Archivo fibonacci.php

Este archivo contiene el código para generar el n-ésimo número de la serie de Fibonacci utilizando recursividad.

El proceso es el siguiente:

1. Se comprueba si el método de solicitud es POST.
2. Se obtiene el valor del input "n" del formulario.
3. Se realiza una llamada a la función recursiva `fibonacci($n)` para calcular el n-ésimo número de la serie de Fibonacci.
4. La función `fibonacci($n)` toma como parámetro el número y utiliza recursividad para calcular el número de Fibonacci.
5. El resultado se muestra en la página.

## Archivo contarcifras.php

Este archivo contiene el código para contar la cantidad de dígitos en un número entero utilizando recursividad.

El proceso es el siguiente:

1. Se comprueba si el método de solicitud es POST.
2. Se obtiene el valor del input "number" del formulario.
3. Se realiza una llamada a la función recursiva `contarDigitos($number)` para contar los dígitos del número ingresado.
4. La función `contarDigitos($number)` toma como parámetro el número y utiliza recursividad para contar los dígitos.
5. El resultado se muestra en la página.

## Arch
