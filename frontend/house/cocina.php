<?php
include_once '../../config/conexion.php';
include_once '../repit/backnav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocina - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Cocina - Monitoreo y Seguridad</h1>
        <p>Descubre cómo puedes monitorear y asegurar tu cocina de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Sensor de Gas</h2>
                <p>Sensor de gas para detectar fugas y enviar alertas. Mantén tu cocina segura con detección temprana de fugas de gas.</p>
            </div>
            <div class="col-md-6">
                <img src="images/kitchen_gas_sensor.jpg" class="img-fluid" alt="Sensor de Gas">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Control Remoto de Electrodomésticos</h2>
                <p>Control remoto de encendido/apagado de electrodomésticos. Gestiona tus electrodomésticos de manera remota para mayor comodidad y seguridad.</p>
            </div>
            <div class="col-md-6">
                <img src="images/kitchen_appliances.jpg" class="img-fluid" alt="Control Remoto de Electrodomésticos">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Monitoreo de Temperatura y Humedad</h2>
                <p>Monitoreo de temperatura y humedad. Mantén un ambiente óptimo en tu cocina monitoreando las condiciones ambientales.</p>
            </div>
            <div class="col-md-6">
                <img src="images/kitchen_temperature_humidity.jpg" class="img-fluid" alt="Monitoreo de Temperatura y Humedad">
            </div>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>