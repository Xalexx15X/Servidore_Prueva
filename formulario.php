<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Registro de Usuario</h2>
    <form action="" method="post">
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Registrarse">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);


        echo "<h3>Registro exitoso!</h3>";
        echo "<p>Nombre: $name</p>";
        echo "<p>Correo: $email</p>";
        echo "<p>Contraseña: " . str_repeat('*', strlen($password)) . "</p>";
    }
    ?>
</body>
</html>
