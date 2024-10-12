
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="icon" type="imagem/png" href="../img/iconFominha.png" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lanches</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">

<nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../admin/home.php" class="brand-logo">
            <center><img src="../img/logoFominha.png" style="width: 50%;"></center>
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


    <div class="container" style="width:90%; background-color: white; border-radius: 20px;">
        <div class="row">
        <?php
include '../fazerpedido/comanda.php';

?>
        <?php

include '../conexao.php';
$cat_id = filter_input(INPUT_POST, 'cat_id', FILTER_DEFAULT);
$sth = $pdo->prepare("SELECT * FROM produtos where cat_id = :cat_id");
$sth->bindValue(':cat_id', $cat_id);
$sth->execute();
?>
            <div class="col s12">
                <h3 style="text-align: center;font-family: sans-serif;"></h3>
                <table class="striped" style="font-family: arial, sans-serif;width: 100%;border-radius: 20px;">
                    <tr:nth-child(even) style="background-color: #dddddd">
                    
                        <td style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: #DA0000;">
                            <h5>Nome </h5>
                        </td>
                        <td style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: #DA0000;">
                            <h5> Preço </h5>
                        </td>
                        <td style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: #DA0000;">
                            <h5>Adicionar</h5>
                        </td>
                        </tr>
     <?php
     foreach ($sth as $res) {
         extract($res); ?>

        <tr:nth-child(even) style="background-color: #dddddd">
        
                <td style="border: 1px solid black;text-align: left;padding: 8px;">
                        <h5><?= $pro_nome ?></h5>
                        <p><?= $pro_descricao ?></p>
                </td>
                <td style="border: 1px solid black;text-align: center;padding: 8px;">
                    <h5>R$ <?= $pro_preco ?></h5>
                </td>
                <td style="border: 1px solid black;text-align: left;padding: 8px;">
                    <a href="pedido.php?add=pedido&id=<?= $id ?>">
                        <i style="color: red;" class="medium material-icons">add_circle</i>
                     </a>
                </td>
         </tr>
                        
    <?php
    }
    ?>
</table>

        <div class="col s6">
                <ul>
                        <center> <button style="border: 1px solid black;background-color: red;" href="pedido.php" class="waves-effect waves-light btn botaoVoltar" type="submit">Ver Pedido</button></center>
                </ul>
            </div>
            <div class="col s6">
                <ul>
                    <center> <button style="border: 1px solid black;background-color: red;" href="#modal1" class="waves-effect waves-light btn modal-trigger" type="submit">Cancelar Pedido</button></center>
                </ul>
            </div>
            <div id="modal1" class="modal">
                <div style="background-color:red;font-family: arial, sans-serif;" class="modal-content">
                    <h4 style="background-color:red;font-family: sans-serif;">Cancelar pedido</h4>
                </div>
                <div class="modal-content">
                    <h5>Tem certeza que deseja cancelar o pedido?</h5>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Não</a>
                    <a href="../admin/home.php" class="modal-close waves-effect waves-green btn-flat">Sim</a>
                </div>
            </div>
        </div>
        <br><br>

        <script type="text/javascript" src="../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });

    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
        $('.modal').modal();
    });
</script>
</html>