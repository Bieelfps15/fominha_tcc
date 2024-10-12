<?php
try {
    include 'conexao.php';
    $id = $_GET['id'];
    $status = 0;
    $stmt = $conexao->prepare("UPDATE mesa SET status =:status WHERE idmesa=:id");
    $stmt->bindValue(':status', $status);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    header('Location: index.php');
} catch (PDOException $e) {
    echo $e->getMessage();
}
