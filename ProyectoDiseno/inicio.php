<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<header>
    <?php
    include "incluie/nav.php";
    ?>
</header>

<body>
    <div class="back">
        <div class="contenedor2">
            <section class="flex-container-inicio">
                <div class="flex-inico">
                    <h3>Registro</h3>
                    <a href="registroViaje.php"><img class="mediana" src="img/embalaje.png" alt=""></a>
                </div>
                <div class="flex-inico">
                    <h3>Gastos</h3>
                    <a href="gastos.php"><img class="mediana" src="img/entrega.png" alt=""></a>
                </div>
                <div class="flex-inico">
                    <h3>Perfil</h3>
                    <a href="perfil.php"><img class="mediana2" src="img/usuario.png" alt=""></a>
                </div>
            </section>
        </div>
    </div>
</body>
<footer>
    <?php
    include "incluie/footer.php"
    ?>
</footer>

</html>s