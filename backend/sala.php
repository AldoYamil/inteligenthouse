<?php
include_once '../config/conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sensor_id = $_POST["sensor_id"];
    $sensor_type = $_POST["sensor"];
    $value = $_POST["valor"];
    $unit = $_POST["unidad"];

    $stmt = $conn->prepare("INSERT INTO sala (sensor_id, sensor_type, value, unit) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssds", $sensor_id, $sensor_type, $value, $unit);
    
    if ($stmt->execute()) {
        echo "Datos guardados correctamente";
    } else {
        echo "Error al guardar los datos";
    }

    // Enviar correo electrónico
    $to = "aldoyamil30@gmail.com";
    $subject = "Alerta de Sensor - $sensor_type";
    $message = "
    <html>
    <head><title>Alerta de Sensor</title></head>
    <body>
        <h1>Datos del Sensor</h1>
        <p><strong>ID:</strong> $sensor_id</p>
        <p><strong>Tipo:</strong> $sensor_type</p>
        <p><strong>Valor:</strong> $value $unit</p>
        <p><strong>API:</strong> $api_response</p>
    </body>
    </html>
    ";
    $headers = "MIME-Version: 1.0\r\nContent-type:text/html;charset=UTF-8\r\nFrom: <no-reply@example.com>\r\n";
    mail($to, $subject, $message, $headers);

    // Redirigir a detalles.php con los datos del sensor
    header("Location: ../frontend/api/detalles.php?sensor_id=$sensor_id&sensor_type=$sensor_type&value=$value&unit=$unit&api_response=" . urlencode($api_response));
    exit();
}
?>