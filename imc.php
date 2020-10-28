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
                    <li class="nav-item active">
                        <a class="nav-link" href="imc.php">IMC<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pares.php">Pares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="postobon.php">Postobon</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col-5 mx-auto mt-3">
                    <form action="imc.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Ingrese su peso:</label>
                                    <input type="numer" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su peso" name="valor1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Ingrese su altura:</label>
                                    <input type="numer" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese su altura" name="valor2">
                                </div>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                        <div>
                            <button type="submit" class="btn btn-primary center-block" name="btnCalcularImc">Calcular</button>
                        </div>
                        </div>
                        

                    </form>
                </div>
            </div>
        </div>

        <?php

        $imc = "N/A";
        $clasificacion = "N/A";

        if (isset($_POST["btnCalcularImc"])) {
            $peso = $_POST["valor1"];
            $altura = $_POST["valor2"];
            $imc = $peso / ($altura * $altura);
            if ($imc < 18.5) {
                $clasificacion = "Peso Insuficiente";
            } elseif ($imc >= 18.5 && $imc <= 24.9) {
                $clasificacion = "Normopeso";
            } elseif ($imc >= 25 && $imc < 27) {
                $clasificacion = "Sobrepeso Grado I";
            } elseif ($imc >= 27 && $imc < 30) {
                $clasificacion = "Sobrepeso Grado II";
            } elseif ($imc >= 30 && $imc < 35) {
                $clasificacion = "Obesidad de Tipo I";
            } elseif ($imc >= 35 && $imc < 40) {
                $clasificacion = "Obesidad de Tipo II";
            } elseif ($imc > 50) {
                $clasificacion = "Obesidad de Tipo III (Extrema)";
            }
        }

        ?>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div>
                        <label for="exampleFormControlInput1">IMC:</label>
                        <input type="numer" class="form-control mt-1" id="exampleFormControlInput1" readonly="readonly" name="imc" value="<?php echo ($imc) ?>">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-4">
                    <div>
                        <label for="exampleFormControlInput1">Clasificación:</label>
                        <input type="numer" class="form-control mt-1" id="exampleFormControlInput1" readonly="readonly" name="resultado" value="<?php echo ($clasificacion) ?>">
                    </div>
                </div>

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