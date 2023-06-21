# Ejercicio de Clases y Objetos en PHP

Este ejercicio consiste en crear una clase `Coche` en el archivo `coche.php`, con atributos protegidos, constructor, getters y setters, así como un método adicional para mostrar información del coche. Luego, en el archivo `index.php`, se instancia la clase, se inicializa un objeto, se utilizan los métodos para modificar los atributos y se muestra la información actualizada por pantalla.

## Archivo coche.php

En este archivo, se define la clase `Coche` con los siguientes atributos protegidos: `nombre`, `marca` y `color`. También se implementa el constructor `__construct` para asignar valores iniciales a los atributos al crear un objeto de la clase.

Además, se incluyen los getters y setters correspondientes para acceder y modificar los atributos de la clase.

Por último, se agrega un método adicional llamado `mostrarInformacion` que imprime por pantalla la información del coche.

## Archivo index.php

En este archivo, se incluye el archivo `coche.php` utilizando la instrucción `include`. Luego, se crea un objeto de la clase `Coche` utilizando el constructor y se le asignan valores iniciales.

A continuación, se utiliza el método `mostrarInformacion` para mostrar la información inicial del coche.

Después, se utilizan los setters para modificar los atributos del coche. En este caso, se cambia el nombre, la marca y el color del coche.

Finalmente, se vuelve a llamar al método `mostrarInformacion` para mostrar la información actualizada del coche.

## Ejecución del código

Al ejecutar el archivo `index.php`, se mostrará la información inicial del coche y luego la información actualizada después de modificar los atributos.
