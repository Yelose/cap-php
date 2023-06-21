<?php

// variables de almacenamiento de errores

$msg_name = "";
$msg_apellidos = "";
$msg_direccion = "";
$msg_cp = "";
$msg_email = "";
$msg_email2 = "";
$msg_dni = "";
$msg_contrasena = "";


if (isset($_POST['aceptar'])) {
    // Checking name

    if (empty($_POST["name"])) {
        $msg_name = "Debes proporcionar tu nombre";
    } else {
        $name = $_POST["name"];
        if (!preg_match('/^[A-Z][a-zA-Z]*$/', $name)) {
            $msg_name = "El nombre debe empezar con mayúscula y solo se permiten letras";
        }
    }

    // Checking apellidos

    if (empty($_POST["apellidos"])) {
        $msg_apellidos = "Debes proporcionar tus apellidos";
    } else {
        $apellidos = $_POST["apellidos"];
        if (!preg_match('/^[A-Z][a-zA-Z]*$/', $apellidos)) {
            $msg_apellidos = "Los apellidos deben empezar con mayúscula y solo se permiten letras";
        }
    }

    // Checking dirección

    if (empty($_POST["direccion"])) {
        $msg_direccion = "Debes proporcionar tu dirección";
    }

    if (empty($_POST["cp"])) {
        $msg_cp = "Debes proporcionar el Código Postal";
    } else {
        $cp = $_POST["cp"];
        if (!preg_match('/^\d{5}$/', $cp)) {
            $msg_cp = "El código postal debe contener exactamente 5 números";
        }
    }

    // Checking email

    if (empty($_POST["email"])) {
        $msg_email = "Debes proporcionar tu email";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $msg_email = "El formato de email no es válido";
        } elseif (empty($_POST["email2"]) || $email != $_POST["email2"]) {
            $msg_email2 = "La confirmación de email no coincide";
        }
    }

    // Checking dni

    if (empty($_POST["dni"])) {
        $msg_dni = "Debes proporcionar tu DNI";
    } else {
        $dni = $_POST["dni"];
        if (!preg_match('/^\d{8}[- ]?[a-zA-Z]$/', $dni)) {
            $msg_dni = "El formato del DNI no es válido";
        }
    }

    // Checking contraseña

    if (empty($_POST["contrasena"])) {
        $msg_contrasena = "Debes proporcionar tu contrasena";
    } else {
        $contrasena = $_POST["contrasena"];
        if (strlen($contrasena) < 8 || strlen($contrasena) > 20) {
            $msg_contrasena = "La contraseña debe tener entre 8 y 20 caracteres";
        } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*\W).*$/', $contrasena)) {
            $msg_contrasena = "La contraseña debe contener al menos un número, una letra mayúscula, una letra minúscula y un símbolo";
        }
    }
}