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
    <title>Caixa</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../img/iconFominha.png" />



    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">

    <style>
    
    </style>

</head>


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
            <li><a href="../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../sair.php">Sair</a></li>
    </ul>
  </br>
  
    </br>
    </br>
    </br>
    <div class="container" style="width:90%; background-color: white; border-radius: 20px;">
    <div class="row">
<?php
include '../conexao.php';
$pesquisar = $_POST['pesquisar'];
  if ($pesquisar == null) {
    echo "<h2>Digite algo para realizar a pesquisa</h2>";
  }
  else {
    $sth = $pdo->prepare ("SELECT * FROM itenspedidos i INNER JOIN produtos p on p.id = i.id_produto INNER JOIN mesa m on m.idmesa = i.mesa WHERE comanda LIKE '$pesquisar%' LIMIT 10");
  $sth->execute();
  if ($sth->rowCount() > 0) {
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
        extract($res);
        
$total = @$preco;
@$subtotal += $total; ?>
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
      <?php
    }       
}
  
?>
<h4><b> Total: R$
<?= number_format(@$subtotal,2,",",".") ?></b></h4>
<div class="col s12"><br>
      <div class="col s6">
            <center><a style="border: 1px solid black;background-color: red;" href="home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
            </a></center></br></br>
        </div>
        <div class="col s6">
            <center><a href="finalizar.php?id=<?= $idmesa?>" style="border: 1px solid black;background-color: red;" class="waves-effect waves-light btn botaoVoltar">
            Finalizar
            </a></center></br></br>
        </div>
        </div>
      </div>
      </div>
      </div>
      </body>
    <!--Import JQUERY-->
    <script type="text/javascript" src="../materialize/jquery/jquery-3.3.1.min.js"></script>

<!--Import MATERIALIZE.JS-->
<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>


<script type="text/javascript" src="../materialize/js/index.js"></script>


</html>