<?php
include 'pizzeria1.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtener datos del formulario
    $nombre = $_POST['name-register'];
    $telefono = $_POST['phone-register']; // Capturar el teléfono
    $correo = $_POST['email-register']; // Capturar el correo
    $usuario = $_POST['username-register'];
    $contraseña = password_hash($_POST['password-register'], PASSWORD_DEFAULT); // Encriptar la contraseña

    // Preparar la consulta SQL
    $sql = "INSERT INTO empleado (nombre, telefono, correo, usuario, contraseña) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Vincular parámetros
    $stmt->bind_param("sisss", $nombre, $telefono, $correo, $usuario, $contrasena);
    
    // Ejecutar la consulta y verificar el resultado
    if ($stmt->execute()) {
        // Mostrar un mensaje y redirigir al login.html
        echo "<script>
                alert('Registro exitoso. Serás redirigido al login.');
                window.location.href = 'login.html'; // Redirige a login.html
              </script>";
    } else {
        // Mostrar error si algo falla
        echo "Error: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conn->close();
}
?>