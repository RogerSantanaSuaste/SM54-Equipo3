<?php
  //Cargar sesion del usuario logueado
session_start();
	if(!isset($_SESSION['autenticado'])){//Si no hay un usuario logueado, regresar al logueo**
    header("Location: ../index.php");

}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preload" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/login_registro_style.css">
    <title>Configuracion</title>
</head>
<body>
    <header>
        <nav>
            <a href="../index.php" target="">Home</a>
                        <a href="">
                        <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'username'; ?>
                        </a>
                        <a id="CloseSesion" href="../controllers/CloseSesion.php">Cerrar Sesión</a>
        </nav>
    </header>
    <main>
    </main>

</body>
</html>