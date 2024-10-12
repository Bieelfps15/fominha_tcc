<?php

session_start();

foreach($_SESSION['dados'] as $produtos){
    $conexao = new PDO('mysql:host=localhost;dbname=system_restaurante', "root", "");
    
    $insert = $conexao->prepare("INSERT INTO itenspedidos () VALUES (NULL, ?,?,?,?,?,?,?,?,?)");
    $insert->bindParam(1,$produtos['mesa']);
    $insert->bindParam(2,$produtos['ob']);
    $insert->bindParam(3,$produtos['id_produto']);
    $insert->bindParam(4,$produtos['preco']);
    $insert->bindParam(5,$produtos['data']);
    $insert->bindParam(6,$produtos['hora']);
    $insert->bindParam(7,$produtos['categoria']);
    $insert->bindParam(8,$produtos['status']);
    $insert->bindParam(9,$produtos['cozinha']);
    $insert->execute();
    echo ("<script>alert('Pedido enviado com sucesso'); 
    location.href='../admin/home.php';</script>");
    unset( $_SESSION['itens'] );
}

?>
