<?php

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
       

<center><h3><b>DIGITE A COMANDA</b></h3></center>

        <!-- search -->
        <div class="search-wrapper" style="width: 90%; margin: 80px auto;">
            <form action="caixa.php" method="post">
                <input id="search" name="pesquisar">
                <input class="btn btn_textcenter bg-white" style="border: 1px solid black;background-color: red;" type="submit" class="solid" value="Buscar">
                <div class="search-results"></div>
            </form>
            <div class="col s12">
            <center><a style="border: 1px solid black;background-color: red;" href="../admin/home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
            </a></center></br></br>
        </div>        </div>

    

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