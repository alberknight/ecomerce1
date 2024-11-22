<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Ventas de Pizzas</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div class="container">
        <h1>Dashboard de Ventas</h1>
        <canvas id="pizzaChart"></canvas>
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

    <script>
        const labels = <?php echo json_encode($labels); ?>;
        const data = {
            labels: labels,
            datasets: [{
                label: 'Ventas de Pizzas',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: ['#FF5733', '#FFC300', '#28A745'],
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
</body>
</html>
