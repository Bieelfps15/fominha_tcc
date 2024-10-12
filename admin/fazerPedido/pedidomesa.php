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
  a {
    text-decoration: none;
    color: white;
  }
</style>

<body>
  <?php include '../../menu.php'; ?>
  </br>

  <div class="container">
    </br>
    </br>
    </br>
    <?php include_once("conexao.php"); ?>
    <div class="row">

      <form name="form" method="post" action="insertpedido.php">



        <h3>Mesa:</h3>
        <div class="input-field col s12">
          <select class="browser-default" name="mesa" id="id_mesa">
            <option value="" disabled selected>Escolha uma mesa</option>

            <?php
            $result_cat_post = "SELECT * FROM mesa ORDER BY mesa";
            $resultado_cat_post = mysqli_query($conn, $result_cat_post);
            while ($row_cat_post = mysqli_fetch_assoc($resultado_cat_post)) {
              echo '<option value="' . $row_cat_post['id'] . '">' . $row_cat_post['mesa'] . '</option>';
            }
            ?>
          </select>

        </div><br><br>
        <div class="col s6">
          <center><button style="border: 1px solid black;background-color: red;" class="btn-large" type="submit">
              Iniciar pedido</button>
          </center>
        </div>
      </form>

      <div class="col s6">
        <center>
          <input style="border: 1px solid black;background-color: red;" class="btn-large" name="Voltar" type="submit" value="Voltar" class="botao" onClick=top.window.location="../home.php" ;>
        </center>
      </div>


    </div>
  </div>
</body>


</body>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function() {
    $('select').formSelect();
  });
</script>

</html>