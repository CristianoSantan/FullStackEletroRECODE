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

    if(isset($_POST['nome']) && isset($_POST['msg'])){
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
</head>

<body>
    <!------------------------------------------- Menu -------------------------------------->
    <?php 
    include('menu.html');
    ?>
    <!----------------------------------------- Cabeçalho ----------------------------------->
    <main>
        <header>
            <h2>Contato</h2>
        </header>
        <!------------------------------------- contatos ------------------------------------>
        <section>
            <section id="contatos">
                <div id="contato">
                    <img src="./img/email.png" width="40px">
                    <p>contato@fullstackeletro.com</p>
                </div>
                <div id="contato">
                    <img src="./img/whatsapp.png" width="60px">
                    <p>(11) 9999-9999</p>
                </div>
            </section>
            <!------------------------------ formulário contato ----------------------------->
            <form action="" method="post" id="form_contato">
                <fieldset>
                    <br>
                    <legend> Formulário para contato </legend>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" style="width: 400px;"><br><br>
                    <label for="msg">Mensagem:</label>
                    <textarea name="msg" id="msg" cols="50" rows="2"></textarea><br>
                    <input type="submit" name="submit" value="Enviar" class="submit"><br><br>
                </fieldset>
            </form>

            <?php 
                $sql = "select * from fseletro.comentarios";
                $result = $conn->query($sql);
            
                if ($result->num_rows > 0) {
                    while($rows = $result->fetch_assoc()){
            ?>

            <div class="msgm">
                <p>Data: <?php echo $rows["data"]; ?></p>  
                <p>Nome: <?php echo $rows["nome"]; ?></p>   
                <p>Mensagem: <?php echo $rows["msg"]; ?></p>    
                <hr>
            </div>  

            <?php  
                    }
                }else {
                    echo "Nenhum comentário ainda!";
                }
            ?>
            
        </section>
    </main>
    <!-------------------------------------------- footer ----------------------------------->
    <?php 
    include('rodape.html');
    ?>
    <script src="./Js/script.js"></script>
</body>

</html>