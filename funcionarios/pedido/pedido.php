<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Pedidos</title>
	<link rel="icon" type="imagem/png" href="../../img/iconFominha.png"/>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
            <center><img src="../../img/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../../sair.php">Sair</a></li>
    </ul><br>
	<div class="container" style="width:90%; background-color: white; border-radius: 20px;">

		<div class="row">
			

            <div class="col s12">
            <?php
  
  include '../../conexao.php';

$sth = $pdo->prepare("SELECT idpedido, idmesa FROM pedido ORDER BY idpedido DESC LIMIT 1");

$sth->execute();

?>

<?php
    foreach ($sth as $res) {
        extract($res); ?>
        <center>
        <h4><b>COMANDA: <?= $idpedido ?></b></h4>
        <h4><b>MESA: <?= $idmesa ?></b></h4>
        </center>
    <?php
    }
    ?>

<?php
session_start();
include '../../conexao.php';
if(!isset($_SESSION['itens']))
{
    $_SESSION['itens'] = array();
}
if(isset($_GET['add']) && $_GET['add'] == "pedido")
{
    /*adiciona ao carrinho */
    $idProduto = $_GET['id'];
    if(!isset($_SESSION['itens'][$idProduto]))
    {
        $_SESSION['itens'] [$idProduto] = 1;
    }else{
    }$_SESSION['itens'] [$idProduto] += 1;
} 
if(count($_SESSION['itens']) == 0){
    ?>
    <h5>Sua comanda esta vazia, faça o pedido clicando no botão abaixo</h5>
    <a style="border: 1px solid black;background-color: red;" class="btn btn-info" href="index.php">Fazer pedido</a>
<?php
}else{ 

?>
<h2 style="text-align: center;font-family: sans-serif;">ITENS PEDIDOS</h2>
<table class="striped" style="font-family: arial, sans-serif;">
			<tr:nth-child(even) style="background-color: #dddddd">
				<th style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: red;">
				<h6> Nome </h6>
				</th>			
				<th style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: red;">
				<h6> Preço </h6>
				</th>
                <th style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: red;">
				<h6> Categoria </h6>
				</th>
				<th style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: red;">
				<h6> Remover</h6>
				</th>

			</tr>
<?php
$_SESSION['dados'] = array();

foreach ($_SESSION['itens'] as $idProduto => $quantidade) {

$select = $pdo->prepare("SELECT *FROM produtos p INNER JOIN categorias c on c.cat_id = p.cat_id where id=?");
$select->bindParam(1, $idProduto);
$select->execute();
$produtos = $select->fetchAll();
$quantidade;
$total = @$produtos[0]['pro_preco'];
@$subtotal += $total;
$status = 1;
$cozinha = 1;

date_default_timezone_set('America/Sao_Paulo');
// CRIA UMA VARIAVEL E ARMAZENA A HORA ATUAL DO FUSO-HORÀRIO DEFINIDO (BRASÍLIA)
    $dataLocal = date('d/m/Y');
    $hora = date('H:i');
array_push(
    $_SESSION['dados'],
    array(
    'id_produto'=> $idProduto,
      'preco'=> @$produtos[0]['pro_preco'],
       'ob' => $idpedido,
       'mesa' => $idmesa,
       'data' => $dataLocal,
       'hora' => $hora,
       'categoria'=> @$produtos[0]['cat_id'],
       'status' => $status,
       'cozinha' => $cozinha
    )
    );

'<br/><hr>';
?>

 <tr:nth-child(even) style="background-color: #dddddd">
                <td style="border: 1px solid black;text-align: left;padding: 8px;">
                        <h5><?= @$produtos[0]["pro_nome"] ?></h5>
                        <p><?= @$produtos[0]["pro_descricao"] ?></p>
                </td>
                <td style="border: 1px solid black;text-align: center;padding: 8px;">
                    <h5>R$ <?= @$produtos[0]["pro_preco"] ?></h5>
                </td>
                <td style="border: 1px solid black;text-align: center;padding: 8px;">
                    <h5><?= @$produtos[0]["cat_nome"] ?></h5>
                </td>
                <td style="border: 1px solid black;text-align: left;padding: 8px;">
                <a href="remover.php?remover=pedido&id=<?=$idProduto?>">
                <i class='medium material-icons red-text'> clear </i>  
                </a>
                </td>
         </tr>
         
 
        
	

<?php 
    }
    
   ?> 
   
<td style="border: 1px solid black;text-align: left;padding: 8px;align=right;"><h5> Total: R$
<?= number_format($subtotal,2,",",".") ?></h5>
</td>
</table>
<br> <a style="border: 1px solid black;background-color: red;" class="btn btn-info" href="index.php">Continuar pedido</a><br/><br/>

                <div class="col s12">
                <center>
                <a style="border: 1px solid black;background-color: red;" class="btn btn-info btn-large" href="finalizar.php">Finalizar</a><br/><br/>
                </center>
                </div>

<?php
}
?> 




		</div>
	</div>
    </div>

</body>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
          
</script>
</html>