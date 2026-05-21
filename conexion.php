<?php 
$host = "";
$user = "root";
$password = "";
$dbname = "Proyecto_real"

$conn = new mysql ($host, $user, $password, $dbname);

if ($conn->connect_error);{ 
    die("conexion fallida: " . $conn->connect_error);

    
}
?>