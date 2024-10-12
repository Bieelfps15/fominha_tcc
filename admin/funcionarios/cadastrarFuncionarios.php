<?php
include '../../conexao.php';

$post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if ($post['senha'] == $post['resenha']) {
    $Dados = array(
        'f_nome' => $post['nome'],
        'f_cargo' => $post['cargo'],
        'f_login' => $post['login'],
        'f_email' => $post['email'],
        'f_senha' => MD5($post['senha'])
    );
} else {
    echo ("<script>alert('As senhas não são iguais. Favor colocar senhas identicas'); location.href='formularioFuncionarios.php';</script>");
}
$Fields = implode(', ', array_keys($Dados));
$Places = ':' . implode(', :', array_keys($Dados));
$Tabela = 'funcionarios';
$Create = "INSERT INTO {$Tabela} ({$Fields}) VALUES ({$Places})";

$sth = $pdo->prepare($Create);
$sth->execute($Dados);
header("Location: verificarFuncionarios.php");

// $nome = filter_input(INPUT_POST, 'nome', FILTER_DEFAULT);
// $cargo = filter_input(INPUT_POST, 'cargo', FILTER_DEFAULT);
// $login = filter_input(INPUT_POST, 'login', FILTER_DEFAULT);
// $email = filter_input(INPUT_POST, 'email', FILTER_DEFAULT);
// $senha = filter_input(INPUT_POST, 'senha', FILTER_DEFAULT);
// $resenha = filter_input(INPUT_POST, 'resenha', FILTER_DEFAULT);
// $nivel = filter_input(INPUT_POST, 'nivel', FILTER_DEFAULT);

// if ($nivel == 1) {
//     if ($resenha == $senha) {
//         $sth = $pdo->prepare("INSERT INTO funcionarios (f_nome, f_cargo, f_login, f_email, f_senha, f_nivel) VALUES (:nome, :cargo, :login, :email, :senha, :nivel)");
//         $sth->bindValue(":nome", $nome);
//         $sth->bindValue(":cargo", $cargo);
//         $sth->bindValue(":login", $login);
//         $sth->bindValue(":email", $email);
//         $sth->bindValue(":senha", $senha);
//         $sth->bindValue(":nivel", 1);
//         $sth->execute();
//     } else {
//         ("<script>alert('Senhas não são iguais')");
//     }
// } else {
//     if ($resenha == $senha) {
//         $sth = $pdo->prepare("INSERT INTO funcionarios (f_nome, f_cargo, f_login, f_email, f_senha, f_nivel) VALUES (:nome, :cargo, :login, :email, :senha, :nivel)");
//         $sth->bindValue(":nome", $nome);
//         $sth->bindValue(":cargo", $cargo);
//         $sth->bindValue(":login", $login);
//         $sth->bindValue(":email", $email);
//         $sth->bindValue(":senha", $senha);
//         $sth->bindValue(":nivel", 2);
//         $sth->execute();
//     } else {
//         ("<script>alert('Senhas não são iguais')");
//     }
// }
