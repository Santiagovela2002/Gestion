<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div class="login-box">
            <div class="header-login">
                <img src="SRC\Instituto_Nacional_de_Antropologia_e_Historia-logo-575C55E659-seeklogo.com.png" alt="Logo" class="logo">
                <label class="name">Instituto Nacional de Antropología e Historia</label>
            </div>
            <h1>Inicio de Sesión</h1>
            
            <p>¿No tienes una cuenta? <a href="registro.php">Regístrate</a></p>
            <form action="login.php" method="post">
                <label for="usuario">Usuario:</label>
                <input type="text" name="email" id="usuario" class="input-text" placeholder="Email" require>
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="input-text" placeholder="Contraseña" require>
                <div class="remember-me">
                    <input type="checkbox" name="recordarme" id="recordarme" class="checkbox">
                    <label for="recordarme">Recuérdame</label>
                    
                </div>
                <div class="boton-container">
                    <button name = "entrar" type="submit" class="boton-entrar">Entrar</button>
                    
                </div>
                
            </form>
            <a href="olvido_contrasena.html" class="olvido-contrasena">Olvidé mi contraseña</a>
        </div>
    
</body>
</html>