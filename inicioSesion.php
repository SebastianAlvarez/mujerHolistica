<?php
$alerta = " ";
if (isset($_POST["sesion"])) {
    $folio = trim($_POST['folio']);
    $password = trim($_POST['password']);
    validacion($folio, $password);
}
require_once 'views/Login.php';

function validacion($folio, $password)
{
    $rest = substr($folio, 0, -6);
    switch ($rest) {
        case "01":
            if (sesionTrabajador($folio, $password)) {
                $GLOBALS['alerta'] = "sesion valida";
            } else {
                $GLOBALS['alerta'] = "Algunos de los datos es incorrecto";
            }
            break;
        case "02":
            if (sesionTrabajador($folio, $password)) {
                $GLOBALS['alerta'] = "sesion valida";
            } else {
                $GLOBALS['alerta'] = "Algunos de los datos es incorrecto";
            }
            break;
        case "03":
            if (sesionUser($folio, $password)) {
                require_once 'index.php';
            } else {
                $GLOBALS['alerta'] = "Algunos de los datos es incorrecto";
            }
            break;
        default:
            $GLOBALS['alerta'] = "Folio no valido";
    }
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

function sesionTrabajador($folio, $paswword)
{
    require_once 'models/sesion_model.php';
    $validar = get_work($folio);
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
