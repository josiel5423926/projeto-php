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

    <div class="container-fluid">
        <div class="d-flex justify-content-around">
            <div>
                <img class="py-2 rounded mx-auto d-block img-fluid" width="50px" src="img/email.png" alt="">
                contato@fullStackMotos.com.br
            </div>
            <div>
                <img class="py-2 rounded mx-auto d-block img-fluid" width="50px" src="img/whatsapp.png" alt="">
                (11) 9 5088-6634
            </div>
        </div>


    </div>

    <hr class="mt-0 mb-5 ">
    <form class="bg-white mx-auto p-2 m-1 col-12 col-md-4 text-center container-fluid" method="POST" action="">
        <h1 class="text-center pb-5 text-primary">Fale conosco</h1>

        <div class="form-group text-center">
            <label for="formGroupExampleInput " class="text-primary  "> <strong>Nome:</strong></label>
            <input type="text" name="nome" class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome:">
        </div>
        <div class="form-group shadow-textarea text-center">
            <label for="formGroupExampleInput " class="text-primary  "> <strong>Mensagem:</strong></label>
            <textarea name="msg" class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="Escreva sua mensagem:"></textarea>
        </div>

        <div class="text-center p-3">
            <button type="submit" name="submit" class="btn btn-outline-primary mb-3  px-4 rounded-pill ">Enviar</button>
        </div>
    </form>

    <hr class="p-auto">

    <label>Comentários:</label>
    <div class=" bg-white  col-3 col-md-12 p-3   ">
        <?php
        $sql = "select * from  comentario";
        $result = $conexao->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {

        ?>
                <div class="d-flex flex-column" style="width: 10rem;">
                    <hr class="mt-2 mb-1">
                    <h3 class="h5 text-primary "><?php echo $rows['nome']; ?></h3>
                    <div class="text-secondary"> <?php echo $rows['msg']; ?></div>
                    <div class="text-muted"><?php echo $rows['data']; ?></div>
                    <div class="mt-0 mb-5 bg-light"> <?php echo '<hr>' ?></div>

                </div>

        <?php
            }
        } else {
            echo 'Nenhum comentário !';
        }
        mysqli_close($conexao);
        ?>


    </div>

</main>

<?php include('./menu_rodape/rodape.html'); ?>