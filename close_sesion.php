<?php
session_start();
if (isset($_GET["close"])){
    session_destroy();
    header("location:inicioSesion.php");
}