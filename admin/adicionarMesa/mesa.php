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
define("LINK1", "../../img");
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastrar mesas</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />

</head>
<style>
  a {
    text-decoration: none;
    color: white;
  }
</style>

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
  <div class="container" style="width:90%; background-color: white; border-radius: 20px;">

    <div class="row">
    
      </br>
  

      <form name="form" method="post" action="registrarmesa.php">

        <p>
          <center><h3 for=""><b>Número da Mesa</b></h3></center>
        </p>
        <center><input style="width:70%" placeholder="Digite o número da mesa" type="text" name="mesa" required="required">
        </center>
        </p>

        <div class="col s12">
        <div class="col s6">
            <center><button style="border: 1px solid black;background-color: red;" class="btn waves-effect waves-light button" type="submit" name="action">Cadastrar</button></center>
        </div>

        <div class="col s6">
            <center><a style="border: 1px solid black;background-color: red;" href="../home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center>
        </div>
    </div>

        </form>
        
    </div>
    <?php
    include 'select.php';
    ?>  </br>
  </div>


  </br>  </br>
</body>

</html>