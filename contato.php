<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

// Criando a conexão
$conn = mysqli_connect($servername, $username, $password, $database);

// Verificando a conexão
if (!$conn) {
    die("A conexão ao Banco de Dados falhou: " . mysqli_connect_error());
}

if (isset($_POST['nome']) && isset($_POST['msg'])) {
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into fseletro.comentarios (nome, msg) values ('$nome', '$msg')";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>
    <!------------------------------------------- Menu -------------------------------------->
    <?php
    include('menu.html');
    ?>
    <!----------------------------------------- Cabeçalho ----------------------------------->
    <main>
        <header class="container-fluid pl-4 bg-secondary text-white">
            <div class="container">
                <h2>Contato</h2>
            </div>
        </header>
        <!------------------------------------- contatos ------------------------------------>
        <section>
            <div class="container my-3 p-3 bg-light rounded shadow-lg">
                <section class="container">
                    <div class="row">
                        <div class="col-6" id="contato">
                            <div class="text-center">
                                <img class="my-2" src="./img/email.png" height="25px">
                                <p>contato@fullstackeletro.com</p>
                            </div>
                        </div>
                        <div class="col-6" id="contato">
                            <div class="text-center">
                                <img src="./img/whatsapp.png" height="40px">
                                <p class="">(11) 9999-9999</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!------------------------------ formulário contato ----------------------------->
            <form class="container my-3 p-3 bg-light rounded shadow-lg" action="" method="post">
                <div class="form-group">
                    <fieldset class="form-fieldset">
                        <br>
                        <legend class="legend"> Formulário para contato </legend>
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" name="nome"><br>
                        <label for="msg">Mensagem:</label>
                        <textarea name="msg" class="form-control" id="msg" cols="50" rows="2"></textarea><br>
                        <input type="submit" name="submit" class="btn btn-primary" value="Enviar" class="submit"><br>
                    </fieldset>
                </div>
            </form>

            <!------------------------------ Mensagens ----------------------------->
            <div class="container my-3 p-3 bg-light rounded shadow-lg">
                <h6 class="border-bottom border-gray pb-2 mb-0">Mensagens</h6>

                <?php
                $sql = "select * from fseletro.comentarios order by data desc";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {
                ?>
                        <div class="media text-muted pt-3">
                            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                                <title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
                            </svg>
                            <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                <div class="d-flex justify-content-between align-items-center w-100">
                                    <strong class="text-gray-dark"><?php echo $rows["nome"]; ?></strong>
                                    <p><?php echo $rows["data"]; ?></p>
                                </div>
                                <p class="d-block"><?php echo $rows["msg"]; ?></p>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo "Nenhum comentário ainda!";
                }
                ?>
            </div>

        </section>
    </main>

    <!-------------------------------------------- footer ----------------------------------->
    <?php
    include('rodape.html');
    ?>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>


    <script src="./Js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>