<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossas lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!------------------------------------------ Menu ---------------------------------------->
    <?php
    include('menu.html');
    ?>
    <!--------------------------------------- Cabeçalho -------------------------------------->
    <main>
        <header class="container-fluid pl-4 bg-secondary text-white">
            <div class="container">
                <h2>Nossas lojas</h2>
            </div>
        </header>
        <!-------------------------------- Endereço das Lojas -------------------------------->
        <section class="container">

            <div class="d-flex align-items-end flex-column">
                <div class="container p-2">
                    <div class="row my-5 flex-column flex-sm-row ">
                        <div class="col text-center my-4">
                            <h3>Rio de Janeiro</h3>
                            <p>Avenida Presidete Vargas, 5000</p>
                            <p>10 &ordm; andar</p>
                            <p>Centro</p>
                            <p>(21) 3333-3333</p>
                        </div>
                        <div class="col text-center my-4">
                            <h3>São Paulo</h3>
                            <p>Avenida Paulista, 985</p>
                            <p>3 &ordm; andar</p>
                            <p>Jardins</p>
                            <p>(11) 4444-4444</p>
                        </div>
                        <div class="col text-center my-4">
                            <h3>Santa Catarina</h3>
                            <p>Rua Major &Aacute;vila, 370</p>
                            <p>Vila Mariana</p>
                            <p>(47) 5555-5555</p>
                        </div>
                    </div>
                </div>

                <div class="container mt-auto p-2">
                    <!------------------------------------------- Footer ------------------------------------->
                    <?php include('rodape.html'); ?>

                </div>
            </div>
        </section>
    </main>


    <script src="./Js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>