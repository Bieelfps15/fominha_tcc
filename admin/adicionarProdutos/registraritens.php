<?php
include '../../conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

$Dados = array(
    'pro_nome' => $post['nome'],
    'pro_descricao' => $post['descricao'],
    'pro_preco' => $post['preco'],
    'cat_id' => $post['categoria']
);

$Fields = implode(', ', array_keys($Dados));
$Places = ':' . implode(', :', array_keys($Dados));
$Tabela = 'produtos';
$Create = "INSERT INTO {$Tabela} ({$Fields}) VALUES ({$Places})";

$sth = $pdo->prepare($Create);
$sth->execute($Dados);
echo $pdo->lastInsertId();

header("LOCATION: produtos.php");


?>
