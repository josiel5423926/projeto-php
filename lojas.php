<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/funcoes.js"></script>
    <title>lojas</title>


</head>

<body>
    <!--início do Menu-->
    <?php
    include('./menu_rodape/menu.html');
    ?>


    <!--fim do Menu-->
    <main>
        <!--título da págna início-->
        <div class="main_titulo">
            <h2>Nossas lojas</h2>
        </div>
        <hr>
        <!--título da págna fim-->
        <table class="tb_lojas">
            <tr>
                <td>
                    <h2>Rio de Janeiro</h2>
                    <p>Avenida Presidente Vargas, 5000</p>
                    <p>10&deg; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </td>
                <td>
                    <h2>São Paulo</h2>
                    <p>Avenida Paulista, 987</p>
                    <p>3&deg; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </td>
                <td>
                    <h2>Santa Catarina</h2>
                    <p>Rua Major Ávila,370</p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
                </td>
            </tr>
        </table>
    </main>
    <hr>
    <br>
    <br>
    <br>
    <!--rodapé-->
    <?php
    include('./menu_rodape/rodape.html');
    ?>

</body>

</html>