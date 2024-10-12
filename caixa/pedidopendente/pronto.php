<?php
try {
    include 'conexao.php';
    $id = $_GET['id'];
    $cozinha = 0;
    $stmt = $conexao->prepare("UPDATE itenspedidos SET cozinha =:cozinha WHERE id_pedido=:id");
    $stmt->bindValue(':cozinha', $cozinha);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    header('Location: cozinha.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
