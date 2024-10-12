<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../index.php");
    die;
endif;


define("LINK1", "../img");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garçom</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />
</head>

<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../<?= LINK0 ?>/home.php" class="brand-logo">
            <center><img src="../<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../<?= LINK0 ?>/home.php">Voltar </a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../<?= LINK0 ?>/home.php">Voltar </a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>
    </br>

    <br>
    <div class="container" style="width:90%; background-color: white; border-radius: 20px;">
        <div class="row">
            <br>
            <CENTER>
                <h5><b>Pedidos não entregado na cozinha</b></h5>
            </CENTER>
            <?php

            include '../../conexao.php';

            $sth = $pdo->prepare("SELECT * FROM itenspedidos i INNER JOIN produtos p on p.id = i.id_produto where (cozinha = 1 AND categoria = 1) ORDER BY comanda ASC ");

            $sth->execute();
            ?>

            <div id="sua_div">
                <table id="minhaTabela" class="striped">
                    <thead>
                        <tr>
                            <th>Comanda</th>
                            <th>Mesa</th>
                            <th>Produto</th>
                            <th>Horário</th>
                        </tr>
                    </thead>
                    <?php
                    foreach ($sth as $res) {
                        extract($res); ?>
                        <tr>
                            <td>
                                <H6><?= $comanda ?></H6>
                            </td>
                            <td>
                                <H6><?= $mesa ?></H6>
                            </td>
                            <td>
                                <H4><?= $pro_nome ?></H4>
                            </td>
                            <td>
                                <H6><?= $hora ?></H6>
                            </td>

                            <td>
                                <a href="pronto.php?id=<?= $id_pedido ?>"><i class="material-icons green-text">check</i></a>
                            </td>
                        </tr>

                    <?php
                    }
                    ?>
                </table>
            </div>
            <button id="btn">Clique para imprimir</button>
            <div class="col s12">
                </br>
                <center><a style="border: 1px solid black;background-color: red;" href="../index.php" class="waves-effect waves-light btn botaoVoltar">
                        Voltar
                    </a></center></br>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('btn').onclick = function() {
            var conteudo = document.getElementById('sua_div').innerHTML,
                tela_impressao = window.open('about:blank');

            tela_impressao.document.write(conteudo);
            tela_impressao.window.print();
            tela_impressao.window.close();
        };
    </script>

    <script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

    <script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

</html>