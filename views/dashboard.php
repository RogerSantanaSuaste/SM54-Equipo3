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
    <link rel="stylesheet" href="../styles/dashboard.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <!-- <nav>
            <a href="../index.php" target="">Home</a>
                        <a href="">
                        <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'username'; ?>
                        </a>
                        <a id="CloseSesion" href="../controllers/CloseSesion.php">Cerrar Sesión</a>
        </nav> -->
    </header>
     <!-- Barra lateral -->
     <aside class="sidebar">
        <div class="logo">
            <h2>Dashboard</h2>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="dashboard.php">Inicio</a></li>
                <li><a href="usuario.php">Configuración</a></li>
                <li><a id="CloseSesion" href="../controllers/CloseSesion.php">Cerrar Sesión</a></li>
            </ul>
        </nav>
    </aside>
    <main>
    <header>
            <h1>Bienvenido al Dashboard <?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'username'; ?></h1>

            
    </header>

        <section class="">
        </section>

        <section class="">
        </section>
    </main>

</body>
</html>