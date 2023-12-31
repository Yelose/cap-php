<?php include 'script.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <h1>Ejercicio Formulario con Validación</h1>
    </header>
    <main>
        <!-- alternativa <form action="script.php" > -->

        <form method="POST">
            <div>
                <div class="inputfield">
                    <input type="text" id="name" name="name" placeholder="Nombre: "
                        value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_name; ?>
                    </p>
                </div>
                <div class="inputfield">
                    <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos: "
                        value="<?php echo isset($_POST['apellidos']) ? $_POST['apellidos'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_apellidos; ?>
                    </p>
                </div>
            </div>

            <div>
                <div class="inputfield">
                    <input type="text" id="direccion" name="direccion" placeholder="Dirección: "
                        value="<?php echo isset($_POST['direccion']) ? $_POST['direccion'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_direccion; ?>
                    </p>
                </div>
                <div class="inputfield">
                    <input type="number" id="cp" name="cp" placeholder="C.P: "
                        value="<?php echo isset($_POST['cp']) ? $_POST['cp'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_cp; ?>
                    </p>
                </div>
            </div>

            <div>
                <div class="inputfield">
                    <input type="email" id="email" name="email" placeholder="email: "
                        value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_email; ?>
                    </p>
                </div>
                <div class="inputfield">
                    <input type="email" id="email2" name="email2" placeholder="Confirma email: "
                        value="<?php echo isset($_POST['email2']) ? $_POST['email2'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_email2; ?>
                    </p>
                </div>
            </div>

            <div>
                <div class="inputfield">
                    <input type="text" id="dni" name="dni" placeholder="DNI: "
                        value="<?php echo isset($_POST['dni']) ? $_POST['dni'] : ''; ?>" />
                    <p class="error">
                        <?php echo $msg_dni; ?>
                    </p>
                </div>
                <div class="inputfield">
                    <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña: " />
                    <p class="error">
                        <?php echo $msg_contrasena; ?>
                    </p>
                </div>
            </div>

            <button type="submit" name="aceptar">Enviar</button>
        </form>

    </main>
    <footer>
        <p> Copyright © 2023, creado por Esther, Gema y Marina</p>
    </footer>
</body>

</html>