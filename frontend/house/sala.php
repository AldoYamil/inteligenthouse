<?php
include_once '../../config/conexion.php';
include_once '../repit/backnav.php';

$sala="SELECT * FROM sala ORDER BY id DESC LIMIT 5";
$sql_result = $conn->prepare($sala);
$sql_result->execute();
$sala_results = $sql_result->get_result();
$incidents = $sala_results->fetch_all(MYSQLI_ASSOC);

if ($sql_result->error) {
    echo "Error: " . $sql_result->error;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sala - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Sala - Control de Iluminación y Ambiente</h1>
        <p>Descubre cómo puedes controlar la iluminación y el ambiente de tu sala de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Control de Iluminación</h2>
                <p>Control de luces con sensores de presencia y regulación de intensidad. Ajusta la iluminación de tu sala automáticamente según la presencia de personas y la hora del día.</p>
            </div>
            <div class="col-md-6">
                <img src="../img/sala1.jpg" class="img-fluid" alt="Control de Iluminación">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Control de Persianas</h2>
                <p>Control de persianas automatizadas según la hora del día. Mantén tu sala fresca y cómoda ajustando las persianas automáticamente.</p>
            </div>
            <div class="col-md-6">
                <img src="../img/sala2.jpg" class="img-fluid" alt="Control de Persianas">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Integración con Asistentes de Voz</h2>
                <p>Integración con asistentes de voz. Controla la iluminación y las persianas de tu sala con comandos de voz a través de asistentes como Alexa o Google Assistant.</p>
            </div>
            <div class="col-md-6">
                <img src="../img/sala3.jpg" class="img-fluid" alt="Integración con Asistentes de Voz">
            </div>
        </div>
    </section>

    <section>
        <div>
            <h1>Ultimos reportes</h1>
            <?php if ($incidents): ?>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Sensor</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Unidad de medida</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Mas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($incidents as $incident): ?>
                        <tr>
                            <th scope="row"><?php echo htmlspecialchars($incident['id']);?></th>
                            <td><?php echo htmlspecialchars($incident['sensor_type']);?></td>
                            <td><?php echo htmlspecialchars($incident['value']);?></td>
                            <td><?php echo htmlspecialchars($incident['unit']);?></td>
                            <td><?php echo htmlspecialchars($incident['timestamp']);?></td>
                            <td><a href="../api/sala_detalles.php?sensor_id=<?php echo urlencode(htmlspecialchars($incident['sensor_id']));?>" class="btn btn-primary">Ver más</a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>No hay reportes disponibles.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>