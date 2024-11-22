<?php
$host = "localhost"; 
$user = "root";       
$password = "";       
$db = "pizzeria1";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo "conectado :D";
}
?>
