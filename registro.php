<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Estilo.css">
    </head>
<body>
    <div class="login-box">
        <div class="header-login">
            <img src="SRC/Instituto_Nacional_de_Antropologia_e_Historia-logo-575C55E659-seeklogo.com.png" alt="Logo" class="logo">
            <label class="name">Instituto Nacional de Antropología e Historia</label>
        </div>
        <h1>Registro</h1>
        
        <p>¿Ya tienes una cuenta? <a href="inicio.php">Inicia sesión</a></p>
        <form action="validarRegistro.php" method="post">
            <label for="nombre">Nombre completo:</label>
            <input type="text" name="nombre" id="nombre" class="input-text" placeholder="Nombre completo" required>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email" class="input-text" placeholder="Correo electrónico" required>
            <label for="contrasena">Contraseña:</label>
            <div style="position: relative;">
                <input type="password" name="contrasena" id="contrasena" class="input-text" placeholder="Contraseña" required>
                <img src="SRC/ver.png" alt="Mostrar contraseña" class="eye-icon" id="togglePasswordVisibility">
            </div>
            <label for="confirmar_contrasena">Confirmar contraseña:</label>
            <div style="position: relative;">
                <input type="password" name="confirmar_contrasena" id="confirmar_contrasena" class="input-text" placeholder="Confirmar contraseña" required>
            </div>
            <div class="boton-container">
                <button name="registrar" type="submit" class="boton-entrar">Registrar</button>
            </div>
        </form>
    </div>

    <script>
        // Función para cambiar la visibilidad de la contraseña cuando se hace clic en el ícono del ojo
        function togglePasswordVisibility(inputId, eyeIconId) {
            var passwordInput = document.getElementById(inputId);
            var eyeIcon = document.getElementById(eyeIconId);

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.src = "SRC/ver.png";
                document.getElementById("confirmar_contrasena").type = "text";
            } else {
                passwordInput.type = "password";
                eyeIcon.src = "SRC/esconder.png";
                document.getElementById("confirmar_contrasena").type = "password";
            }
        }

        // Manejador de eventos para mostrar/ocultar la contraseña cuando se hace clic en el ícono del ojo
        document.getElementById("togglePasswordVisibility").addEventListener("click", function() {
            togglePasswordVisibility("contrasena", "togglePasswordVisibility");
        });
    </script>
</body>
</html>