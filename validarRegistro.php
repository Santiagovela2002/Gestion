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

// Verificar si se recibieron datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $contrasena = $_POST["contrasena"];
    $id_rol = 1; // Aquí debes definir el ID del rol que corresponda

    // Consulta SQL para verificar si el correo electrónico ya está registrado
    $sql_check_email = "SELECT Id_Usuario FROM usuario WHERE Correo_electronico = ?";
    
    // Preparar la consulta
    $stmt_check_email = $conn->prepare($sql_check_email);
    $stmt_check_email->bind_param("s", $correo);
    
    // Ejecutar la consulta
    $stmt_check_email->execute();
    
    // Obtener el resultado de la consulta
    $result = $stmt_check_email->get_result();
    
    // Verificar si se encontró algún resultado (es decir, si el correo electrónico ya está registrado)
    if ($result->num_rows > 0) {
        echo "El usuario ya esta registrado.";
    } else {
        // Consulta SQL para insertar un nuevo usuario
        $sql_insert_user = "INSERT INTO usuario (Nombre, Correo_electronico, Contraseña, Id_rol) VALUES (?, ?, ?, ?)";
        
        // Preparar la consulta
        $stmt_insert_user = $conn->prepare($sql_insert_user);
        $stmt_insert_user->bind_param("sssi", $nombre, $correo, $contrasena, $id_rol);
        
        // Ejecutar la consulta
        if ($stmt_insert_user->execute()) {
            echo "Nuevo usuario insertado correctamente.";
        } else {
            echo "Error al insertar el usuario: " . $stmt_insert_user->error;
        }
        
        // Cerrar la consulta de inserción
        $stmt_insert_user->close();
    }
    
    // Cerrar la consulta de verificación de correo electrónico
    $stmt_check_email->close();
}

// Cerrar la conexión
$conn->close();

?>