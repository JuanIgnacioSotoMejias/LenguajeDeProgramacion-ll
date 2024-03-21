<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Seccion</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
</head>

<body>
    <div class="cajadeinicio">
        <h1>Inicio de Seccion</h1>
        <form action="index.php">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="l-usuario" placeholder="Nombre De Usuario">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="l-contrasena" placeholder="Contraseña">
            <input type="submit" value="Iniciar">
            <a href="regristro.php">Crear Cuenta</a>
        </form>
    </div>
</body>

</html>