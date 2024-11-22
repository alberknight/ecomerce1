<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font  -->
    <link rel="shortcut icon" href="IMG/Alert.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!--  CSS -->
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="CSS/fontello.css">
    <style type="text/css">
        .marquee-text-wrap { overflow: hidden; }
        .marquee-text-content { width: 100000px; }
        .marquee-text-text {
            -webkit-animation-name: marquee-text-animation;
            animation-name: marquee-text-animation;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            float: left;
        }
        .marquee-text-paused .marquee-text-text {
            -webkit-animation-play-state: paused;
            animation-play-state: paused;
        }
        @-webkit-keyframes marquee-text-animation {
            0% { -webkit-transform: translateX(0); transform: translateX(0); }
            to { -webkit-transform: translateX(-100%); transform: translateX(-100%); }
        }
        @keyframes marquee-text-animation {
            0% { -webkit-transform: translateX(0); transform: translateX(0); }
            to { -webkit-transform: translateX(-100%); transform: translateX(-100%); }
        }
    </style>
    <title>Gestión de Productos</title>
    <!--  Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenedor" id="app">
        <div id="sidebar">
            <div class="toggle-btn">
                <span>&#9776;</span><i></i>
            </div>
            <ul>
                <li>
                    <input type="file" id="imageUpload" accept="image/*" style="display: none;">
                    <label for="imageUpload" style="cursor: pointer;">
                        <img id="uploadedImage" src="IMG/icon Manager.png" alt="Icon Manager" class="icon" style="max-width: 100%;">
                    </label>
                </li>
                <li>
                    <h2>BIENVENIDO</h2>
                </li>
                <li>
                    <h1>
                        <?php
                        echo isset($_SESSION['nombre_usuario']) ? $_SESSION['nombre_usuario'] : 'Invitado';
                        ?>
                    </h1>
                </li>
                <li>
                    <a href="index.php"><img src="IMG/Home.png" alt="Icono de Home" class="Home">MENU</a>
                </li>
                <li>
                    <a href="Administration.php"><img src="IMG/Administration.png" alt="Icono de Admin" class="Admin">ADMINISTRACIÓN</a>
                </li>
                <li>
                    <a href="clientes.php"><img src="IMG/Users.png" alt="Icono de Users" class="Users">CLIENTES</a>
                </li>
                <li>
                    <a href="Products.php"><img src="IMG/products.png" alt="Icono de products" class="Products">VISTA DE PRODUCTOS</a>
                </li>
                <li>
                    <a href="Sales.php"><img src="IMG/Sales.png" alt="Icono de Sales" class="Sales">PEDIDOS</a>
                </li>
                <li>
                    <a href="Suppliers.php"><img src="IMG/Inventory.png" alt="Icono de Inventory" class="Inventory">INVENTARIO</a>
                </li>
                <li>
                    <a href="../../login/Login.html"><img src="IMG/Exit.png" alt="Icono de Exit" class="Exit">SALIR</a>
                </li>
            </ul>   
        </div>
        <header>
            <div class="logo">
                <img src="IMG/LogoPizza.png" alt="Logo de la empresa" class="logo-img">
                <h2 class="logo-nombre">PAPU-ZZERIA Origins</h2>
            </div>
        </header>
        <div class="contenido">
            <!-- JavaScript-->
            <script>
                document.getElementById('imageUpload').addEventListener('change', function(event) {
                    const file = event.target.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('uploadedImage').src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    }
                });
            </script>
        </div>
    </div>
</body>
</html>
