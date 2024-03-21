<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
            <div class="tituloRegistro">Gasto De Viajes</div>
            <form action="#">
                <div class="regristrodeviaje">
                    <div class="input-caja">
                        <span class="stilosinputs">Destino Del Viaje</span>
                        <input type="text" name="destino" placeholder="Destino Del Viaje" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Fecha del viaje</span>
                        <input type="date" name="fechadelviaje" placeholder="DD/MM/AA" minlength="10" maxlength="10" required>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Monto</span>
                        <input type="text" name="monto" placeholder="Monto Del Gasto" required>
                        <div class="tituloconvertidor">Total en Dolares $</div>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Convertidor</span>
                        <input type="text" name="monto" placeholder="BOLIVARES A DOLARES" required>
                        <div class="tituloconvertidor">Tasa Del Dolar</div>
                        <div class="tituloconvertidor">BCV = 36.23bs</div>
                    </div>
                    <div class="input-caja">
                        <span class="stilosinputs">Nota</span>
                        <input type="text" name="nota" placeholder="Nota" required>
                    </div>
                    <div class="input-caja">
                        <button type="button" class="botonregistroviaje btn btn-primary" >Factura Imagen</button>
                        <button type="button" class="botonregistroviaje btn btn-primary" >Factura Manual</button>
                    </div>
                </div>
                <div class="radios-detalles">
                    <span class="radiotitulo">Tipo de Gasto</span>
                    <input type="radio" name="tipodegasto" id="r1">
                    <input type="radio" name="tipodegasto" id="r2">
                    <input type="radio" name="tipodegasto" id="r3">
                    <input type="radio" name="tipodegasto" id="r4">
                    <input type="radio" name="tipodegasto" id="r5">
                    <div class="categorias">
                        <label for="r1">
                            <span class="tipo uno"></span>
                            <span class="gasto">Combustible</span>
                        </label>
                        <label for="r2">
                            <span class="tipo dos"></span>
                            <span class="gasto">Comida</span>
                        </label>
                        <label for="r3">
                            <span class="tipo tres"></span>
                            <span class="gasto">Peajes</span>
                        </label>
                        <label for="r4">
                            <span class="tipo cuatro"></span>
                            <span class="gasto">Hospedaje</span>
                        </label>
                        <label for="r5">
                            <span class="tipo cinco"></span>
                            <span class="gasto">Otros</span>
                        </label>
                    </div>
                </div>
                <div class="botonregistroviaje">
                    <input type="button" value="Registrar Gasto">
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