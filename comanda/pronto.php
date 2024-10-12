<?php
try {
    include 'conexao.php';
    $id = $_GET['id'];
    $status = 0;
    $stmt = $conexao->prepare("UPDATE itenspedidos SET status =:status WHERE id_pedido=:id");
    $stmt->bindValue(':status', $status);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    header('Location: comanda.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
