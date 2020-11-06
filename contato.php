<?php require("./includes/conexao.php"); ?>
<?php

if (isset($_POST['nome']) && isset($_POST['msg'])) {
    $nome = $_POST['nome'];
    $msg = $_POST['msg'];

    $sql = "insert into comentario (nome,msg) values ('$nome','$msg')";
    $result = $conexao->query($sql);
}

?>


<?php include('./menu_rodape/menu.html'); ?>

<main class="container">
    <h1 class="h3 text-center p-3">Entre em contato</h1>
    <hr class="mt-0 mb-5">

    <div class="contatos_imagem">
        <table style="width:100%;text-align:center">
            <tr>
                <td>
                    <img style="width:60px" src="img/email.png" alt="">
                    contato@fullStackMotos.com.br
                </td>

                <td>
                    <img style="width:60px" src="img/whatsapp.png" alt="">
                    (11) 9 5088-6634
                </td>
            </tr>
        </table>

    </div>

    <hr>




    <form method="POST" action="" target="_self" style="color:rgb(5, 55, 55); width: 50%;">
        <label>Nome:</label>
        <input type=" text" name="nome" placeholder="Digite seu nome: "></input> <br> <br>

        <label>Mensagem:</label><br> <br>
        <textarea name="msg" rows="10" cols="30" placeholder="Digite sua mensagem: "></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="Enviar">
    </form>
    <br> <br>
    <label>Comentários:</label>
    <br> <br>
    <div style="color:rgb(5, 55, 55); width: 30%; border: solid; padding: 10px;">

        <?php
        $sql = "select * from comentario";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";
                echo "Data: ", $rows['data'], "<br>";
                echo "<hr>";
            }
        } else {
            echo "Nenhum comentário !";
        } ?>

    </div>



</main>
<?php include('./menu_rodape/rodape.html'); ?>
<?php
mysqli_close($conexao);
?>