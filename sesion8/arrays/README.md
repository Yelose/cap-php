# Ejercicios - Arrays

## Busca las funciones predefinidas de arrays para realizar las siguientes acciones:

- Modificar un elemento del array utilizando su índice.

- Eliminar un elemento del array, no necesariamente el último.

- Recorrer un array con un foreach.

- Obtener la longitud de un array.

- Encontrar el máximo de un array de números.

- Encontrar el mínimo de un array de números.

- Obtener la suma y el promedio de un array. -Fusionar dos array en uno.

- Comprobar si un elemento existe en un array.

- Ordenar un array de forma ascendente.

- Ordenar un array de forma descendente.

1. Modificar un elemento del array utilizando su índice:

   - Puedes utilizar la asignación directa para modificar el valor de un elemento del array:
     ```php
     $array[índice] = nuevo_valor;
     ```

2. Eliminar un elemento del array, no necesariamente el último:

   - Emplea la función específica `unset()` diseñada para eliminar un elemento específico del array:
     ```php
     unset($array[índice]);
     ```

3. Recorrer un array con un foreach:

   - Haz uso del bucle `foreach` para recorrer todos los elementos del array:
     ```php
     foreach ($array as $elemento) {
         // Hacer algo con cada $elemento
     }
     ```

4. Obtener la longitud de un array:

   - Aplica la función `count()` disponible para obtener la cantidad de elementos en un array:
     ```php
     $longitud = count($array);
     ```

5. Encontrar el máximo de un array de números:

   - Valiéndote de la función `max()` podrás encontrar el valor máximo en un array de números:
     ```php
     $maximo = max($array);
     ```

6. Encontrar el mínimo de un array de números:

   - Recurre a la función `min()` para encontrar el valor mínimo en un array de números:
     ```php
     $minimo = min($array);
     ```

7. Obtener la suma y el promedio de un array:

   - Mediante la función `array_sum()` obtendrás la suma de los elementos en un array:
     ```php
     $suma = array_sum($array);
     ```
   - Para obtener el promedio, puedes dividir la suma por la longitud del array:
     ```php
     $promedio = array_sum($array) / count($array);
     ```

8. Fusionar dos array en uno:

   - Utilizando la función `array_merge()` para fusionar dos o más arrays en uno:
     ```php
     $nuevo_array = array_merge($array1, $array2);
     ```

9. Comprobar si un elemento existe en un array:

   - Emplea la función `in_array()` para verificar si un elemento está presente en un array:
     ```php
     if (in_array($elemento, $array)) {
         // El elemento existe en el array
     }
     ```

10. Ordenar un array de forma ascendente:

    - Utilizar la función `sort()` para ordenar un array en orden ascendente:
      ```php
      sort($array);
      ```

11. Ordenar un array de forma descendente:
    - Valiéndote de la función predefinida `rsort()` conseguirás ordenar un array en orden descendente:
      ```php
      rsort($array);
      ```

Estas son solo algunas de las funciones más comunes para trabajar con arrays en PHP. Hay muchas más funciones disponibles que puedes explorar en la documentación oficial de PHP: https://www.php.net/manual/es/ref.array.php
