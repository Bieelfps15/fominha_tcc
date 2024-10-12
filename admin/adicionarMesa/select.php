

    <?php

include '../../conexao.php';

$sth = $pdo->prepare("SELECT * FROM mesa");

$sth->execute();
echo '<h3 style="text-align: center;font-family: sans-serif;">Mesas Cadastradas </h3>';
echo '<center>';

echo '<table class="striped" style="font-family: arial, sans-serif;border-collapse: collapse;width: 50%;">';
echo '<tr>';
echo '<th>Número da Mesa</th>';
echo '<th>Edição</th>';



echo '</tr>';
foreach ($sth as $res) {
    extract($res);
    echo '<center>';

    echo '<tr>';
    echo '<td>' . $numero . '</td> ';
    echo '<td>';
    echo "<a href='deletarmesa.php?id=" . $idmesa. "'<i class='material-icons red-text'> clear </i></a>";

    echo '</tr>';
    echo '</center>';

}
echo '</table>';
echo '</center>';

?>


