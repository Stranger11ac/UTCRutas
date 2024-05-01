<?php
// Conectar a la base de datos usando PDO
try {
    $db = new PDO("mysql:host=localhost;dbname=db_test", "testuser", "testpass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Iniciar una sesión
session_start();

// Comprobar si el usuario ha enviado el formulario de login
if (isset($_POST["submit"])) {
    // Obtener los datos del formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Preparar la consulta SQL para buscar el usuario y el rol
    $sql = "SELECT u.user_id, u.user_name, u.user_pass, r.user_rol FROM users u JOIN users_rutas r ON u.user_id = r.user_id WHERE u.user_name = :username";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);

    // Ejecutar la consulta
    $stmt->execute();

    // Comprobar si se encontró algún resultado
    if ($stmt->rowCount() > 0) {
        // Obtener el resultado como un array asociativo
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si la contraseña coincide
        if (password_verify($password, $row["user_pass"])) {
            // Guardar el id y el nombre del usuario en variables de sesión
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["user_name"] = $row["user_name"];

            // Comprobar el valor del rol del usuario
            if ($row["user_rol"] == 3) {
                // Redirigir al usuario a menu.html
                header("Location: menu.html");
                exit();
            } elseif ($row["user_rol"] == 1) {
                // Redirigir al usuario a dashboard.html
                header("Location: dashboard.html");
                exit();
            } else {
                // Mostrar un mensaje de error si el rol no es válido
                echo "El rol del usuario no es válido.";
            }
        } else {
            // Mostrar un mensaje de error si la contraseña no coincide
            echo "La contraseña es incorrecta.";
        }
    } else {
        // Mostrar un mensaje de error si el usuario no existe
        echo "El usuario no existe.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="" method="post">
        <p>
            <label for="username">Nombre de usuario:</label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="password">Contraseña:</label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="submit" name="submit" value="Iniciar sesión">
        </p>
    </form>
</body>
</html>
