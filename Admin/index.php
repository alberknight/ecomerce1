<?php require('./LAYOUT/header.php') ?>
<style type="text/css">.marquee-text-wrap{overflow:hidden}.marquee-text-content{width:100000px}.marquee-text-text{-webkit-animation-name:marquee-text-animation;animation-name:marquee-text-animation;-webkit-animation-timing-function:linear;animation-timing-function:linear;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite;float:left}
.marquee-text-paused .marquee-text-text{-webkit-animation-play-state:paused;animation-play-state:paused}
@-webkit-keyframes marquee-text-animation{0%{-webkit-transform:translateX(0);transform:translateX(0)}to{-webkit-transform:translateX(-100%);transform:translateX(-100%)}}@keyframes marquee-text-animation{0%{-webkit-transform:translateX(0);transform:translateX(0)}to{-webkit-transform:translateX(-100%);transform:translateX(-100%)}}</style>
<script src="cheats.js"></script>
<main class="main">
    <h1>Bienvenido</h1>
</main>
<div class="container-card">
    <div class="alert-text2">
    <div class="alert-star alert-star-1 alert-star-a-2" style="top:14.1581103584248px;
  left:21.783699982047295px;
  transform: scale(0.7)"></div>
  <div class="alert-star alert-star-2 alert-star-a-3" style="top:21.056714930740185px;
  left:166.5385131265263px;
  transform: scale(1)"></div>
  <div class="alert-star alert-star-4 alert-star-a-0" style="top:-13.955291686621592px;
  left:340.63200124731964px;
  transform: scale(0.4)"></div>
        <div class="alert-result">
            <img src="IMG/descargar.png" height="50" alt="">
        </div>
    </div>

    <h1 class="heading">DASHBOARD</h1>

    <div class="box-container">

        <div class="box">
            <img src="IMG/Admins.png" alt="">
            <h3>PERSONAL</h3>
            <p>Mostrativa de perfiles con rol de ADMIN/GERENTE y CAJERO/ATM</p>
            <a href="Administration.php" class="btn">Read More</a>
        </div>

        <div class="box">
            <img src="IMG/Clients.png" alt="">
            <h3>CLIENTES</h3>
            <p>Administracion de Clientes</p>
            <a href="clientes.php" class="btn">Read more</a>
        </div>

        <div class="box">
            <img src="IMG/Proveedor.png" alt="">
            <h3>INVENTARIO</h3>
            <p>Mostrativa del almacen</p>
            <a href="Suppliers.php" class="btn">Read more</a>
        </div>

        <div class="box">
            <img src="IMG/Products Admin.png" alt="">
            <h3>PRODUCTOS</h3>
            <p>Mostrativa en forma general de productos existentes de la empresa</p>
            <a href="Products.php" class="btn">Read more</a>
        </div>

        <div class="box">
            <img src="IMG/Comprador.png" alt="">
            <h3>PEDIDOS</h3>
            <p>Mostrativa de pedidos realizados</p>
            <a href="Sales.php" class="btn">Read more</a>
        </div>
        <div class="box">
            <img src="IMG/Analisis.png" alt="">
            <h3>ANALISIS</h3>
            <p>Seguimiento de movimientos realizados</p>
            <a href="Analysis.php" class="btn">Read more</a>
        </div>

    </div>

</div>

<!-- Custom CO -->
<div class="result-move-text rel">
    <div class="marquee-text-wrap">
        <div class="marquee-text-content">
            <div class="marquee-text-text" style="animation-duration: 20s;">
                <div class="result-move-main">

                </div>
            </div>
            <div class="marquee-text-text" style="animation-duration: 20s;">
                <div class="result-move-main">

                </div>
            </div>
            <div class="marquee-text-text" style="animation-duration: 20s;">
                <div class="result-move-main">

                </div>
            </div>
            <div class="marquee-text-text" style="animation-duration: 20s;">
                <div class="result-move-main">

                </div>
            </div>
            <div class="marquee-text-text" style="animation-duration: 20s;">
                <div class="result-move-main">

                </div>
            </div>
        </div>
    </div>
</div>
<!---->

<div>

<?php require('./LAYOUT/footer.php') ?>