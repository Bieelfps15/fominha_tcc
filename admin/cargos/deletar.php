<?php

include '../conexao.php';
$id = filter_input(INPUT_GET, 'id', FILTER_DEFAULT);
$sth = $pdo->prepare("DELETE from cargos where car_id= :id");
$sth->bindValue(":id", $id, PDO::PARAM_INT);
$sth->execute();
header("LOCATION:cargos.php");
?>