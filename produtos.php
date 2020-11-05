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
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="./CSS/estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!--------------------------------------------- Menu -------------------------------------->
    <?php
    include('menu.html');
    ?>
    <!------------------------------------------- Cabeçalho ----------------------------------->
    <header class="container-fluid pl-4 bg-secondary text-white">
        <div class="container">
            <h2>Produtos</h2>
        </div>
    </header>


    <main class="container">

        <div class="dropdown-show d-flex justify-content-center my-4">
            <a class="btn dropdown-toggle d-flex align-items-center" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <p class="my-auto">Categorias</p>
            </a>

            <div class="dropdown-menu shadow" aria-labelledby="dropdownMenuLink">
                <button class="dropdown-item" type="button" onclick="exibirTodos()">Todos(12)</button>
                <button class="dropdown-item" type="button" onclick="exibirCategoria('geladeira')">Geladeiras(3)</button>
                <button class="dropdown-item" type="button" onclick="exibirCategoria('fogao')">Fogões(2)</button>
                <button class="dropdown-item" type="button" onclick="exibirCategoria('microondas')">Microondas(3)</button>
                <button class="dropdown-item" type="button" onclick="exibirCategoria('lavadora')">Lavadora de Roupas(2)</button>
                <button class="dropdown-item" type="button" onclick="exibirCategoria('lavaLoucas')">Lava Louças(2)</button>
            </div>
        </div>

        <section class="row d-flex justify-content-between py-4">

            <?php
            $sql = "select * from fseletro.produtos";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
            ?>

                    <div class="boxProduto col-lg-3 col-md-4 col-sm-6 col-xs-9 text-center" id="<?php echo $rows["categoria"]; ?>">
                        <img height="120" src="<?php echo $rows["imagem"]; ?>" onclick="destaque(this)">
                        <p class="border-bottom"><?php echo $rows["descricao"]; ?></p>
                        <p><?php echo $rows["preco"]; ?></p>
                        <p class="text-danger"><?php echo $rows["precofinal"]; ?></p>
                    </div>

            <?php
                }
            } else {
                echo "Nenhum produto cadastrado!";
            }
            ?>
        </section>
    </main>
    <!------------------------------------------- Footer -------------------------------------->
    <?php
    include('rodape.html');
    ?>
    <script src="./Js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>