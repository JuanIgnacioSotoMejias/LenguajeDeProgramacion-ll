<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regristo de Seccion</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/nav.css">
</head>

<body>
    <div class="cajaderegistro">
        <h1>Registro de Seccion</h1>
        <form action="regristro.php">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="l-usuario" placeholder="Nombre De Usuario">
            <label for="contrasena">Contraseña</label>
            <input type="password" name="contrasena" id="l-contrasena" placeholder="Contraseña">
            <label for="contrasena">Nombre y Apellido</label>
            <input type="text" name="nombreyapellido" id="l-contrasena" placeholder="Primer Nombre y Apellido">
            <input type="submit" value="Crear Cuenta">
            <a href="index.php">Ya Tengo Una Cuenta</a>
        </form>
    </div>
</body>

</html>