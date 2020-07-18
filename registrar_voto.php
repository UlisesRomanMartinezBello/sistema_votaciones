<?php 
    include 'conexion.php';

    $conexion = conexion();

    $candidato = $_POST["candidato"];

    $registrarVoto = "INSERT INTO candidatos(candidato) VALUES ('$candidato')";

    $resultadoVoto = $conexion -> query($registrarVoto);

    header('Location: index.php');

?>