<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../../index.php");
    die;
endif;
if ($_SESSION['Lanche']['nivel'] == 1) :
    define("LINKH", "../../admin");

endif;
if ($_SESSION['Lanche']['nivel'] >= 2) :
    define("LINKH", "../funcionarios");
endif;
define("LINK1", "../../img");
?>
<!DOCTYPE html>
<html>

<head>

    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Pedido</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">



    <!-- codigo css -->
    <style type="text/css">
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
            background-color: red;
            -webkit-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);

        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>

</head>

<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="<?= LINKH ?>/home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?= LINKH ?>/home.php">Voltar </a></li>
        <li><a href="../../sair.php">Sair</a></li>
    </ul>
    <br>
    <div class="container"  style="width:90%; background-color: white; border-radius: 20px;">
    <!-- Texto -->
    <br>
    <div class="row">

      <ul class="nav nav-tabs" role="tablist">
                
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                Busca</a></li>

	<li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                Categoria</a></li>
			  </ul>
    
			  <!-- Tab panes -->
			  <div class="tab-content">
				<div role="tabpanel" class="tab-pane active" id="home">
            <center><h3><b>Pesquisar</b></h3></center>
                <form method="POST" id="form-pesquisa" action="">
			<input type="text" name="pesquisa" id="pesquisa" placeholder="Pesquisar produto">
			
		</form>
		
		<table class="resultado">
		
    </table>

    <div class="col s12">
        <center> <br><a href="../fazerpedido/mesa.php" style="border: 1px solid black; background-color: red;" class="btn waves-effect waves-effect waves-light btn modal-trigger" type="submit">Voltar</a></center>
        </div>
				</div>
				<div role="tabpanel" class="tab-pane" id="profile">
                    <!-- Texto -->
    <center>
        <div class="texto">
            <p><b>SELECIONE UMA CATEGORIA</b></p>
        </div>
    </center>
                <form name="form1" action="produtos.php" method="post"> 
 <?php
    include '../../conexao.php';
       $sth = $pdo->prepare("SELECT * FROM categorias ORDER BY cat_nome");
       $sth->execute(); ?>
       <br>
      <center><select class="browser-default" name="cat_id" id="categoria" style="width:70%"> 
         <option value="" required="required" disabled selected>Escolha uma categoia</option>
    <?php
 foreach ($sth as $res) {
 extract($res);
    ?>
  echo '<option value="<?= $cat_id ?>"><?= $cat_nome ?></option>';
   <?php
   }
   ?>
      </select></center>
  <div class="col s6">
  <br>  <center><button style="border: 1px solid black;background-color: red;" class="btn waves-effect waves-light button" type="submit" name="action">Avançar</button></center><br>
  </div><br>
        <div class="col s6">
        <center> <br><a href="../fazerpedido/mesa.php" style="border: 1px solid black; background-color: red;" class="btn waves-effect waves-effect waves-light btn modal-trigger" type="submit">Voltar</a></center>
        </div>
                </div>            
                           </form>    
                </div>

        </div>
        </div>
           </div>   </div>
</body>



<script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>

        <script>

$(function(){
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa").keyup(function(){
		
		var pesquisa = $(this).val();
		
		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}		
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da ul os resultado obtidos 
				$(".resultado").html(retorna);
			});
		}else{
			$(".resultado").html('');
		}		
	});
});
	</script>

<script type="text/javascript">

document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
          

 document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.collapsible').collapsible();
  });
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    


    var instance = M.Tabs.init(el, options);

  // Or with jQuery

  $(document).ready(function(){
    $('.tabs').tabs();
  });
  document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });
 
       
</script>

</html>