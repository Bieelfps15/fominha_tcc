<?php
include '../../conexao.php';



// $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);

// $Dados = array(
//     'f_nome' => $post['nome'],
//     'f_cargo' => $post['cargo'],
//     'f_login' => $post['login'],
//     'f_email' => $post['email'],
//     'f_senha' => MD5($post['senha']),
//     'f_nivel' => $post['nivel']
// );

// $Fields = implode(', ', array_keys($Dados));
// $Places = ':' . implode(', :', array_keys($Dados));
// $Tabela = 'funcionarios';
// $Create = "UPDATE INTO {$Tabela} ({$Fields}) VALUES ({$Places})";

// $sth = $pdo->prepare($Create);
// $sth->execute($Dados);
// header("Location: verificarFuncionarios.php");


$id = filter_input(INPUT_POST, 'f_id', FILTER_DEFAULT);
$nome = filter_input(INPUT_POST, 'f_nome', FILTER_DEFAULT);
$cargo = filter_input(INPUT_POST, 'f_cargo', FILTER_DEFAULT);
$login = filter_input(INPUT_POST, 'f_login', FILTER_DEFAULT);
$email = filter_input(INPUT_POST, 'f_email', FILTER_DEFAULT);
$senha = filter_input(INPUT_POST, 'f_senha', FILTER_DEFAULT);
$novasenha = MD5($senha);

        // SE A SENHA NAO ESTIVER VAZIA E IGUAIS, DEVE CADASTRAR COM A SENHA NOVA DIFERENTE DA SENHA ANTIGA
        //ARRUMAR AINDA

        $sth = $pdo->prepare("UPDATE funcionarios set f_nome=:f_nome, f_cargo=:f_cargo, f_login=:f_login, f_email=:f_email, f_senha=:f_senha where f_id=:f_id");
        $sth->bindValue(':f_nome', ($nome));
        $sth->bindValue(':f_cargo', ($cargo));
        $sth->bindValue(':f_login', ($login));
        $sth->bindValue(':f_email', ($email));
        $sth->bindValue(':f_senha', ($novasenha));
        $sth->execute();
    
