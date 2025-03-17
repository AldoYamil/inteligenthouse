<?php
include_once '../../config/conexion.php';
include_once '../repit/homenav.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habitación Secundaria - Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header class="container mt-4">
        <h1>Habitación Secundaria - Iluminación y Seguridad</h1>
        <p>Descubre cómo puedes mejorar la iluminación y seguridad de tu habitación secundaria de manera inteligente.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <h2>Control de Iluminación</h2>
                <p>Control de luces con encendido automático por voz o movimiento. Ajusta la iluminación de tu habitación automáticamente según la presencia de personas o comandos de voz.</p>
            </div>
            <div class="col-md-6">
                <img src="images/secondary_bedroom_lights.jpg" class="img-fluid" alt="Control de Iluminación">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Control de Cerraduras Electrónicas</h2>
                <p>Control de cerraduras electrónicas. Asegura tu habitación con cerraduras inteligentes que puedes controlar remotamente.</p>
            </div>
            <div class="col-md-6">
                <img src="images/electronic_locks.jpg" class="img-fluid" alt="Control de Cerraduras Electrónicas">
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Detección de Presencia No Autorizada</h2>
                <p>Detección de presencia no autorizada. Mantén tu habitación segura con sensores que detectan movimientos sospechosos y envían alertas.</p>
            </div>
            <div class="col-md-6">
                <img src="images/unauthorized_presence.jpg" class="img-fluid" alt="Detección de Presencia No Autorizada">
            </div>
        </div>
    </section>

    <?php
    include_once '../repit/footer.php';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>