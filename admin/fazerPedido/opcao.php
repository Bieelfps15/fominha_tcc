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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Pedido</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />


</head>
<style>
  .container {
    background-color: whitesmoke;
    margin: 0 auto;
    margin-top: 10px;
    -webkit-box-shadow: 9px 10px 7px -5px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 9px 10px 7px -5px rgba(0, 0, 0, 0.75);
    box-shadow: 9px 10px 7px -5px rgba(0, 0, 0, 0.75);
  }

  a {
    text-decoration: none;
    color: white;
  }

  #efeito {
    width: 200px;

  }
</style>

<body>
  <?php include '../../menu.php'; ?>
  <br>
  <br>
  <div class="container">
    <div class="row">
      </br>
      <center>
        <h2 style="font-family: sans-serif;">Escolha a opção do pedido</h2>
      </center>
      <div class="col s12 m6">
        <ul>
          <center>
            <a href="pedidomesa.php">
              <img id="efeito" src="../../img/pedidomesa.png">
            </a></center>
        </ul>
      </div>
      <div class="col s12 m6">
        <ul>
          <center>
            <a href="../../pedido/index.php">
              <img id="efeito" src="../../img/pedidobalcao.png">
            </a></center>
        </ul>
      </div>
      <div class="col s12">
        <center>
          <input style="border: 1px solid black;background-color: red;" class="btn-large" name="Voltar" type="submit" value="Voltar" class="botao" onClick=top.window.location="../home.php" ;>
        </center>
      </div>


    </div>
  </div>

</body>


</body>

</html>