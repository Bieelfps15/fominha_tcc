

<?php

include '../conexao.php';

$sth = $pdo->prepare("SELECT * FROM cargos");

$sth->execute();
?>
<center>
<table class="striped">
    <tr>

        <th> Nome </th>
        <th> Edição </th>
    </tr>
    <?php
    foreach ($sth as $res) {
        extract($res); ?>
        <tr>
            <td><?= $car_nome ?></td>
            <td>
            <a class="modal-trigger" href="#modal1"><i class='material-icons red-text'> clear </i></a>
                <a href="editar.php?id=<?= $car_id ?>"><i class="material-icons blue-text">edit</i></a></a>

            </td>
        </tr>
    <?php
    }
    ?>
</table>
</center>
      <!-- Modal Trigger -->


<div id="modal1" class="modal">
                <div style="background-color:red;font-family: arial, sans-serif;" class="modal-content">
                    <h4 style="background-color:red;font-family: sans-serif;"><b>Exluir Cargo</b></h4>
                </div>
                <div class="modal-content">
                    <h5>Tem certeza que deseja excluir o cargo?</h5>
                </div>
                <div class="modal-footer">
                    <a href="" style="text-decoration: none;color: black;" class="modal-close waves-effect waves-green btn-flat">NÃO</a>
                    <a href="deletar.php?id=<?= $car_id ?>" class="modal-close waves-effect waves-green btn-flat" style="text-decoration: none;color: black;">SIM</a>

                </div>
            </div>

