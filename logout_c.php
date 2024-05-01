<?php
// Iniciar una sesión
session_start();

// Comprobar si el usuario ha iniciado sesión
if (isset($_SESSION["user_id"])) {
    // Eliminar todas las variables de sesión
    $_SESSION = array();

    // Eliminar la cookie de sesión si existe
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    // Destruir la sesión
    session_destroy();
}

// Redirigir al usuario al archivo login.php
header("Location: login.php");
exit;
?>
