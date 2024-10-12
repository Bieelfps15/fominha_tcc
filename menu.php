<?php
include "conexao.php";
if (!$_SESSION['Lanche']) :
    header("Location: ../index.php");
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
    <title>FOMINHA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <!--Import MATERIALIZE.CSS-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />

    <!-- codigo css -->
    <style type="text/css">
        /* .background {
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
            background-color: red;
            -webkit-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);

        }

        a {
            text-decoration: none;
            color: white;
        } */
    </style>
</head>




<body>
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="<?= LINK0 ?>/home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="<?= LINK0 ?>/home.php">Voltar </a></li>
            <li><a href="sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../<?= LINK0 ?>/home.php">Voltar </a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>

</body>


<script type="text/javascript" src="js/index.js"></script>

<script type="text/javascript" src="materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="materialize/js/materialize.min.js"></script>



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