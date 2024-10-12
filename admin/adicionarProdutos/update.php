<?php
include '../../conexao.php';

$id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);
$pro_nome = filter_input(INPUT_POST, 'pro_nome', FILTER_DEFAULT);
$pro_descricao = filter_input(INPUT_POST, 'pro_descricao', FILTER_DEFAULT);
$pro_preco = filter_input(INPUT_POST, 'pro_preco', FILTER_DEFAULT);
$cat_id = filter_input(INPUT_POST, 'cat_id', FILTER_DEFAULT);

$sth = $pdo->prepare("UPDATE produtos set pro_nome=:pro_nome, pro_descricao=:pro_descricao, pro_preco=:pro_preco, cat_id=:cat_id where id=:id");

$sth->bindValue(":pro_nome", $pro_nome);
$sth->bindValue(":pro_descricao", $pro_descricao);
$sth->bindValue(":pro_preco", $pro_preco);
$sth->bindValue(":cat_id", $cat_id);
$sth->bindValue(":id", $id);
$sth->execute();
header("LOCATION: produtos.php");
    //