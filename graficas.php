<?php

  include 'conexion.php';

  $conexion = conexion();

  /* Obtener el numero de votos del candidato numero 1 */
  $candidatoUno = "SELECT candidato FROM candidatos WHERE candidato = 1";
  $resultadoCandidatoUno = mysqli_query($conexion, $candidatoUno);
  $votosCandidatoUno = mysqli_num_rows($resultadoCandidatoUno);

  /* Obtener el numero de votos del candidato numero 2 */
  $candidatoDos = "SELECT candidato FROM candidatos WHERE candidato = 2";
  $resultadoCandidatoDos = mysqli_query($conexion, $candidatoDos);
  $votosCandidatoDos = mysqli_num_rows($resultadoCandidatoDos);

  /* Obtener el numero de votos del candidato numero 3 */
  $candidatoTres = "SELECT candidato FROM candidatos WHERE candidato = 3";
  $resultadoCandidatoTres = mysqli_query($conexion, $candidatoTres);
  $votosCandidatoTres = mysqli_num_rows($resultadoCandidatoTres);

  /* Obtener el numero de votos del candidato numero 4 */
  $candidatoCuatro = "SELECT candidato FROM candidatos WHERE candidato = 4";
  $resultadoCandidatoCuatro = mysqli_query($conexion, $candidatoCuatro);
  $votosCandidatoCuatro = mysqli_num_rows($resultadoCandidatoCuatro);

  /* Obtener el numero de votos del candidato numero 5 */
  $candidatoCinco = "SELECT candidato FROM candidatos WHERE candidato = 5";
  $resultadoCandidatoCinco = mysqli_query($conexion, $candidatoCinco);
  $votosCandidatoCinco = mysqli_num_rows($resultadoCandidatoCinco);
  
  /* Almacenar en un arreglo los resultados de los candidatos */
  $valoresY = array($votosCandidatoUno, $votosCandidatoDos, $votosCandidatoTres, $votosCandidatoCuatro, $votosCandidatoCinco);

  /* Almacenar en un arreglo los nombres de los candidatos */
  $valoresX = array('Candidato 1', 'Candidato 2', 'Candidato 3', 'Candidato 4', 'Candidato 5');

  /* Convertir los arreglos a JSON */
  $datosY = json_encode($valoresY);
  $datosX = json_encode($valoresX);

?>

<div id="graficas"></div>

<script type="text/javascript">

/* Script encargado de parsear un JSON */

function crearCadena(json) {
    let parsed = JSON.parse(json);
    let arr = [];
    for (let x in parsed) {
        arr.push(parsed[x]);
    }
    return arr;
}

/* Uso de Plotly.JS*/

datosX = crearCadena('<?php echo $datosX; ?>');
datosY = crearCadena('<?php echo $datosY; ?>')

var data = [
    {
        x: datosX,
        y: datosY,
        type: 'bar',
        marker: {
            color: 'rgb(26, 177, 136)'
        }
    }
];

Plotly.newPlot('graficas', data);

</script>