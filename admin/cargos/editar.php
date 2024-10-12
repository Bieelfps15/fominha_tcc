<?php
include_once '../../conexao.php';
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../../index.php");
    die;
endif;
$f_cargo = 1;
if ($_SESSION['Lanche']['nivel'] != $f_cargo) :
    header("Location: ../../funcionarios/home.php");
    die;
endif;
define("LINK1", "../../img");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produto</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />

    <style>
        a {
            text-decoration: none;
            color: white;
        }

        .background {
            width: 80%;
            height: 500px;
            margin: 0 auto;
            margin-top: 20px;
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../../home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../sair.php">Sair</a></li>
    </ul>

    <body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">

<?php
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$sth = $pdo->prepare('SELECT *from cargos where car_id = :id');
$sth->bindValue(":id", $id, PDO::PARAM_INT);
$sth->execute();
$resultado = $sth->fetch(PDO::FETCH_ASSOC);
extract($resultado);
?>

<div class="container" style="width:90%; background-color: white; border-radius: 20px;">
<div class="row">
            <center>
                <h2>Atualizar Cargo</h2>
            </center></br>
<form name="form1" action="update.php" method="post">
<input type="hidden" name="car_id" value="<?= $car_id; ?>"/>
<div class="col s12">
<label>Nome</label></br>
<input type="text" required="required" name="car_nome" value="<?= $car_nome;?>"/></div>
                    
                    </br><div class="col s12">
        <div class="col s6">
            <center><button style="border: 1px solid black;background-color: red;" class="btn waves-effect waves-light button" type="submit" name="action">Atualizar</button></center>
        </div>

        <div class="col s6">
            <center><a style="border: 1px solid black;background-color: red;" href="produtos.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center> </br>
        </div>
    </div>
    </br>
                    </form>
</div>

    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

<script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>

</html>