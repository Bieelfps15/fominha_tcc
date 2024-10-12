<?php

include '../conexao.php';

$sth = $pdo->prepare("SELECT * FROM categorias");

$sth->execute();
?>

<table class="striped centered">
<thead>
        
    <tr>

        <th> Nome </th>
        <th> Edição </th>
        </tr>
        </thead>
    <?php
    foreach ($sth as $res) {
        extract($res); ?>
          <tr>
            <td><?= $cat_nome ?></td>
            <td>
            <a class="modal-trigger" href="#modal1"><i class='material-icons red-text'> clear </i></a>
                <a href="editar.php?id=<?= $cat_id ?>"><i class="material-icons blue-text">edit</i></a></a>

            </td>
            </tr>
    <?php
    }
    ?>
</table>


      <!-- Modal Trigger -->


<div id="modal1" class="modal">
                <div style="background-color:red;font-family: arial, sans-serif;" class="modal-content">
                    <h4 style="background-color:red;font-family: sans-serif;">Exluir Categoria</h4>
                </div>
                <div class="modal-content">
                    <h5>Tem certeza que deseja excluir a categoria?</h5>
                </div>
                <div class="modal-footer">
                    <a href="#" style="text-decoration: none;color: black;" class="modal-close waves-effect waves-green btn-flat">NÃO</a>
                    <a href="deletar.php?id=<?= $cat_id ?>" style="text-decoration: none;color: black;">SIM</a>

                </div>
            </div>

