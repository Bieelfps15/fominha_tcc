<?php

// include '../../conexao.php';

// $f_id = filter_input(INPUT_GET, 'f_id', FILTER_DEFAULT);
// $sth = $pdo->prepare("DELETE FROM funcionarios where f_id=:f_id");
// $sth->bindValue(":f_id", $f_id, PDO::PARAM_INT);
// $sth->execute();
// ("<script>alert('O funcionarios foi excluido com sucesso')");
// header("LOCATION: verificarFuncionarios.php");

// <?php


include '../../conexao.php';

$f_id = filter_input(INPUT_GET, 'f_id', FILTER_DEFAULT);
$sth = $pdo->prepare("DELETE from funcionarios where f_id= :f_id");
$sth->bindValue(":f_id", $f_id, PDO::PARAM_INT);
$sth->execute();
("<script>alert('O funcionarios foi excluido com sucesso')");
header("LOCATION: verificarFuncionarios.php");
