<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Practicas</h1>
    </div>
    <div>
        <legend>
            <fieldset>
                <form action="index.php" method="post">
                    <label> Tipo De Pasta </label>
                    <input type="text" name="CategoriaPasta" id="CategoriaPasta"> <br>
                    <button name="enviar">Enviar</button>
                </form>
    <?php
    require('validaciones.php');
    ?>
    </fieldset>
    </legend>
    </div>
</body>

</html>