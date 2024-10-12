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
        <a href="../../home.php" class="brand-logo">
            <center><img src="../../img/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../../sair.php">Sair</a></li>
    </ul>

    <br><div class="container" style="width:90%; background-color: white; border-radius: 20px;">
        <div class="row">
        <CENTER><h3><b>COMANDAS</b></h3></CENTER>
        <CENTER><h5><b>Pedidos não entregados</b></h5></CENTER>
<?php

include '../../conexao.php';

$sth = $pdo->prepare("SELECT * FROM itenspedidos i INNER JOIN produtos p on p.id = i.id_produto where status = 1 ORDER BY comanda ASC");

$sth->execute();
?>

<table id="minhaTabela" class="striped">
        <thead>
          <tr>
            <th>Comanda</th>
            <th>Mesa</th>
            <th>Produto</th>
            <th>Preço</th>
            <th>Data</th>
            <th>Horário</th>
          </tr>
        </thead>
        <?php
    foreach ($sth as $res) {
        extract($res); ?>
        <tr>
            <td><?= $comanda ?></td>
            <td><?= $mesa ?></td>
            <td><?= $pro_nome ?></td>
            <td><?= $preco ?></td>
            <td><?= $data ?></td>
            <td><?= $hora ?></td>
            <td>
            <a href="pronto.php?id=<?= $id_pedido ?>"><i class="material-icons green-text">check</i></a>
            </td>
            <td>
            <a href="apagar.php?id=<?= $id_pedido ?>"><i class="material-icons red-text">close</i></a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>

<div class="col s12">
            </br><center><a style="border: 1px solid black;background-color: red;" href="../home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center></br>
        </div>
</div>
</div>

<script type="text/javascript" src="../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

<script>
  // 'rounded' is the class I'm applying to the toast
  M.toast({html: 'I am a toast!', classes: 'rounded'});
        
</script>
</html>
