<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../index.php");
    die;
endif;



if ($_SESSION['Lanche']['nivel'] > 1) :
    header("Location: ../funcionarios/home.php");
    die;
endif;

if ($_SESSION['Lanche']['nivel'] == 1) {
    define("LINK0", "../admin");
}
if ($_SESSION['Lanche']['nivel'] != 1) {
    define("LINK0", "../funcionarios");
}
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
        .container {
            background-color: whitesmoke;
            margin: 0 auto;
            margin-top: 10px;
            /* -webkit-box-shadow: 9px 10px 7px -5px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 9px 10px 7px -5px rgba(0, 0, 0, 0.75);
            box-shadow: 9px 10px 7px -5px rgba(0, 0, 0, 0.75); */
        }

        .background {
            width: 80%;
            height: 500px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .texto p b {
            font-size: 300%;
        }

        #efeito {
            width: 100%;
            /* background-color: red;
            -webkit-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75); */

        }

        a {
            text-decoration: none;
            color: white;
        }

        .options {
            width: 90%;
            height: 350px;
            background-color: whitesmoke;
            margin: 0 auto;
        }

        /* ADMIN */



        /* .body{
            background-color: darkgray;
        } */
    </style>

</head>

<body>
    <!-- navbar -->

    <body style=" background-color: white;">
        <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
            <a href="<?= LINK0 ?>/home.php" class="brand-logo">
                <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 55%;"></center>
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= LINK0 ?>/home.php">Voltar </a></li>
                <li><a href="sair.php">Sair</a></li>
            </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?= LINK0 ?>/home.php">Voltar </a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
        </br>



        <!-- search -->
        <div class="search-wrapper" style="width: 90%; margin: 80px auto;">
            <form action="caixa.php" method="post">
                <input id="search" name="pesquisar">
                <input class="btn btn_textcenter bg-white blue darken-2" type="submit" class="solid" value="Buscar">
                <div class="search-results"></div>
            </form>
            </form>
        </div>


        <?php
    include 'caixa.php';
    ?>

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