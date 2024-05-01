<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>
    <?php
    // Iniciar una sesión
    session_start();

    // Comprobar si el usuario ha iniciado sesión
    if (isset($_SESSION["user_id"])) {
        // Mostrar el nombre y el rol del usuario
        echo "<p>Bienvenido, " . $_SESSION["user_name"] . ". Tu rol es: " . $_SESSION["user_rol"] . ".</p>";
    } else {
        // Si el usuario no ha iniciado sesión, redirigirlo al archivo login.php
        header("Location: login.php");
        exit();
    }
    ?>

    <h1>Dashboard</h1>
    <p>Aquí puedes ver el contenido del dashboard.</p>
    <!-- Agregar un botón para cerrar la sesión -->
    <form action="logout.php" method="post">
        <input type="submit" name="logout" value="Cerrar sesión">
    </form>
</body>
</html>
