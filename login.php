<?php
session_start();
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['email-login'];
    $contrasena = $_POST['password-login'];

    $sql = "SELECT nombre, contrasena FROM usuario WHERE usuario = ? OR correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $usuario, $usuario);
    $stmt->execute();
    $stmt->store_result();
    
    header('Content-Type: application/json'); // Establecer el tipo de contenido como JSON
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($nombre_usuario, $hash);
        $stmt->fetch();

        if (password_verify($contrasena, $hash)) {
            $_SESSION['nombre_usuario'] = $nombre_usuario;
            echo json_encode(['success' => true, 'redirect' => 'Admin/index.php']);
        } else {
            echo json_encode(['success' => false, 'message' => 'Contraseña incorrecta']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'El usuario no existe']);
    }
}
?>