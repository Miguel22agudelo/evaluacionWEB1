<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>evaluacionWEB1</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">evaluacionWEB1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Operar Enteros </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="imc.php">IMC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pares.php">Pares</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="postobon.php">Postobon<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row mx-auto justify-content-center mt-3">
                <div class="col-4">
                    <form action="postobon.php" method="POST">

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Horas trabajadas</label>
                            <input type="numer" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese horas trabajadas" name="horasTrabajadas">
                        </div>

                        <div class="row justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary center-block" name="btnCalcularSalario">Calcular</button>
                            </div>
                        </div>

                    </form>

                    <?php

                    if (isset($_POST["btnCalcularSalario"])) : ?>

                        <?php
                        $horasTrabajadas = $_POST["horasTrabajadas"];

                        if ($horasTrabajadas <= 40) {
                            $sueldoSemana = $horasTrabajadas * 20000;
                        } elseif ($horasTrabajadas > 40) {
                            $horasExtras = $horasTrabajadas - 40;
                            $horasTrabajadas = $horasTrabajadas - $horasExtras;
                            $precioSinExtras = $horasTrabajadas * 20000;
                            $precioExtras = $horasExtras * 25000;
                            $sueldoSemana = $precioExtras + $precioSinExtras;
                        }
                        ?>

                        <div class="card text-center">
                            <div class="card-header">
                                Postobón
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Resultado de Sueldo Semanal:</h5>
                                <p class="card-text">Sueldo Semana = $<?php echo ($sueldoSemana) ?> por concepto de:</p>
                                <p>Horas trabajadas = <?php echo ($horasTrabajadas) ?></p>
                                <p>Horas extras = <?php echo ($horasExtras) ?></p>
                                <p>Sueldo por concepto de horas extras = $<?php echo ($precioExtras)?></p>
                                <p>Sueldo por concepto de horas planas = $<?php echo($precioSinExtras)?></p>
                                <a href="postobon.php" class="btn btn-primary">Volver a Calcular</a>
                            </div>

                        </div>


                    <?php endif ?>



                </div>
            </div>
        </div>
    </main>



    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>