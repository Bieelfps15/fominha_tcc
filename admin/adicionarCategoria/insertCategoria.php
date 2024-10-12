<?php
include '../../conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$Dados = array(
    'cat_nome' => $post['categoria']
);

$Fields = implode(', ', array_keys($Dados));
$Places = ':' . implode(', :', array_keys($Dados));
$Tabela = 'categorias';
$Create = "INSERT INTO {$Tabela} ({$Fields}) VALUES ({$Places})";

$sth = $pdo->prepare($Create);
$sth->execute($Dados);
echo $pdo->lastInsertId();

header("LOCATION: categoria.php");


?>
