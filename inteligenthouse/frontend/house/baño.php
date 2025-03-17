<?php
include_once '../../config/conexion.php';
include_once '../repit/homenav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baño - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Baño - Ahorro de Agua y Seguridad</h1>
        <p>Descubre cómo puedes ahorrar agua y mejorar la seguridad de tu baño de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Sensor de Humedad y Temperatura</h2>
                <p>Sensor de humedad y temperatura para activar ventilación. Mantén tu baño libre de humedad excesiva y a una temperatura confortable.</p>
            </div>
            <div class="col-md-6">
                <img src="images/bathroom_humidity_temperature.jpg" class="img-fluid" alt="Sensor de Humedad y Temperatura">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Control de Calentador de Agua</h2>
                <p>Control de calentador de agua según el horario. Asegúrate de tener agua caliente cuando la necesites y ahorra energía programando el calentador.</p>
            </div>
            <div class="col-md-6">
                <img src="images/water_heater_control.jpg" class="img-fluid" alt="Control de Calentador de Agua">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Detección de Fugas de Agua</h2>
                <p>Detección de fugas de agua. Protege tu baño de daños por agua con sensores que detectan fugas y envían alertas.</p>
            </div>
            <div class="col-md-6">
                <img src="images/water_leak_detection.jpg" class="img-fluid" alt="Detección de Fugas de Agua">
            </div>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>