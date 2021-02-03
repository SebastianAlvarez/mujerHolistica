<?php
$alerta = " ";
if (isset($_POST["registrar"])) {
    $folio = trim($_POST['folio']);
    $correo = trim($_POST['correo']);
    $password = trim($_POST['password']);
    $password_comfirmar = trim($_POST['password-comfirmar']);

    if ($password == $password_comfirmar) {
        if (folio_valido($folio)) {
            require_once 'models/registro_model.php';
            $registrado = set_paciente($folio, $password, $correo);
            if ($registrado) {
                session_start();
                $_SESSION['User'] = $folio;
                header("location:sesion_user.php");
            } else {
                $alerta = "Folio ya registrado";
                require_once 'views/registro.php';
            }
        } else {
            $alerta = "Folio no valido";
            require_once 'views/registro.php';
        }
    } else {
        $alerta = "Las contraseñas no coinciden";
        require_once 'views/registro.php';
    }
}else{
require_once 'views/registro.php';
}

function folio_valido($folio)
{
    $rest = substr($folio, 0, -6);
    if ($rest == "03") {
        require_once 'models/registro_model.php';
        $result = get_folio($folio);
        if ($result == null) {
            return false;
        } else {
            return true;
        }
    } else {
        return false;
    }
}
