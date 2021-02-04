<?php
function get_horarios_by_especialidad($especialidad)
{
    require_once 'db/db_fns.php';
    $sql = "SELECT horario_citas.id_cita, horario_citas.fecha, horario_citas.especialidad, horario_citas.disponibilidad, trabajadores_clinica.nombre, trabajadores_clinica.apellidos FROM horario_citas";
    $sql .= "INNER JOIN trabajadores_clinica ON trabajadores_clinica.folio_trabajador = horario_citas.trabajadores_clinica_folio_trabajador";
    $sql .= " WHERE horario_citas.especialidad = " ;
    $sql .= $especialidad;
    $result = get_items($sql);
    return $result;
}