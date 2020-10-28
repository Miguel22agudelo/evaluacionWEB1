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
                    <li class="nav-item active">
                        <a class="nav-link" href="pares.php">Pares<span class="sr-only">(current)</span></a>
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
            <div class="row mx-auto justify-content-center mt-3">
                <div class="col-4">
                    <form action="pares.php" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cantidad Pares</label>
                            <input type="numer" class="form-control" id="exampleFormControlInput1" placeholder="Ingrese pares a calcular" name="cantidadPares">
                        </div>

                        <div class="row justify-content-center">
                            <div>
                                <button type="submit" class="btn btn-primary center-block" name="btnCalcularPares">Calcular</button>
                            </div>
                        </div>
                    </form>

                    <?php if (isset($_POST["btnCalcularPares"])) : ?>


                        <?php
                        $cantidadPares = $_POST["cantidadPares"];
                        $contador = 0;
                        $arregloPares = array();

                        for ($i = 0; $i < $cantidadPares; $i++) : ?>

                            <?php
                            $arregloPares[$i] = $contador;
                            $contador = $contador + 2;
                            ?>
                            <div class="card">
                                <div class="card-body">
                                    <?php echo ($arregloPares[$i])?>
                                </div>
                            </div>

                        <?php endfor ?>



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