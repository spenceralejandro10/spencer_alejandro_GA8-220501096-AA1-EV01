<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registropagina";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];

$sql = "INSERT INTO usuarios (nombre, apellido, email, contraseña, telefono, direccion) VALUES ('$nombre', '$apellido', '$email', '$contraseña', '$telefono', '$direccion')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
