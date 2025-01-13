<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "../controllers/RegisterController.php";

    // Validar si las claves existen en $_POST
    $userName = $_POST["usuario"] ?? null;
    $password = $_POST["contraseña"] ?? null;
    $email = $_POST["correo"] ?? null;

    // Validar que los datos no estén vacíos
    if (empty($userName) || empty($password) || empty($email)) {
        echo "Por favor, completa todos los campos.";
        exit;
    }

    // Validar el formato del correo electrónico
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El correo electrónico no es válido.";
        exit;
    }

    // Encriptar la contraseña
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);

    // Llamar al controlador para registrar al usuario
    $registerController = new RegisterController();
    try {
        $newUser = $registerController->register($userName, $email, $password_hashed);

        if ($newUser) {
            header("Location: ../views/login.php?success=1");
            exit;
        } else {
            header("Location: ../views/registro.php?error=registro_fallido");
            exit;
        }
    } catch (Exception $e) {
        header("Location: ../views/registro.php?error=excepcion");
        exit;
    }
} else {
    echo "Método no permitido.";
    exit;
}
