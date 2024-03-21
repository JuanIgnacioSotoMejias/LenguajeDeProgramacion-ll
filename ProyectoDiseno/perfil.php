<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <script src="js\jquery-3.7.0.js"></script>
    <script src="js\bootstrap.min.js"></script>
</head>
<header>
    <?php
    include "incluie/nav.php";
    ?>
</header>

<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-md-2 ">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Perfil</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-thumbnail" src="img/usuario.png" alt="foto de perfil">
                                <div class="bor">
                                    <h3>Datos</h3>
                                    <h5>Nombre: Ramon Soto</h5>
                                    <h5>Usuario: MelecioSoto</h5>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label for="usuario" class="col-2">Usuario:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" placeholder="Nuevo Nombre De Usuario" >
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usuario" class="col-2">Contraseña:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" placeholder="Nuevo Contreseña">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usuario" class="col-2">Confirmar Contraseña:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" placeholder="Confirmar Contreseña">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="foto" class="col-2">foto:</label>
                                    <div class="col-8">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Actualizar</button>
                                    <button class="btn btn-danger">CERRAR SESION</button>
                                </div>
                            </div>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php
    include "incluie/footer.php"
    ?>
</footer>

</html>