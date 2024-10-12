<?php
session_start();

include '../conexao.php';
$email = filter_input(INPUT_POST, 'login', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);

$senhaCripto = MD5($senha);
$sth = $pdo->prepare('SELECT * FROM funcionarios where f_login = :email and f_senha = :senha');
$sth->bindValue(':email', $email);
$sth->bindValue(':senha', $senhaCripto);
$sth->execute();
if ($sth->rowCount() > 0) :

    $resultado = $sth->fetch(PDO::FETCH_ASSOC);
    extract($resultado);

    $_SESSION['Lanche']['email'] = $email;
    $_SESSION['Lanche']['senha'] = $senha;

    $_SESSION['Lanche']['nivel'] = $f_cargo;

    if ($f_cargo == 1) {
        header('LOCATION: ../admin/home.php ');
    } elseif ($f_cargo == 3) {
        header('LOCATION: ../funcionarios/home.php ');
    } elseif ($f_cargo == 2) {
        header('LOCATION: ../caixa/index.php ');
    } else {
        header('LOCATION: ../funcionarios/home.php ');
    }
else :
    echo ("<script>alert('Email ou senha incorreta'); 
    location.href='../index.php';</script>");
endif;
