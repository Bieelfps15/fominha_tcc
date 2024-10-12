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