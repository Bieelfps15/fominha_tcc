<?php
session_start();

if(isset($_GET['remover']) && $_GET['remover'] == "pedido")
{
    $idProduto = $_GET['id'];
    unset($_SESSION['itens'][$idProduto]);
    echo '<META HTTP-EQUIV="REFRESH" CONTENT="0;URL=pedido.php"/>';
}

?>