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

// Obtener la especialidad de pizza enviada por JavaScript  
$data = json_decode(file_get_contents("php://input"));
$especialidad = $data->especialidad;

// Insertar la venta en la base de datos
$sql = "INSERT INTO ventas (especialidad) VALUES ('$especialidad')";
$response = array();

if ($conn->query($sql) === TRUE) {
    $response["success"] = true;
} else {
    $response["success"] = false;
}

echo json_encode($response);

// Cerrar la conexión
$conn->close();
?>
