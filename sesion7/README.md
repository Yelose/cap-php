# Formulario con Validación

Este proyecto consiste en un formulario con validación en PHP. El formulario recopila información personal del usuario, como nombre, apellidos, dirección, código postal, email, DNI y contraseña. Cada campo se valida para asegurar que se cumplan ciertos requisitos antes de enviar los datos.

## Instrucciones

1. Clona o descarga los archivos del proyecto en tu entorno de desarrollo local.

2. Asegúrate de tener un servidor web y PHP instalados en tu sistema.

3. Coloca los archivos en el directorio raíz de tu servidor web.

4. Abre el archivo `formulario.php` en tu navegador.

5. Completa el formulario con los datos requeridos.

6. La validación se realizará automáticamente cuando se envíe el formulario. Si algún campo no cumple con los requisitos, se mostrará un mensaje de error debajo del campo correspondiente.

7. Corrige los errores y envía el formulario nuevamente hasta que todos los campos sean válidos.

8. Los datos del formulario se enviarán a través del método `POST` y se procesarán en el archivo `script.php`. Puedes personalizar el manejo de los datos en ese archivo según tus necesidades.

## Requisitos de validación de cada campo

- Nombre: Debe empezar con mayúscula y solo se permiten letras.

- Apellidos: Deben empezar con mayúscula y solo se permiten letras.

- Dirección: No debe estar vacía.

- Código Postal (CP): Debe contener exactamente 5 números.

- Email: Debe ser un formato de email válido. Además, la confirmación del email debe coincidir.

- DNI: Debe empezar con 8 números y tener una letra. Se permite colocar un guion o espacio entre los números y la letra.

- Contraseña: Debe tener entre 8 y 20 caracteres y contener al menos un número, una letra mayúscula, una letra minúscula y un símbolo.

## Archivos del proyecto

- `formulario.php`: Contiene la estructura HTML del formulario y muestra los mensajes de error correspondientes a cada campo.

- `script.php`: Contiene la lógica de validación del formulario en PHP. Verifica los campos y asigna mensajes de error a las variables correspondientes. Este archivo se incluye en `formulario.php` para compartir las variables y la lógica de validación.

- `style.css`: Archivo CSS opcional para estilizar el formulario.

## Explicación del código proporcionado

1. Primero, se incluye el archivo `script.php` en el archivo `formulario.php` utilizando `include 'script.php';`. Esto permite que las variables y la lógica de validación se compartan entre ambos archivos.

2. Luego, se define la estructura HTML del formulario. Se utilizan etiquetas `<input>` para los campos de entrada y se agregan mensajes de error utilizando etiquetas `<p>`.

3. Para cada campo de entrada, se muestra el mensaje de error correspondiente utilizando la variable `$msg_nombre_campo` dentro de la etiqueta `<p class="error">`. Por ejemplo, `<?php echo $msg_name; ?>` muestra el mensaje de error del campo "name".

4. En el archivo `script.php`, se definen las variables de almacenamiento de errores correspondientes a cada campo del formulario. Estas variables se inicializan vacías.

5. Después, se verifica si el método de solicitud HTTP es "POST" utilizando `isset($_POST['aceptar'])`. Esto asegura que el formulario se haya enviado y se estén procesando los datos.

6. Para cada campo del formulario, se realiza la validación correspondiente.

   - Para el campo "name" y "apellidos", se verifica si están vacíos. Si no lo están, se utiliza la función `preg_match` con la expresión regular `/^[A-Z][a-zA-Z]*$/` para verificar que empiecen con mayúscula y solo contengan letras.

   - Para el campo "direccion" y "cp", se verifica si están vacíos. Para el campo "cp", se utiliza la función `preg_match` con la expresión regular `/^\d{5}$/` para verificar que contenga exactamente 5 números.

   - Para el campo "email", se verifica si está vacío. Si no lo está, se utiliza la función `filter_var` con la opción `FILTER_VALIDATE_EMAIL` para validar el formato del email. Además, se verifica si el campo "email2" está vacío o si el email no coincide con la confirmación.

   - Para el campo "dni", se verifica si está vacío. Si no lo está, se utiliza la función `preg_match` con la expresión regular `/^\d{8}[- ]?[a-zA-Z]$/` para validar el formato del DNI. Esta expresión regular permite un guión opcional o un espacio entre los 8 números y la letra.

   - Para el campo "contrasena", se verifica si está vacío. Si no lo está, se verifica la longitud de la contraseña y se utiliza la función `preg_match` con la expresión regular `/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).*$/` para validar que contenga al menos un número, una letra mayúscula, una letra minúscula y un símbolo.

7. Al final del archivo `script.php`, se cierra el bloque PHP.

Con esta estructura, el archivo `formulario.php` muestra los campos del formulario y los mensajes de error correspondientes utilizando las variables definidas en `script.php`. La lógica de validación se encuentra en `script.php`, y los errores se asignan a las variables correspondientes en función de los campos del formulario.
