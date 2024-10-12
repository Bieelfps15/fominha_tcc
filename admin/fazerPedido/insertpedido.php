<?php
include '../../conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
date_default_timezone_set('America/Sao_Paulo');
$data = date("Ymd");
$hora = date("His");

$Dados = array(
    'p_mesa' => $post['mesa'],
    'p_data' => $data,
    'p_hora' => $hora
);

$Fields = implode(', ', array_keys($Dados));
$Places = ':' . implode(', :', array_keys($Dados));
$Tabela = 'pedidos';
$Create = "INSERT INTO {$Tabela} ({$Fields}) VALUES ({$Places})";

$sth = $pdo->prepare($Create);
$sth->execute($Dados);
echo $pdo->lastInsertId();

header("LOCATION: ../../pedido/index.php");


?>

