<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sensor = $_POST["sensor"];  // Ejemplo: "Incendio"
    $valor = $_POST["valor"];    // Ejemplo: "Temperatura: 450°C"
    $apiInfo = $_POST["apiInfo"]; // Información adicional de la API

    // Mostrar la alerta en la página web
    echo "<h1>Alerta de sensor detectada!</h1>";
    echo "<p>Sensor: $sensor</p>";
    echo "<p>Valor: $valor</p>";
    echo "<p>Información de la API: $apiInfo</p>";
}
?>
