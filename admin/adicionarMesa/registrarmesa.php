

<?php
include '../../conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$Dados = array(
    'numero' => $post['mesa']
);

    $Fields = implode(', ', array_keys($Dados));
    $Places = ':' . implode(', :', array_keys($Dados));
    $Tabela = 'mesa';
    $Create = "INSERT INTO {$Tabela} ({$Fields}) VALUES ({$Places})";

    $sth = $pdo->prepare($Create);
    $sth->execute($Dados);
    echo $pdo->lastInsertId();

    header("LOCATION: mesa.php");

?>

