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
</head>

<body>
    <!--------------------------------------------- Menu -------------------------------------->
    <?php 
    include('menu.html');
    ?>
    <!------------------------------------------- Cabeçalho ----------------------------------->
    <main>
        <header>
            <h2>Produtos</h2>
        </header>
        <!---------------------------------------- Produtos ----------------------------------->
        <section id="area_produtos">
            <section class="categorias">
                <h3>Categorias</h3><br>
                <ul>
                    <li onclick="exibirTodos()">Todos(12)</li>
                    <li onclick="exibirCategoria('geladeira')">Geladeiras (3)</li>
                    <li onclick="exibirCategoria('fogao')">Fogões (2)</li>
                    <li onclick="exibirCategoria('microondas')">Microondas (3)</li>
                    <li onclick="exibirCategoria('lavadora')">Lavadora de roupas (2)</li>
                    <li onclick="exibirCategoria('lavaLoucas')">Lava-louças (2)</li>
                </ul>
            </section>
            <section class="produtos">

                <?php 
                    $sql = "select * from fseletro.produtos";
                    $result = $conn->query($sql);
                
                    if ($result->num_rows > 0) {
                        while($rows = $result->fetch_assoc()){
                ?>

                <div class="card" id="<?php echo $rows["categoria"]; ?>">
                    <img height="120" src="<?php echo $rows["imagem"]; ?>" onclick="destaque(this)">
                    <p><?php echo $rows["descricao"]; ?></p>
                    <p><?php echo $rows["preco"]; ?></p>
                    <p><?php echo $rows["precofinal"]; ?></p>
                </div>

                <?php  
                        }
                    }else {
                        echo "Nenhum produto cadastrado!";
                    }
                ?>

            </section>
        </section>
    </main>
    <!------------------------------------------- Footer -------------------------------------->
    <?php 
    include('rodape.html');
    ?>
    <script src="./Js/script.js"></script>
</body>

</html>