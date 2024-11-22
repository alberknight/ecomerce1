<?php require('./LAYOUT/header.php') ?>
<link rel="stylesheet" href="CSS/Suppliers Style.css">
<script src="cheats.js"></script>
<div class="post-method-btn-box">
    <div class="post-method-btn-star star-1">
        <img src="IMG/Start span.png" alt="">
    </div>
    <div class="post-method-button-close post-method-button">
        <img src="IMG/Registration.png" width="40" alt="">
        <div class="post-method-btn-text">
            <div>Inventario</div>
            <div class="time-animate">
                <span>/</span>
                <span>C</span>
                <span>E</span>
                <span>N</span>
                <span>T</span>
                <span>E</span>
                <Span>R</Span>
                <span>/</span>
            </div>
        </div>
    </div>
    <div class="post-method-btn-star star-r">
        <img src="IMG/Start span.png" alt="">
    </div>
</div>
<main>
<form class="formulario" id="formulario" method="post" action="products.php" onsubmit="agregarIngrediente(event)">
    <!-- Variable Nombre -->
    <div class="formulario-grupo" id="Variable-NP">
        <label for="LetraNP" class="Formulario-Label">Nombre</label>
        <div class="Variable-grupo-input">
            <input type="text" class="formulario-input" name="LetraNP" id="LetraNP" placeholder="Nombre del Ingrediente" required>
        </div>
    </div>
    <!-- Variable Cantidad -->
    <div class="formulario-grupo" id="Variable-D">
        <label for="LetraD" class="Formulario-Label">Cantidad</label>
        <div class="Variable-grupo-input">
            <input type="text" class="formulario-input" name="LetraD" id="LetraD" placeholder="Cantidad del Ingrediente" required>
        </div>
    </div>
    <div class="formulario-grupo">
        <label for="Calc" class="Formulario-Label">Insertar</label>
        <button class="formulario-input-boton" type="Submit">Añadir</button>
    </div>
</form>

</main>
<table id="tablaIngrediente">
	<tr>
		<th>#</th>
		<th>Nombre</th>
		<th>Cantidad</th>
	</tr>
</table>

<?php require('./LAYOUT/footer.php') ?>