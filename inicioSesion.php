<?php
session_start();

$alerta = " ";
if (isset($_POST["sesion"])) {
    $folio = trim($_POST['folio']);
    $password = trim($_POST['password']);
    $rest = substr($folio, 0, -6);
    
    switch ($rest) {
        case "01":
            if (sesionTrabajador($folio, $password)) {
                $alerta = "sesion valida";
            } else {
                $alerta = "Algunos de los datos es incorrecto";
                require_once 'views/Login.php';
            }
            break;
        case "02":
            if (sesionTrabajador($folio, $password)) {
                $alerta = "sesion valida";
            } else {
                $alerta = "Algunos de los datos es incorrecto";
                require_once 'views/Login.php';
            }
            break;
        case "03":
            if (sesionUser($folio, $password)) {
                $_SESSION['User'] = $folio;
                header("location:sesion_user.php");
            } else {
                $alerta = "Algunos de los datos es incorrecto";
                require_once 'views/Login.php';
            }
            break;
        default:
            $alerta = "Folio no valido";
            require_once 'views/Login.php';
    }
} else {
    require_once 'views/Login.php';
}



function sesionUser($folio, $passwword)
{
    require_once 'models/sesion_model.php';
    $validar = get_user($folio);
    if ($folio == $validar["folios_clinica_folio"]) {
        if ($passwword == $validar["contrasena"]) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function sesionTrabajador($folio, $password)
{
    require_once 'models/sesion_model.php';
    $validar = get_work($folio);
    if ($folio == $validar["folios_clinica_folio"]) {
        if ($password == $validar["contrasena"]) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
