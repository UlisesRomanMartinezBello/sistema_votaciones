<!doctype html>
<html lang="es">

<head>
    <title>Sistema de Votaciones de la Universidad</title>
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
                        <h1>Sistema de Votaciones</h1>
                        <h4>Escoge a tu candidato</h4>
                    </div>
                    <div class="card-body">
                        <form action="registrar_voto.php" method="POST">

                            <ul class="list-group pb-4">

                                <label class="list-group-item">
                                    <input type="radio" name="candidato" value="1"> Candidato 1 - Datos del Candidato
                                </label>

                                <label class="list-group-item">
                                    <input type="radio" name="candidato" value="2"> Candidato 2 - Datos del Candidato
                                </label>

                                <label class="list-group-item">
                                    <input type="radio" name="candidato" value="3"> Candidato 3 - Datos del Candidato
                                </label>

                                <label class="list-group-item">
                                    <input type="radio" name="candidato" value="4"> Candidato 4 - Datos del Candidato
                                </label>

                                <label class="list-group-item">
                                    <input type="radio" name="candidato" value="5"> Candidato 5 - Datos del Candidato
                                </label>
                            </ul>

                            <button type="submit" class="btn btn-block btn-lg" onclick="return validacion()"><i class="fas fa-share-square"></i>
                                Registrar Votación</button>
                            <a href="resultados.php" class="btn btn-block btn-lg"><i class="fas fa-chart-bar"></i> Resultados de las Votaciones</a>                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://kit.fontawesome.com/ec3460a788.js"></script>
    <script src="js/app.js"></script>
</body>

</html>