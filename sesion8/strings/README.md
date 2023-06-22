# Ejercicios - Cadenas de Caracteres

## Busca las funciones predefinidas con las que realizar los siguientes ejercicios

- Obtener la longitud de una cadena.

- Convertir una cadena a minúsculas o mayusculas dependiendo de lo que se elija.

- Reemplazar parte de una cadena.

- Obtener una parte específica de una cadena.

- Buscar la posición de una subcadena en una cadena.

- Dividir una cadena por los espacios.

- Eliminar los espacios en blanco del inicio y el final de una cadena.

- Convertir una cadena en un array.

- Reemplazar múltiples partes de una cadena.

#

1. Obtener la longitud de una cadena: `strlen()`
   Ejemplo:

   ```php
   $cadena = "Hola mundo";
   $longitud = strlen($cadena);
   echo "La longitud de la cadena es: " . $longitud;
   ```

2. Convertir una cadena a minúsculas o mayúsculas: `strtolower()` y `strtoupper()`
   Ejemplo:

   ```php
   $cadena = "Hola Mundo";
   $minusculas = strtolower($cadena);
   $mayusculas = strtoupper($cadena);
   echo "Cadena en minúsculas: " . $minusculas;
   echo "Cadena en mayúsculas: " . $mayusculas;
   ```

3. Reemplazar parte de una cadena: `str_replace()`
   Ejemplo:

   ```php
   $cadena = "Hola mundo";
   $reemplazada = str_replace("mundo", "amigo", $cadena);
   echo "Cadena reemplazada: " . $reemplazada;
   ```

4. Obtener una parte específica de una cadena: `substr()`
   Ejemplo:

   ```php
   $cadena = "Hola mundo";
   $parte = substr($cadena, 5, 5);
   echo "Parte de la cadena: " . $parte;
   ```

5. Buscar la posición de una subcadena en una cadena: `strpos()`
   Ejemplo:

   ```php
   $cadena = "Hola mundo";
   $posicion = strpos($cadena, "mundo");
   echo "La subcadena 'mundo' se encuentra en la posición: " . $posicion;
   ```

6. Dividir una cadena por los espacios: `explode()`
   Ejemplo:

   ```php
   $cadena = "Hola mundo";
   $array = explode(" ", $cadena);
   print_r($array);
   ```

7. Eliminar los espacios en blanco del inicio y el final de una cadena: `trim()`
   Ejemplo:

   ```php
   $cadena = "   Hola mundo   ";
   $cadenaSinEspacios = trim($cadena);
   echo "Cadena sin espacios: " . $cadenaSinEspacios;
   ```

8. Convertir una cadena en un array: `str_split()`
   Ejemplo:

   ```php
   $cadena = "Hola mundo";
   $array = str_split($cadena);
   print_r($array);
   ```

9. Reemplazar múltiples partes de una cadena: `str_replace()`
   Ejemplo:
   ```php
   $cadena = "Hola mundo";
   $reemplazada = str_replace(array("Hola", "mundo"), array("Hello", "world"), $cadena);
   echo "Cadena reemplazada: " . $reemplazada;
   ```

Estas son solo algunas de las funciones predefinidas de PHP que puedes utilizar para trabajar con cadenas de caracteres. Hay muchas más funciones disponibles para manipular y procesar cadenas según tus necesidades específicas.
