<?php require('./LAYOUT/header.php'); ?>
<link rel="stylesheet" href="CSS/Analysis.css">
<link rel="stylesheet" href="dash.css">
<script src="cheats.js"></script>
<main class="main2">
    <h1>Página de Análisis</h1>
    <p>Detalles de las compras hechas</p>
</main>

<div class="post-method-btn-box">
    <div class="post-method-btn-star star-1">
        <img src="IMG/Start span.png" alt="">
    </div>
    <div class="post-method-button-close post-method-button">
        <img src="IMG/Registration.png" width="40" alt="">
        <div class="post-method-btn-text">
            <div>Análisis</div>
            <div class="time-animate">
                <span>/</span>
                <span>A</span>
                <span>N</span>
                <span>4</span>
                <span>L</span>
                <span>I</span>
                <span>S</span>
                <span>I</span>
                <span>S</span>
                <span>/</span>
            </div>
        </div>
    </div>
    <div class="post-method-btn-star star-r">
        <img src="IMG/Start span.png" alt="">
    </div>
</div>

<!-- Contenedor principal para la tabla y el gráfico -->
<div class="container">
    <div class="dashboard">
        <!-- Tabla de Producto -->
        <div class="table-container">
            <h2>Detalles de las Compras</h2>
            <table id="tablaProducto">
                <tr>
                    <th>ID</th>
                    <th>Especialidad</th>
                    <th>Fecha</th>
                </tr>
                <?php
                // Conectar a la base de datos
                $conn = new mysqli("localhost", "root", "", "ventas_pizzas");
                
                // Verificar la conexión
                if ($conn->connect_error) {
                    die("Conexión fallida: " . $conn->connect_error);
                }

                // Obtener las ventas
                $query = "SELECT * FROM ventas";
                $result = $conn->query($query);

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['especialidad'] . "</td>";
                    echo "<td>" . $row['fecha'] . "</td>";
                    echo "</tr>";
                }

                // Cerrar la conexión
                $conn->close();
                ?>
            </table>
        </div>

        <!-- Código para el Dashboard de Ventas -->
        <div class="chart-container">
            <h2>Dashboard de Ventas de Pizzas</h2>
            <canvas id="pizzaChart"></canvas>
        </div>
    </div>
</div>

<?php
// Conectar a la base de datos
$conn = new mysqli("localhost", "root", "", "ventas_pizzas");

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el conteo de ventas por especialidad
$query = "SELECT especialidad, COUNT(*) as cantidad FROM ventas GROUP BY especialidad";
$result = $conn->query($query);

$labels = array();
$data = array();

while ($row = $result->fetch_assoc()) {
    $labels[] = $row['especialidad'];
    $data[] = $row['cantidad'];
}

$conn->close();
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const labels = <?php echo json_encode($labels); ?>;
    const data = {
        labels: labels,
        datasets: [{
            label: 'Ventas de Pizzas',
            data: <?php echo json_encode($data); ?>,
            backgroundColor: ['#FF5733', '#FFC300', '#28A745', '#007BFF'], // Añade más colores si es necesario
            borderColor: '#ffffff',
            borderWidth: 1
        }]
    };

    const config = {
        type: 'pie',
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom'
                }
            }
        }
    };

    const pizzaChart = new Chart(
        document.getElementById('pizzaChart'),
        config
    );
</script>

<?php require('./LAYOUT/footer.php'); ?>
