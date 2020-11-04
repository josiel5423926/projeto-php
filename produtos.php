<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstackmotos";

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falhou a conexão" . mysqli_connect_error());
}

?>

<!-- fim da conexão-->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/funcoes.js"></script>


    <title>Produtos</title>

</head>

<body>

    <!--início do Menu-->
    <?php
    include('./menu_rodape/menu.html');
    ?>

    <!--fim do Menu-->
    <!--título da págna início-->
    <main>

        <div class="main_titulo">
            <div>
                <div>
                    <h2 style="color:rgb(5, 55, 55); ">Motos</h2>
                    <h2 style="color:rgb(5, 55, 55); ">seu pedido</h2>
                </div>
            </div>
        </div>
        <hr>
        <div class="corpo">
            <div class="categorias">
                <!--catálogo-->
                <h3>Categorias</h3>
                <ul>

                    <li onclick="exibir_categoria('todos')">Todos (12)</li>
                    <li onclick="exibir_categoria('honda')">Honda (3)</li>
                    <li onclick="exibir_categoria('Yamaha')">yamaha (3)</li>
                    <li onclick="exibir_categoria('Ducati')">Ducati (2)</li>
                    <li onclick="exibir_categoria('Harley Davidson')">Harley Davidson (2)</li>
                    <li onclick="exibir_categoria('Kawasaki')">Kawasaki (2)</li>
                </ul>
            </div>

            <div class="container_produtos">
                <?php
                $sql = "select * from produto";
                $result = $conexao->query($sql);

                if ($result->num_rows > 0) {
                    while ($rows = $result->fetch_assoc()) {

                ?>
                        <div class="container_intens" id="<?php echo $rows['nome']; ?>" style="display: block;">
                            <img src="<?php echo $rows['imagem']; ?>" onclick="destaque(this)" onmousemove="exibirborda(this)" onmouseout="retirarborda(this)">
                            <h3><?php echo $rows['descricao']; ?></h3>
                            <hr>
                            <del>R$ <?php echo $rows['preco']; ?></del>
                            <br>
                            <strong style="color:red"><big>R$ <?php echo $rows['preco_final']; ?></big></strong>
                        </div>

                <?php
                    }
                } else {
                    echo "Nenhum produto cadastrado !";
                } ?>

            </div>

        </div>

    </main>
    <br>
    <br>

    <!--rodapé-->

    <?php
    include('./menu_rodape/rodape.html');
    ?>

</body>

</html>

<?php
mysqli_close($conexao);
?>