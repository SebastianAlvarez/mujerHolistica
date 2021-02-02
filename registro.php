<?php
if(isset($_GET["menu"])){
    $menu = $_GET["menu"];
  
}else{
   
    require_once 'views/registro.php';
}