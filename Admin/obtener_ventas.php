<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ventas_pizzas";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener la cantidad de ventas por especialidad
$sql = "SELECT especialidad, COUNT(*) as cantidad FROM ventas GROUP BY especialidad";
$result = $conn->query($sql);

$ventas = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $ventas[$row['especialidad']] = $row['cantidad'];
    }
}

echo json_encode($ventas);

// Cerrar la conexión
$conn->close();
?>
