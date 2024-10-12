<?php
try {
    include 'conexao.php';
    $id = $_GET['id'];
    $status = 0;
    $stmt = $conexao->prepare("UPDATE mesa SET status =:status WHERE idmesa=:id");
    $stmt->bindValue(':status', $status);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    echo ("<script>alert('Pedido finalizado com sucesso'); 
    location.href='index.php';</script>");
} catch (PDOException $e) {
    echo $e->getMessage();
}
