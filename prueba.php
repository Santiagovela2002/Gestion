<!DOCTYPE html>
<html>
<head>
    <title>LoginView</title>
    <style>
        /* Estilos CSS */
        /* Agrega los estilos aquí */
    </style>
</head>
<body>
    <section>
        <div class="signin">
            <div class="content">
                <img src="../assets/logoChat.png" alt="Uachat" style="width: 80px; height: auto;">
                <?php if (!$isSignup): ?>
                    <h2>Sign In</h2>
                <?php else: ?>
                    <h2>Sign Up</h2>
                <?php endif; ?>
                <div class="form">
                    <?php if (!$isSignup): ?>
                        <div class="inputBox">
                            <input type="text" required>
                            <i>Username</i>
                        </div>
                    <?php else: ?>
                        <div class="inputBox">
                            <input type="text" required>
                            <i>First Name</i>
                        </div>
                        <div class="inputBox">
                            <input type="text" required>
                            <i>Last Name</i>
                        </div>
                    <?php endif; ?>
                    <div class="inputBox">
                        <input type="<?php echo $showPassword ? 'text' : 'password'; ?>" required>
                        <i>Password</i>
                        <button id="whachPassword" class="simpleButton" onclick="toggleShowPassword()"><?php echo $showPassword ? 'Hide' : 'Show'; ?></button>
                    </div>
                    <?php if ($isSignup): ?>
                        <div class="inputBox">
                            <input type="email" required>
                            <i>Email</i>
                        </div>
                    <?php endif; ?>
                    <?php if (!$isSignup): ?>
                        <div class="links" style="text-align: right;">
                            <a href="#" onclick="toggleSignup()" style="color: #7355A4; text-align: right;">Signup</a>
                        </div>
                    <?php endif; ?>
                    <div class="inputBox">
                        <input onclick="<?php echo $isSignup ? 'signup()' : 'login()'; ?>" type="submit" value="Accept" class="smallButton">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        // Funciones JavaScript
        function login() {
            // Implementa la función de login aquí
        }
        
        function signup() {
            // Implementa la función de signup aquí
        }
        
        function toggleShowPassword() {
            // Implementa la función de toggleShowPassword aquí
        }
        
        function toggleSignup() {
            // Implementa la función de toggleSignup aquí
        }
    </script>
</body>
</html>
