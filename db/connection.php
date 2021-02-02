<?php
function get_connection()
{
    $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "mujer_holistica";
        
        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
        // Check connection
        if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
        }

        return $conn;
}