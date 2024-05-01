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
    // Comprobar si la petición es de tipo ajax
    if (isset($_SERVER["HTTP_X_REQUESTED_WITH"]) && strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) == "xmlhttprequest") {
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

                // Devolver una respuesta JSON con el resultado del login y el rol del usuario
                echo json_encode(array("success" => true, "rol" => $row["user_rol"]));
            } else {
                // Devolver una respuesta JSON con el mensaje de error
                echo json_encode(array("success" => false, "error" => "La contraseña es incorrecta."));
            }
        } else {
            // Devolver una respuesta JSON con el mensaje de error
            echo json_encode(array("success" => false, "error" => "El usuario no existe."));
        }
    } else {
        // Si la petición no es de tipo ajax, mostrar un mensaje de error
        echo "Esta página solo acepta peticiones ajax.";
    }
}
