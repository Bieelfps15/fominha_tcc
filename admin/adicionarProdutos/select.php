<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />

<?php

include '../conexao.php';

$sth = $pdo->prepare("SELECT * FROM produtos p INNER JOIN categorias c on c.cat_id = p.cat_id");

$sth->execute();
?>

<table class="striped">
    <tr align="center">
        <th> Nome </th>
        <th> Descrição </th>
        <th> Valor </th>
        <th> Categoria </th>
        <th> Edição </th>
    </tr>
    <?php
    foreach ($sth as $res) {
        extract($res); ?>
        <tr>
            <td><?= $pro_nome ?></td>
            <td><?= $pro_descricao ?></td>
            <td><?= $pro_preco ?></td>
            <td><?= $cat_nome ?></td>
            <td>
            <a class="modal-trigger" href="#modal1"><i class='material-icons red-text'> clear </i></a>
                <a href="editar.php?id=<?= $id ?>"><i class="material-icons blue-text">edit</i></a></a>

            </td>
        </tr>
    <?php
    }
    ?>
</table>
      <!-- Modal Trigger -->


<div id="modal1" class="modal">
                <div style="background-color:red;font-family: arial, sans-serif;" class="modal-content">
                    <h4 style="background-color:red;font-family: sans-serif;"><b>Exluir Produto</b></h4>
                </div>
                <div class="modal-content">
                    <h5>Tem certeza que deseja excluir o produto?</h5>
                </div>
                <div class="modal-footer">
                    <a href="" style="text-decoration: none;color: black;" class="modal-close waves-effect waves-green btn-flat">NÃO</a>
                    <a href="deletar.php?id=<?= $id ?>" class="modal-close waves-effect waves-green btn-flat" style="text-decoration: none;color: black;">SIM</a>

                </div>
            </div>

