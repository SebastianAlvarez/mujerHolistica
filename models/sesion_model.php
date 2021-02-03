<?php
function get_user($folio)
{
    require_once 'db/db_fns.php';
    $sql = "SELECT folios_clinica_folio, contrasena FROM usuarios_pacientes";
    $sql .= " WHERE folios_clinica_folio = " ;
    $sql .= $folio;
    $sql .= " LIMIT 1";
    $result = get_validate($sql);
    return $result;
}


function get_work($folio)
{
    require_once 'db/db_fns.php';
    $sql = "SELECT trabajadores_clinica_folio_trabajador, contrasena FROM usuarios_esp_recp";
    $sql .= " WHERE trabajadores_clinica_folio_trabajador = " ;
    $sql .= $folio;
    $result = get_validate($sql);
    return $result;
}
