<?php

function get_folio($folio)
{
    require_once 'db/db_fns.php';
    $sql = "SELECT folio_paciente FROM paciente_clinica";
    $sql .= " WHERE folio_paciente = " ;
    $sql .= $folio;
    $result = get_validate($sql);
    return $result;
}

function set_paciente($folio, $password, $correo)
{
    require_once 'db/db_fns.php';
    $sql = "INSERT INTO usuarios_pacientes (folios_clinica_folio, contraseña, email) VALUES ('$folio', '$password', '$correo')";
    $empleado_result = insert_items($sql);
    return $empleado_result;
}