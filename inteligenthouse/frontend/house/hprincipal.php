<?php
include_once '../../config/conexion.php';
include_once '../repit/homenav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación Principal - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Habitación Principal - Automatización y Confort</h1>
        <p>Descubre cómo puedes automatizar y mejorar el confort de tu habitación principal de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Control de Iluminación</h2>
                <p>Control de iluminación con sensores de movimiento. Ajusta la iluminación de tu habitación automáticamente según la presencia de personas.</p>
            </div>
            <div class="col-md-6">
                <img src="images/master_bedroom_lights.jpg" class="img-fluid" alt="Control de Iluminación">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Control de Temperatura</h2>
                <p>Control de temperatura con ventiladores o aire acondicionado. Mantén tu habitación a una temperatura confortable en todo momento.</p>
            </div>
            <div class="col-md-6">
                <img src="images/master_bedroom_temperature.jpg" class="img-fluid" alt="Control de Temperatura">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Sensor de Calidad del Aire y CO2</h2>
                <p>Sensor de calidad del aire y CO2. Monitorea la calidad del aire en tu habitación y asegúrate de que siempre sea saludable.</p>
            </div>
            <div class="col-md-6">
                <img src="images/air_quality_sensor.jpg" class="img-fluid" alt="Sensor de Calidad del Aire y CO2">
            </div>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>