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
            <a class="navbar-brand" href="#">evaluacionWEB1</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Operar Enteros <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="imc.php">IMC</a>
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
                    <form action="index.php" method="POST">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Valor 1</label>
                                    <input type="numer" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un entero" name="valor1">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Valor 2</label>
                                    <input type="numer" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese un entero" name="valor2">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Elija una operación:</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="operacion">
                                <option>Suma</option>
                                <option>Resta</option>
                                <option>Multiplicación</option>
                                <option>División</option>
                            </select>
                        </div>
                        <div class="col">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary center-block" name="btnCalcular">Calcular</button>


                    </form>
                </div>
            </div>
        </div>

        <?php



        if (isset($_POST["btnCalcular"])) : ?>

            <?php
            $valor1 = $_POST["valor1"];
            $valor2 = $_POST["valor2"];
            $operacion = $_POST["operacion"];

            if ($operacion == "Suma") {
                $resultado = $valor1 + $valor2;
                $operador = "+";
            } elseif ($operacion == "Resta") {
                $resultado = $valor1 - $valor2;
                $operador = "-";
            } elseif ($operacion == "Multiplicación") {
                $resultado = $valor2 * $valor1;
                $operador = "x";
            } else {
                $resultado = $valor1 / $valor2;
                $operador = "/";
            }

            ?>

            <div class="container">
                <div class="row">
                    <div class="col-5">
                    </div>
                    <div>
                        <label for="exampleFormControlInput1">Resultado:</label>
                        <input type="numer" class="form-control mt-2" id="exampleFormControlInput1" readonly="readonly" name="resultado" value="<?php echo ($valor1 . " " . $operador . " " . $valor2 . " = " . $resultado) ?>">
                    </div>
                </div>
            </div>
            </div>

        <?php endif ?>

    </main>


    <footer>

    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>