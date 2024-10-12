<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../index.php");
    die;
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garçom</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../img/iconFominha.png" />

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

    </style>
</head>

<body style=" background-color: white;">
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="home.php" class="brand-logo">
            <center><img src="../img/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="home.php">Voltar </a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>
    </br>

<!-- PESSOA logada -->

  

<!-- OPÇÕES  -->

    <div class="container" >
        <div class="row">
        
             <div class="col s12 m12" style="margin-bottom:-25px;">
                <ul>
                    <a href="fazerpedido/mesa.php">
                        <center><img id="efeito" src="../img/newicons/pedidos.png"></center>
                    </a>
                </ul>
            </div>
             <div class="col s12 m12" style="margin-bottom:-25px;">
                <ul>
                    <a href="pedidosFeitos/pedidosfeitos.php">
                        <center><img id="efeito" src="../img/newicons/pedfeitos.png"></center>
                    </a>
                </ul>
            </div>
             <div class="col s12 m12" style="margin-bottom:-25px;">
                <ul>
                    <a href="comanda/comanda.php">
                        <center><img id="efeito" src="../img/newicons/comandas.png"></center>
                    </a>
                </ul>
            </div>
        
            <div class="col s12 m12" style="margin-bottom:-25px;">
                <ul>
                    <a href="../pedidopendente/cozinha.php">
                        <center><img id="efeito" src="../img/newicons/pedidospen.png"></center>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="cordova.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>

<script type="text/javascript" src="../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
</script>

</html>