<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casa Inteligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php
    include_once '../config/conexion.php';
    include_once './repit/homenav.php';
    ?>
    <header class="container mt-4">
        <h1>House Sections</h1>
        <p>Descubre las funcionalidades de una casa inteligente y navega por las distintas secciones de tu hogar.</p>
    </header>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/living_room.jpg" class="card-img-top" alt="Sala">
                    <div class="card-body">
                        <h5 class="card-title">Sala</h5>
                        <p class="card-text">Control de luces con sensores de presencia y regulación de intensidad. Control de persianas automatizadas según la hora del día. Integración con asistentes de voz.</p>
                        <a href="./house/sala.php" class="btn btn-primary">Ir a la Sala</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/kitchen.jpg" class="card-img-top" alt="Cocina">
                    <div class="card-body">
                        <h5 class="card-title">Cocina</h5>
                        <p class="card-text">Sensor de gas para detectar fugas y enviar alertas. Control remoto de encendido/apagado de electrodomésticos. Monitoreo de temperatura y humedad.</p>
                        <a href="./house/cocina.php" class="btn btn-primary">Ir a la Cocina</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/master_bedroom.jpg" class="card-img-top" alt="Habitación Principal">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Principal</h5>
                        <p class="card-text">Control de iluminación con sensores de movimiento. Control de temperatura con ventiladores o aire acondicionado. Sensor de calidad del aire y CO2.</p>
                        <a href="./house/hprincipal.php" class="btn btn-primary">Ir a la Habitación Principal</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/secondary_bedroom.jpg" class="card-img-top" alt="Habitación Secundaria">
                    <div class="card-body">
                        <h5 class="card-title">Habitación Secundaria</h5>
                        <p class="card-text">Control de luces con encendido automático por voz o movimiento. Control de cerraduras electrónicas. Detección de presencia no autorizada.</p>
                        <a href="./house/hsecundaria.php" class="btn btn-primary">Ir a la Habitación Secundaria</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/bathroom.jpg" class="card-img-top" alt="Baño">
                    <div class="card-body">
                        <h5 class="card-title">Baño</h5>
                        <p class="card-text">Sensor de humedad y temperatura para activar ventilación. Control de calentador de agua según el horario. Detección de fugas de agua.</p>
                        <a href="./house/baño.php" class="btn btn-primary">Ir al Baño</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/garage.jpg" class="card-img-top" alt="Garaje">
                    <div class="card-body">
                        <h5 class="card-title">Garaje</h5>
                        <p class="card-text">Apertura y cierre automático de puerta con control remoto. Sensor de estacionamiento asistido (ultrasónico). Detección de movimiento para alertas de seguridad.</p>
                        <a href="./house/garage.php" class="btn btn-primary">Ir al Garaje</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/garden.jpg" class="card-img-top" alt="Jardín">
                    <div class="card-body">
                        <h5 class="card-title">Jardín</h5>
                        <p class="card-text">Riego automático según humedad del suelo. Monitoreo de temperatura y humedad. Iluminación exterior automática.</p>
                        <a href="./house/jardin.php" class="btn btn-primary">Ir al Jardín</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once './repit/footer.php';
    ?>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+3i4l0i/tI1kxroU4n0j6B7LZp6+g" crossorigin="anonymous"></script>
</body>
</html>