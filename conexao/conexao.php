<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackmotos";

    $conexao = mysqli_connect($servername, $username, $password, $database);

    if (!$conexao) {
        die("Falhou a conexão" . mysqli_connect_error());
    }
    //fim da conexão

    $sql = "select nome, descricao, preco, preco_final, imagem from produto";
    $result  = $conexao->query($sql);

    while ($consulta = $result->fetch_assoc()) {
        echo "<p> A " . $consulta['nome'] . $consulta['descricao'] . " tinha o preço de: "
            . $consulta['preco'] . " agora está na promoção por :"
            . $consulta['preco_final'] . "<br>" . $consulta['imagem'] . "</p> <hr>";
    }
    //fim da consulta

    ?>

</body>

</html>