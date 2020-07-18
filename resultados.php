<?php include 'conexion.php';

$conexion = conexion();

?>

<!doctype html>
<html lang="es">

<head>
    <title>Resultados de las votaciones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Resultados de las votaciones</h1>
                    </div>

                    <div class="card-body">
                        <div id="graficas">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.plot.ly/plotly-1.2.0.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#graficas').load('graficas.php');
        });
    </script>

</body>

</html>