<?php
include '../../conexao.php';



$car_id = filter_input(INPUT_POST, 'car_id', FILTER_DEFAULT);
$car_nome = filter_input(INPUT_POST, 'car_nome', FILTER_DEFAULT);

$sth = $pdo->prepare("UPDATE cargos set car_nome=:car_nome where car_id=:car_id");

$sth->bindValue(':car_nome', $car_nome);
$sth->bindValue(":car_id", $car_id, PDO::PARAM_INT);
$sth->execute();
header("LOCATION:cargos.php");
    // 
