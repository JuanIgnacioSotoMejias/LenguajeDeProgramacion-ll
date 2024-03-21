<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura Manual</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
</head>
<header>
    <?php
    include "incluie/nav.php";
    ?>
</header>

<body>
    <div class="flex-container-registro">
        <div class="contenedor">
            <div class="tituloRegistro">DEUDA</div>
            <form action="#">
                <div class="regristrodeviaje">
                    <div class="input-caja">
                        <span class="stilosinputs">MONTOS</span>
                        <input type="text" name="destino" placeholder="Lugar De La Compra" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">DANIELA</span>
                        <input type="date" name="fechadelcompra" placeholder="DD/MM/AA" minlength="10" maxlength="10" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Producto</span>
                        <input type="text" name="monto" placeholder="Producto Comprado" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Monto</span>
                        <input type="text" name="monto" placeholder="Monto Gastado" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Nota</span>
                        <input type="text" name="nota" placeholder="Nota" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Impuesto</span>
                        <input type="text" name="nota" placeholder="Impuesto" required>
                    </div>
                </div>
                <div class="radios-detalles">
                    <div class="categorias">
                        
                    </div>
                </div>
                <div class="botonregistroviaje">
                    <input type="button" value="Registrar Factura">
                </div>
            </form>

        </div>
    </div>
</body>
<footer>
    <?php
    include "incluie/footer.php"
    ?>
</footer>

</html>