<?php require("./includes/conexao.php"); ?>

<?php include('./menu_rodape/menu.html'); ?>

<main>
    <h1 class="h3 text-center p-3">Pedidos realizados</h1>
    <hr class="mt-0 mb-5">



    <div class="bg-white   m-1 col-12 col-md-8 text-center justify-content-around -center">

        <table class="table ">
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