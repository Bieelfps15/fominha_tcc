<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../../index.php");
    die;
endif;
if ($_SESSION['Lanche']['nivel'] != 1) :
    header("Location: ../../funcionarios/home.php");
    die;
  endif;
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categoria</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />


    <style>
        .background {
            width: 80%;
            height: 500px;
            margin: 0 auto;
            margin-top: 20px;
            background-color: #f2f2f2;
        }



        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
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
            <li><a href="../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../sair.php">Sair</a></li>
    </ul>

<div class="container" style="width:90%; background-color: white; border-radius: 20px;">
        <div class="row">
            <div class="painel">
                <form action="insertCategoria.php" method="post">
                
                <center>
                <h2><b>ADICIONAR CATEGORIA</b></h2>
            </center></br>
                    <div class="input-field col s12">
                        <center><input style="width:70%" placeholder="Digite o nome da Categoria" type="text" name="categoria" required="required" >
                        </center>
                    </div>

    <div class="col s12">
        <div class="col s6">
            <center><button style="border: 1px solid black;background-color: red;" class="btn waves-effect waves-light button" type="submit" name="action">Cadastrar</button></center>
        </div>

        <div class="col s6">
            <center><a style="border: 1px solid black;background-color: red;" href="../home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center></br>
        </div>
    </div>

                    </form>

                    </br></br></br>
                    </br></br>
        <center>
            <h4>Categorias Cadastradas</h4>
        </center>
        
        <?php
        include 'select.php';
        ?>

               

</body>

<script type="text/javascript" src="../../js/index.js"></script>

<script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

<script type="text/javascript">
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