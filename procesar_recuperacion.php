<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $nueva_contrasena = password_hash($_POST['nueva_contrasena'], PASSWORD_DEFAULT);

    // Verificar si el usuario existe en la base de datos
    $sql = "SELECT * FROM usuario WHERE usuario = ? OR correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $usuario);
    $stmt->execute();
    $stmt->store_result();

    // Respuesta en formato JSON
    $response = [];
    if ($stmt->num_rows > 0) {
        // Usuario encontrado, actualizar la contraseña
        $update_sql = "UPDATE usuario SET contrasena = ? WHERE usuario = ? OR correo = ?";
        $update_stmt = $conn->prepare($update_sql);
        $update_stmt->bind_param("sss", $nueva_contrasena, $usuario, $usuario);
        
        if ($update_stmt->execute()) {
            // Éxito: responde con JSON
            $response['success'] = true;
            $response['message'] = 'Contraseña actualizada correctamente seras redirigido a la pagina de inicio.';
        } else {
            // Error al actualizar
            $response['success'] = false;
            $response['message'] = 'Error al actualizar la contraseña: ' . $update_stmt->error;
        }
    } else {
        // Usuario no encontrado
        $response['success'] = false;
        $response['message'] = 'Usuario no encontrado.';
    }

    // Cerrar sentencias y conexión
    $stmt->close();
    $conn->close();

    // Devolver respuesta JSON al frontend
    echo json_encode($response);
}
?>

