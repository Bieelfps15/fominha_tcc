<?php
session_start();
if (!$_SESSION['Lanche']) :
  header("Location: ../../index.php");
  die;
endif;
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Itens Pedidos</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
  <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />


</head>
<style>
  a {
    text-decoration: none;
    color: white;
  }
</style>

<?php
define("LINK1", "../../img");
include '../../conexao.php';
?>


<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
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
  </br>
  
    </br>
    </br>
    </br>
    <div class="container" style="width:90%; background-color: white; border-radius: 20px;">
    <div class="row">
    <br><CENTER><h3><b>PEDIDOS FEITOS</b></h3></CENTER>
    <?php

include '../../conexao.php';

$sth = $pdo->prepare("SELECT * FROM itenspedidos i INNER JOIN produtos p on p.id = i.id_produto");

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
        </tr>
    <?php
    }
    ?>
      </table>
      <div class="col s12">
            <center><a style="border: 1px solid black;background-color: red;" href="../home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
            </a></center></br></br>
        </div>
      <div>
      </div>

      <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

      <script>
        $(document).ready(function() {
          $('#minhaTabela').DataTable({
            "language": {
              "lengthMenu": "Mostrando _MENU_ registros por página",
              "zeroRecords": "Nada encontrado",
              "info": "Mostrando página _PAGE_ de _PAGES_",
              "infoEmpty": "Nenhum registro disponível",
              "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
          });
        });
      </script>

</body>

</html>