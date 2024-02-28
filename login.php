<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_inah";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];


// Validar el usuario y la contraseña
$sql = "SELECT * FROM usuario WHERE Correo_electronico = '$email' AND Contraseña = '$contrasena'";
$result = $conn->query($sql);

// Si el usuario y la contraseña son correctos, iniciar sesión
if ($result->num_rows > 0) {
    session_start();
    $_SESSION["usuario"] = $email;
    echo "<p>Contraseña correcta UwU</p>";
} else {
    echo "<p class='error'>Usuario o contraseña incorrectos.</p>";
}

// Cerrar la conexión
$conn->close();

?>