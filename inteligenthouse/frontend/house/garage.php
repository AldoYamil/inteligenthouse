<?php
include_once '../../config/conexion.php';
include_once '../repit/homenav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Garaje - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Garaje - Control de Accesos y Seguridad</h1>
        <p>Descubre cómo puedes controlar los accesos y mejorar la seguridad de tu garaje de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Apertura y Cierre Automático de Puerta</h2>
                <p>Apertura y cierre automático de puerta con control remoto. Facilita el acceso a tu garaje con un sistema automatizado.</p>
            </div>
            <div class="col-md-6">
                <img src="images/garage_door_control.jpg" class="img-fluid" alt="Apertura y Cierre Automático de Puerta">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Sensor de Estacionamiento Asistido</h2>
                <p>Sensor de estacionamiento asistido (ultrasónico). Aparca tu coche de manera segura y precisa con sensores ultrasónicos.</p>
            </div>
            <div class="col-md-6">
                <img src="images/parking_sensor.jpg" class="img-fluid" alt="Sensor de Estacionamiento Asistido">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Detección de Movimiento</h2>
                <p>Detección de movimiento para alertas de seguridad. Mantén tu garaje seguro con sensores que detectan movimientos sospechosos y envían alertas.</p>
            </div>
            <div class="col-md-6">
                <img src="images/motion_detection.jpg" class="img-fluid" alt="Detección de Movimiento">
            </div>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>