<?php
session_start();
include 'pizzeria1.php';

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}else{
    echo "conectado :D";
}
?>