<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/pizza_margarita.css">
    <title>Pizzería | Pizza Margarita</title>
</head>
<body>
    <header class="header">
        <!-- Aquí puede ir el contenido del encabezado si es necesario -->
    </header>

    <main class="product-page">
        <div class="thumbnail-container">
            <img src="/Pagina-Pizza/menu/img/margarita.jpg" 
                 alt="Miniatura 1" 
                 class="thumbnail" 
                 onclick="changeImage(this, '/Pagina-Pizza/menu/img/margarita.jpg')">

            <img src="/Pagina-Pizza/menu/img/margi.webp" 
                 alt="Miniatura 2" 
                 class="thumbnail" 
                 onclick="changeImage(this, '/Pagina-Pizza/menu/img/margi.webp')">

            <img src="/Pagina-Pizza/menu/img/marga2.jpg" 
                 alt="Miniatura 3" 
                 class="thumbnail" 
                 onclick="changeImage(this, '/Pagina-Pizza/menu/img/marga2.jpg')">
        </div>

        <div class="main-image-container">
            <img id="main-image" src="/Pagina-Pizza/menu/img/margarita.jpg" alt="Imagen principal">
        </div>

        <div class="product-details">
            <h1 class="product-title">Pizza Margarita</h1>
            <p class="product-price">$149.99</p>
            <p class="product-description">
                Deliciosa pizza Margarita con una base de tomate, queso mozzarella fresco, y albahaca recién cortada. ¡El sabor clásico de Italia!
            </p>
            
            <div class="size-selection">
                <button class="size-button" onclick="toggleSizeOption('chica')">Chica</button>
                <button class="size-button" onclick="toggleSizeOption('mediana')">Mediana</button>
                <button class="size-button" onclick="toggleSizeOption('grande')">Grande</button>
            </div>

            <div id="size-options-container"></div>

            <button class="buy-now">Ordenar ahora</button>
            <button class="add-to-cart">Agregar al carrito</button>
        </div>
    </main>

    <script src="../JavaScript/pizza_margarita.js"></script>
</body>
</html>
