<?php
/* Conexion a la base de datos */
function conexion() {
    $conexion = new mysqli("localhost", "root", "", "votaciones");
    if ($conexion->connect_errno) {
        echo 'Ocurrio un error al conectar a la base de datos' . $conexion->connect_error;
    }        
    $conexion -> set_charset("utf-8");
    return $conexion;
}

?>
