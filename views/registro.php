<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="preload" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/login_registro_style.css">
</head>
<style>
        .error-message {
            color:  rgb(255, 255, 255);
            font-size: 0.9rem;
        }
        .success-message {
            color: green;
            font-size: 0.9rem;
            margin-top: 10px;
        }
    </style>

<body>
    <header>
    </header>
    <main>
        <div class="header">
            <h1>Crear una cuenta</h1>
            <h2>Únete a nosotros completando el formulario</h2>
        </div>

    <!-- Formulario de Registro -->
<form method="post" action="../model/RegisterModel.php" class="formulario">
    <fieldset>
        <legend>Regístrate</legend>

        <div class="campo">
            <label for="nombre">Nombre(s)</label>
            <input type="text" id="nombre" name="usuario" placeholder="Ingresa tu nombre" required>
        </div>

        <div class="campo">
            <label for="correo">Correo Electrónico</label>
            <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo" required>
        </div>

        <div class="campo">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="contraseña" placeholder="Crea una contraseña" required>
        </div>

          <!-- Mostrar mensaje de error si algo salió mal -->
          <?php if (isset($_GET['error'])): ?>
                    <p class="error-message">
                        <?php
                        switch ($_GET['error']) {
                            case 'campos':
                                echo "Por favor, completa todos los campos.";
                                break;
                            case 'correo_invalido':
                                echo "El correo ingresado no es válido.";
                                break;
                            case 'registro_fallido':
                                echo "Error al registrar. El correo ya está registrado.";
                                break;
                            case 'excepcion':
                                echo "Ocurrió un error inesperado. Inténtalo más tarde.";
                                break;
                            default:
                                echo "Ocurrió un error. Inténtalo de nuevo.";
                                break;
                        }
                        ?>
                    </p>
                <?php endif; ?>

                <!-- Mensaje de éxito si viene desde el login -->
                <?php if (isset($_GET['success'])): ?>
                    <p class="success-message">Registro exitoso. Ahora puedes iniciar sesión.</p>
                <?php endif; ?>

        <div class="boton_formulario">
            <button type="submit">Registrar</button>
        </div>

        <div class="campo">
            <p>¿Ya tienes una cuenta? <a href="login.php" style="color: rgb(255, 217, 102);">Inicia sesión aquí</a></p>
        </div>
    </fieldset>
</form>

</main>
</body>

</html>