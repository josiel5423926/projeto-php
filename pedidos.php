<?php require("./includes/conexao.php"); ?>
<?php

if (
    isset($_POST['nome_cliente']) && isset($_POST['endereco']) && isset($_POST['telefone']) &&
    isset($_POST['nome_produto']) && isset($_POST['valor_unitario']) && isset($_POST['quantidade']) &&
    isset($_POST['valor_total'])
) {
    $nome_cliente = $_POST['nome_cliente'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $nome_produto = $_POST['nome_produto'];
    $valor_unitario = $_POST['valor_unitario'];
    $quantidade = $_POST['quantidade'];
    $valor_total = $_POST['valor_total'];


    $sql = "insert into tb_pedido (nome_cliente, endereco, telefone, nome_produto, valor_unitario, quantidade,
        valor_total)
         values
         ('$nome_cliente',' $endereco', ' $telefone','$nome_produto', '$valor_unitario', '$quantidade',
        '$valor_total')";


    $result = $conexao->query($sql);
}



?>


<?php include('./menu_rodape/menu.html'); ?>

<main>
    <h1 class="h3 text-center p-3">Faça seu pedido</h1>
    <hr class="mt-0 mb-5">

    <div class="d-flex justify-content-around -center">
        <form class="bg-white p-2 m-1 col-8 col-md-3 float-left" method="POST" action="mostrar_pedidos.php">
            <h1 class="text-center pb-5 text-primary">Pedidos</h1>

            <div class="form-group">
                <label for="formGroupExampleInput " class="text-primary"> <strong>Nome:</strong></label>
                <input type="text" name="nome_cliente" class="form-control" id="formGroupExampleInput" placeholder="Digite seu nome:">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary"> <strong>Endereço:</strong></label>
                <input type="text" name="endereco" class="form-control" id="formGroupExampleInput" placeholder="Digite seu endereço: ">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary"> <strong>Telefone:</strong></label>
                <input type="text" name="telefone" class="form-control" id="formGroupExampleInput" placeholder="Digite seu telefone: ">
            </div>

            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary"> <strong>Descrição:</strong></label>
                <input type="text" name="descricao" class="form-control" id="formGroupExampleInput" placeholder="Digite o nome do produto: ">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary"> <strong>Valor do produto:</strong></label>
                <input type="text" name="valor_unitario" class="form-control" id="formGroupExampleInput" placeholder="valor do produto">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary"> <strong>Quantidade:</strong></label>
                <input type="text" name="quantidade" class="form-control" id="formGroupExampleInput" placeholder="quantidade de item:">
            </div>
            <div class="form-group">
                <label for="formGroupExampleInput" class="text-primary"> <strong>Valor Total:</strong></label>
                <input type="text" name="valor_total" class="form-control" id="formGroupExampleInput" placeholder="valor total:">
            </div>
            <div class="text-center p-3">
                <button type="submit" name="submit" class="btn btn-outline-primary mb-3  px-4 rounded-pill ">Enviar</button>
            </div>

        </form>


    </div>

</main>
<?php include('./menu_rodape/rodape.html'); ?>