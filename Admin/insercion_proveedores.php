<?php
// Mostrar todos los errores (para desarrollo; elimina esta línea en producción)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Conexión a la base de datos
$conn = new mysqli('localhost', 'root', '', 'especialidad');

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verificar que los datos hayan sido enviados por POST
if (isset($_POST['LetraEspecialidad']) && isset($_POST['LetraPrecio'])) {
    // Obtener los datos del formulario
    $especialidad = $_POST['LetraEspecialidad'];
    $precio = $_POST['LetraPrecio'];

    // Verificar que los datos no estén vacíos
    if (!empty($especialidad) && !empty($precio)) {
        // Consulta preparada para insertar los datos
        $stmt = $conn->prepare("INSERT INTO especialidades_pizza (nombre, precio) VALUES (?, ?)");
        if ($stmt) {
            $stmt->bind_param("sd", $especialidad, $precio); // 's' para string, 'd' para decimal

            if ($stmt->execute()) {
                echo "Nueva especialidad de pizza añadida con éxito.";
            } else {
                echo "Error al ejecutar la consulta: " . $stmt->error;
            }

            // Cerrar la declaración
            $stmt->close();
        } else {
            echo "Error al preparar la consulta: " . $conn->error;
        }
    } else {
        echo "Error: Asegúrate de que todos los campos están llenos.";
    }
} else {
    echo "Error: No se recibieron datos del formulario.";
}

// Cerrar la conexión
$conn->close();
?>
