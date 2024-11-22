<?php require('./LAYOUT/header.php'); ?>
<link rel="stylesheet" href="CSS/Products Style.css">
<script src="cheats.js"></script>

<?php
// Verifica si se han enviado datos de un nuevo ingrediente desde Suppliers.php
$newProductName = $_POST['LetraNP'] ?? null;
$newProductQuantity = $_POST['LetraD'] ?? null;
?>

<main class="main">
    <h1>Productos</h1>
    <p>En este apartado se muestra como perspectiva de un cliente hacia los productos</p>
</main>

<div class="container-de-products">
    <h3 class="title">Pizzas</h3>
    <div class="products-container">

        <!-- Productos predefinidos -->
        <div class="product" data-name="p-1">
            <img src="IMG/Pepperoni.jpg" alt="">
            <h3>Pepperoni</h3>
            <div class="price">$110.00</div>
        </div>
        <!-- Otros productos aquí... -->
        
        <!-- Nuevo producto añadido dinámicamente -->
        <?php if ($newProductName && $newProductQuantity): ?>
            <div class="product" data-name="new-product">
                <img src="IMG/nueva_pizza.jpg" alt="Imagen de nueva pizza">
                <h3><?php echo htmlspecialchars($newProductName); ?></h3>
                <div class="price">Cantidad: <?php echo htmlspecialchars($newProductQuantity); ?></div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php require('./LAYOUT/footer.php'); ?>
