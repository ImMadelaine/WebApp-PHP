<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prodb";

// Crea la conexion 
$conn = new mysqli($servername, $username, $password, $dbname);
// confirma la conexion 
if ($conn->connect_error) {
  die("Fallo la conexuon: " . $conn->connect_error);
}
if (isset($_POST['registro'])) {

$nombre = trim($_POST['nombre']);
$correo = trim($_POST['correo']);
$contrasena= trim($_POST['contrasena']);

$sql = "INSERT INTO usuarios (nombre, correo, contrasena)
VALUES ('$nombre', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
  echo "Usuario agregado!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>