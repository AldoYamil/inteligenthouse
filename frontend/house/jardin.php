<?php
include_once '../../config/conexion.php';
include_once '../repit/backnav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardín - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Jardín - Riego Automatizado y Monitoreo</h1>
        <p>Descubre cómo puedes automatizar el riego y monitorear las condiciones de tu jardín de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Riego Automático</h2>
                <p>Riego automático según humedad del suelo. Mantén tu jardín siempre verde y saludable con un sistema de riego que se ajusta a las necesidades del suelo.</p>
            </div>
            <div class="col-md-6">
                <img src="images/garden_irrigation.jpg" class="img-fluid" alt="Riego Automático">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Monitoreo de Temperatura y Humedad</h2>
                <p>Monitoreo de temperatura y humedad. Mantén un ambiente óptimo en tu jardín monitoreando las condiciones ambientales.</p>
            </div>
            <div class="col-md-6">
                <img src="images/garden_temperature_humidity.jpg" class="img-fluid" alt="Monitoreo de Temperatura y Humedad">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Iluminación Exterior Automática</h2>
                <p>Iluminación exterior automática. Asegura que tu jardín esté bien iluminado durante la noche con un sistema de iluminación que se enciende y apaga automáticamente.</p>
            </div>
            <div class="col-md-6">
                <img src="images/garden_lighting.jpg" class="img-fluid" alt="Iluminación Exterior Automática">
            </div>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>