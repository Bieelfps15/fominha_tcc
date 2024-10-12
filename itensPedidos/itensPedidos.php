<?php
include '../conexao.php';

$quantidade = filter_input(INPUT_POST, 'pedidocomida', FILTER_DEFAULT);
$quantidade1 = filter_input(INPUT_POST, 'pedidobebiba', FILTER_DEFAULT);

$sth = $pdo->prepare("INSERT INTO itenspedido (bebidas_quant, comidas_quant) VALUES (:pedidocomida,:pedidobebidas)");
$sth->bindValue(':pedidocomida', $quantidade);
$sth->bindValue(':pedidobebidas', $quantidade1);

$sth->execute();
echo $pdo->lastInsertId();
