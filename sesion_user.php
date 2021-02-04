<?php
session_start();
if (isset($_SESSION["User"])){
    
    require_once 'views/AgendarCitaPaciente.php';
}