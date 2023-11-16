<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}

// Obtener los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $autor = $_POST["autor"];
    $texto = $_POST["texto"];
    $fecha_envio = date("Y-m-d H:i:s");

    // Insertar los datos en la base de datos
    $sql = "INSERT INTO textos (autor, texto, fecha_envio) VALUES ('$autor', '$texto', '$fecha_envio')";

    if ($conn->query($sql) === TRUE) {
        echo "Texto enviado correctamente.";
    } else {
        echo "Error al enviar el texto: " . $conn->error;
    }
}

$conn->close();

?>