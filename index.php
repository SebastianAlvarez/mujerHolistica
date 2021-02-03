<?php
if(isset($_GET["menu"])){
    $menu = $_GET["menu"];
    if($menu == "conocenos"){
        require_once 'views/Conocenos.php';
    }
    if($menu == "servicios"){
        require_once 'views/Servicios.php';
    }
    if($menu == "contactanos"){
        require_once 'views/ubicacion.php';
    }
    if($menu == "alta"){
        require_once 'views/alta.php';
    }
}else{
   
    require_once 'views/Home.php';
}