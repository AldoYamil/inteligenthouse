<?php 
include_once '../../config/conexion.php';
include_once '../repit/homenav.php';

// Obtener datos de la URL
$sensor_id = isset($_GET['sensor_id']) ? $_GET['sensor_id'] : 'N/A';

// Realizar consulta a la base de datos
$query = "SELECT * FROM sala WHERE sensor_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $sensor_id);
$stmt->execute();
$result = $stmt->get_result();
$sensor_data = $result->fetch_assoc();

$sensor_type = $sensor_data['sensor_type'];
$value = $sensor_data['value'];
$unit = $sensor_data['unit'];
$timestamp = $sensor_data['timestamp'];

    // Definir URLs de API según el tipo de sensor
    $api_url = "";
    switch ($sensor_type) {
        case "Infrarrojo":
            $api_url = "https://api.ejemplo.com/infrarrojo";
            break;
        case "Temperatura":
            $api_url = "http://api.weatherapi.com/v1/current.json?key=bcced44d70f24dc897721013252203&q=tijuana%27%20\"";
            break;
        case "Fotorresistencia":
            $api_url = "https://api.ejemplo.com/fotorresistencia";
            break;
        default:
            $api_url = "";
    }

    $api_response = "";
    if (!empty($api_url)) {
        $api_response = file_get_contents($api_url);
    }
$stmt->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Sensor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h1>Datos del Sensor</h1>
        <p><strong>Sensor ID:</strong> <?php echo htmlspecialchars($sensor_id); ?></p>
        <p><strong>Tipo:</strong> <?php echo htmlspecialchars($sensor_type); ?></p>
        <p><strong>Valor:</strong> <?php echo htmlspecialchars($value); ?> <?php echo htmlspecialchars($unit); ?></p>
        <p><strong>Fecha:</strong> <?php echo htmlspecialchars($timestamp); ?></p>
        <p><strong>Información API:</strong> <?php echo htmlspecialchars($api_response); ?></p>
    </div>
</body>
</html>