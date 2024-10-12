<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../../index.php");
    die;
endif;

if ($_SESSION['Lanche']['nivel'] > 1) :
    header("Location: ../funcionarios/home.php");
    die;
endif;

if ($_SESSION['Lanche']['nivel'] == 1) {
    define("LINK0", "../admin");
}
if ($_SESSION['Lanche']['nivel'] != 1) {
    define("LINK0", "../funcionarios");
}
define("LINK1", "../../img");

include '../../conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta placeholder="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Verificar Funcionarios </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />

</head>

<body>
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../<?= LINK0 ?>/home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../home.php">Voltar </a></li>
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="<?= LINK0 ?>/home.php">Voltar </a></li>
        <li><a href="../../sair.php">Sair</a></li>
    </ul>

    <div class="container">
        <div class="row">
        <center><h3><b>FUNCIONÁRIOS</b></h3></center>
    <div class="col s12">
        <div class="col s6">
            <center><a href="formularioFuncionarios.php" style="border: 1px solid black;background-color: red;" class="waves-effect waves-light btn" name="action">Cadastrar Funcionário</a></center>
        </div>

        <div class="col s6">
            <center><a style="border: 1px solid black;background-color: red;" href="../home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center></br></br>
        </div>
    </div>

    <br>
    <center>
        <?php
        $sth = $pdo->prepare("SELECT * FROM funcionarios f INNER JOIN cargos c on c.car_id = f.f_cargo ORDER BY f_nome ASC");
        $sth->execute();
        ?>
        
            <table class="striped">
                <tr>
                    
                    <th> <b>Nome</b> </th>
                    <th> <b>Cargo</b> </th>
                    <th> <b>Login </b></th>
                    <th> <b>E-mail </b></th>
                    <th> <b>Opções </b></th>
                </tr>
                <?php
                foreach ($sth as $res) {
                    extract($res); ?>
                    <tr>
                        <!-- <td> <?= $f_id ?> </td> -->
                        <td><?= $f_nome ?></td>
                        <td><?= $car_nome ?></td>
                        <td><?= $f_login ?></td>
                        <td><?= $f_email ?></td>
                        <!-- <td><?= $car_nivel ?></td> -->
                        <!-- <td><?= $f_senha ?></td> -->
                        <td>
                            <div class="col s6">
                                <a href="atualizarFuncionarios.php?f_id=<?= $f_id ?>"><i class='material-icons blue-text'> cached </i></a>
                                <!-- <a href="#modal1" class='material-icons red-text' type="submit" class="btn-large waves-effect waves-light btn modal-trigger"> clear</a> -->
                                <a href="#modal1" class="modal-trigger" type="submit"><i class='material-icons red-text'> clear </i></a>

                            </div>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
            <?php
            echo '<hr><p>Existem: ' . $sth->rowCount() . ' registros</p>';
            ?>

        
       
        <div id="modal1" class="modal">
            <div style="background-color:red;font-family: arial, sans-serif;" class="modal-content">
                <h4 style="background-color:red;font-family: sans-serif;">Excluir dados do funcionario </h4>
            </div>
            <div class="modal-content">
                <h5>Tem certeza que deseja excluiros dados do funcionario ?</h5>
            </div>
            <div class="modal-footer">
                <a href="" class="modal-close waves-effect waves-green btn-flat">Não</a>
                <a href="deletarFuncionarios.php?f_id=<?= $f_id ?>" class="modal-close waves-effect waves-green btn-flat">Sim</a>

            </div>
        </div>
        </div> </div>
        </div>
    </center>
</body>

<script type="text/javascript" src="../../materialize/js/index.js"></script>

<script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>



<script type="text/javascript">
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.modal');
        var instances = M.Modal.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function() {
        $('.modal').modal();
    });
</script>

</html>