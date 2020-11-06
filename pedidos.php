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

    <div class="d-flex justify-content-around">
        <form class="bg-white mx-auto p-2 m-1 col-12 col-md-4 float-left" method="POST" action="">
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
                <label for="formGroupExampleInput" class="text-primary"> <strong>Produto:</strong></label>
                <input type="text" name="nome_produto" class="form-control" id="formGroupExampleInput" placeholder="Digite o nome do produto: ">
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

        <div class="bg-white   m-1 col-12 col-md-8">

            <h1 class="text-center pb-5 mx3 text-primary">Pedidos realizados</h1>


            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Produto</th>
                        <th scope="col">Valor unitário</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor Total</th>
                        <th scope="col">Data do pedido</th>
                    </tr>

                </thead>

                <tbody>
                    <?php
                    $sql = "select * from tb_pedido";
                    $result = $conexao->query($sql);

                    if ($result->num_rows > 0) {
                        while ($rows = $result->fetch_assoc()) {
                            $nome_cliente =  $rows['nome_cliente'];
                            $endereco  = $rows['endereco'];
                            $telefone =  $rows['telefone'];
                            $nome_produto =  $rows['nome_produto'];
                            $valor_unitario =  $rows['valor_unitario'];
                            $quantidade =  $rows['quantidade'];
                            $valor_total =  $rows['valor_total'];
                            $data =  $rows['data']; ?>
                            <tr>

                                <td><?php echo $nome_cliente ?></td>
                                <td><?php echo $endereco ?></td>
                                <td><?php echo $telefone ?></td>
                                <td><?php echo $nome_produto ?></td>
                                <td><?php echo  $valor_unitario ?></td>
                                <td><?php echo $quantidade ?></td>
                                <td><?php echo $valor_total ?></td>
                                <td><?php echo $data ?></td>

                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>

        </div>

    </div>

</main>
<?php include('./menu_rodape/rodape.html'); ?>