<?php
require('ConexionBaseDeDatos.php');
if (isset($_POST['enviar'])) {
    $NombreCategoriaPasta='';
    $NombreCategoriaPasta = $_POST['CategoriaPasta'];
    $NombreCategoriaPasta=trim($NombreCategoriaPasta);
    $patron = "/^[a-zA-Z\sñáéíóúÁÉÍÓÚ]*$/";
    $Error = array();
    switch ($NombreCategoriaPasta) {
        
        case $NombreCategoriaPasta==empty($NombreCategoriaPasta):
            array_push($Error,'ERROR: COMPLETE EL FORMULARIO');
            break;
        
        case strlen($NombreCategoriaPasta) < 4 || strlen($NombreCategoriaPasta) > 20;
            array_push($Error, 'ERROR: LONGITUD DE CARECTERES');
            break;    

        case !preg_match($patron,$NombreCategoriaPasta):
            array_push($Error,'ERROR: INGRESE VALORES PERMITIDOS ');
            break;
        
    }
    if (count($Error) == 0) {
        $consulta ="INSERT INTO registrodepastas(Nombrecategoriapasta) VALUES ('$NombreCategoriaPasta')";
        $resultado = mysqli_query ($conexion,$consulta);
        if ($resultado) {
            echo '<h1>registro Exitoso</h1>';
        }
    } else {
        print($Error[0]);
    }
}
