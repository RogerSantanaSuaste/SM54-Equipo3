<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../styles/login_registro_style.css">
    <link rel="preload" href="../styles/normalize.css">
    <style>
        .error-message {
            color: rgb(255, 255, 255);
            font-size: 0.9rem;
            margin-top: 3px;
        }
    </style>

</head>

<body>

    <header>
        

    </header>

    <main>

        <div class="header">
            <h1>Accede a tu cuenta</h1>
        </div>
        <!-- Formulario de Login -->
    <form method="post" action="../model/LoginModel.php" class="formulario">
    <fieldset>
        <legend>Inicio de Sesión</legend>

        <div class="campo">
            <label for="usuario">Correo Electrónico</label>
            <input type="email" id="usuario" name="correo" placeholder="Ingresa tu correo" required>
        </div>

        <div class="campo">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="contraseña" placeholder="Ingresa tu contraseña" required>
        </div>
            <!-- Mostrar mensaje de error si las credenciales son incorrectas -->
            <?php if (isset($_GET['error']) && $_GET['error'] == 1): ?>
            <p class="error-message">correo o contraseña incorrectas, intentalo de nuevo.</p>
            <?php endif; ?>
        <div class="boton_formulario">
            <button type="submit">Ingresar</button>
        </div>

        <div class="campo">
            <p>¿No tienes una cuenta? <a href="registro.php" style="color: rgb(255, 194, 89);">Regístrate aquí</a></p>
        </div>
    </fieldset>
</form>

    </main>
</body>
</html>