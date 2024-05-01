<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Cargar la librería jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Login</h1>
    <form id="login-form" method="post">
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
    <!-- Escribir el código JavaScript para el login con ajax -->
    <script>
        // Capturar el evento submit del formulario
        $("#login-form").submit(function(e) {
            // Evitar el comportamiento por defecto del formulario
            e.preventDefault();
            // Obtener los valores de los campos del formulario
            var username = $("#username").val();
            var password = $("#password").val();
            // Enviar una petición ajax al archivo PHP
            $.ajax({
                url: "login_c.php",
                type: "POST",
                data: {username: username, password: password},
                dataType: "json",
                success: function(response) {
                    // Procesar la respuesta JSON del archivo PHP
                    if (response.success) {
                        // Si el login fue exitoso, comprobar el rol del usuario
                        if (response.rol == 3) {
                            // Si el rol es 3, redirigir al usuario a menu.html
                            window.location.href = "menu.html";
                        } else if (response.rol == 1) {
                            // Si el rol es 1, redirigir al usuario a dashboard.html
                            window.location.href = "dashboard.html";
                        } else {
                            // Si el rol no es válido, mostrar un mensaje de error
                            alert("El rol del usuario no es válido.");
                        }
                    } else {
                        // Si el login falló, mostrar un mensaje de error
                        alert(response.error);
                    }
                },
                error: function(xhr, status, error) {
                    // Si hubo algún problema con la petición ajax, mostrar un mensaje de error
                    alert("Error al realizar el login: " + error);
                }
            });
        });
    </script>
</body>
</html>
