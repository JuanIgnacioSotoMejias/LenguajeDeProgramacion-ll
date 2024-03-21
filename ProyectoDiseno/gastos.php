<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gasto</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <!-- Links -->
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\dataTables.bootstrap5.min.css">
</head>
<header>
    <?php
    include "incluie/nav.php";
    ?>
</header>

<body>
    <div class="container my-4">
        <br>
        <br>
        <div style="margin-bottom: 10px ;">
            <input type="date" placeholder="Fecha DD/MM/AA" minlength="8" maxlength="8" >
            <input type="text" placeholder="Destino">
            <button type="button" class="botonregistroviaje btn btn-primary">Buscar</button>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr class="centrotable">
                            <th class="centrotable">Destino</th>
                            <th class="centrotable">Fecha</th>
                            <th class="centrotable">Monto</th>
                            <th class="centrotable">Nota</th>
                            <th class="centrotable">Foto Factura</th>
                            <th class="centrotable">Tipo De gasto</th>
                            <th class="centrotable">Eliminar</th>
                            <th class="centrotable">Descargas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Valencia</td>
                            <td>14/11/2023</td>
                            <td>5$</td>
                            <td>Pago en Peaje de Dos Camino</td>
                            <td class="centrotable"><img class="imgtable" src="img/ojo.png" alt="eliminar"></td>
                            <td>Peajes</td>
                            <td class="centrotable"><img class="imgtable" src="img/basura.png" alt="eliminar"></td>
                            <td class="centrotable"><img class="imgtable" src="img/descargas.png" alt="eliminar"></td>
                        </tr>
                        <tr>
                            <td>Guachara</td>
                            <td>18/11/2023</td>
                            <td>14$</td>
                            <td>Pago en Gasolinera de Dos Camino</td>
                            <td class="centrotable"><img class="imgtable" src="img/ojo.png" alt="eliminar"></td>
                            <td>Combustible</td>
                            <td class="centrotable"><img class="imgtable" src="img/basura.png" alt="eliminar"></td>
                            <td class="centrotable"><img class="imgtable" src="img/descargas.png" alt="eliminar"></td>
                        </tr>
                        <tr>
                            <td>Gusdualito</td>
                            <td>18/11/2023</td>
                            <td>5$</td>
                            <td>Pago Por Estacionamiento</td>
                            <td class="centrotable"><img class="imgtable" src="img/ojo.png" alt="eliminar"></td>
                            <td>Otro</td>
                            <td class="centrotable"><img class="imgtable" src="img/basura.png" alt="eliminar"></td>
                            <td class="centrotable"><img class="imgtable" src="img/descargas.png" alt="eliminar"></td>
                        </tr>
                        <tr>
                            <td>El Saman</td>
                            <td>16/11/2023</td>
                            <td>25$</td>
                            <td>Almuerzo para los Obreros</td>
                            <td class="centrotable"><img class="imgtable" src="img/ojo.png" alt="eliminar"></td>
                            <td>Comida</td>
                            <td class="centrotable"><img class="imgtable" src="img/basura.png" alt="eliminar"></td>
                            <td class="centrotable"><img class="imgtable" src="img/descargas.png" alt="eliminar"></td>
                        </tr>
                        <tr>
                            <td>Valencia</td>
                            <td>14/11/2023</td>
                            <td>150$</td>
                            <td>Pago en Gasoi a un tercero</td>
                            <td class="centrotable"><img class="imgtable" src="img/ojo.png" alt="eliminar"></td>
                            <td>Combustible</td>
                            <td class="centrotable"><img class="imgtable" src="img/basura.png" alt="eliminar"></td>
                            <td class="centrotable"><img class="imgtable" src="img/descargas.png" alt="eliminar"></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th class="centrotable">Destino</th>
                            <th class="centrotable">Fecha</th>
                            <th class="centrotable">Monto</th>
                            <th class="centrotable">Nota</th>
                            <th class="centrotable">Factura</th>
                            <th class="centrotable">Tipo De gasto</th>
                            <th class="centrotable">Eliminar</th>
                            <th class="centrotable">Descargas</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <button type="button" class="botonregistroviaje btn btn-primary">Imprimir Reporte</button>
        <label class="mar">Fecha Iniciar
            <input class="mar" type="date" name="fechadeliniciar" placeholder="DD/MM/AA" minlength="8" maxlength="8">
        </label>
        <label class="mar">Fecha Final
            <input class="mar" type="date" name="fechadelfinal" placeholder="DD/MM/AA" minlength="8" maxlength="8">
        </label>

    </div>
    <!-- Scripts -->

</body>
<footer>
    <?php
    include "incluie/footer.php"
    ?>
</footer>

</html>