<?php
session_start(); // Inicia la sesión al principio del script

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $correo = $_POST["correo"] ?? null;
    $contraseña = $_POST["contraseña"] ?? null;

    // Validar que los campos no estén vacíos
    if (!$correo || !$contraseña) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Validar el formato del correo electrónico
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;
    }

    // Aquí puedes implementar la lógica para verificar el usuario en la base de datos
    require_once "../controllers/LoginController.php";
    $loginController = new LoginController();

    try {
        $isAuthenticated = $loginController->login($correo, $contraseña);

        if ($isAuthenticated) {
            // Establecer la variable de sesión
            $_SESSION['autenticado'] = true;
            $_SESSION['correo'] = $correo; // Opcional: Guarda más datos si lo necesitas

            // Redirigir al dashboard
            header("Location: ../views/dashboard.php");
            exit;
        } else {
            header("Location: ../views/login.php?error=1");
            exit;
        }
    } catch (Exception $e) {
        header("Location: ../views/login.php?error=1");
        exit;
    }
}
