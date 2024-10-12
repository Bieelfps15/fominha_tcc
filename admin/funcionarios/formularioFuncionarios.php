<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../index.php");
    die;
endif;

if ($_SESSION['Lanche']['nivel'] > 1) :
    header("Location: ../../funcionarios/home.php");
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
    <title> Cadastrar Funcionarios </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />
   
</head>




<body>

    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../home.php" class="brand-logo">
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
        <li><a href="../home.php">Voltar </a></li>
        <li><a href="../sair.php">Sair</a></li>
    </ul>
    </br>
    </br>
    </br>
    <center>
        <div class="row">
            <div class="container">
            <h3><b>CADASTRAR FUNCIONÁRIOS</b></h3>
                <form action="cadastrarFuncionarios.php" method="post">

                    <div class="col s12">
                        <input type="text" placeholder="nome" name="nome" required>
                    </div>

                    <div class="input-field col s12">
                        <?php
                        $sth = $pdo->prepare("SELECT * FROM cargos ORDER BY car_nome");
                        $sth->execute(); ?>
                        <select class="browser-default" name="cargo" id="car_id" required="required" style="right: 20px;"> 
                            <option value="" disabled selected>Escolha um cargo</option>
                            <?php
                            foreach ($sth as $res) {
                                extract($res);
                            ?>
                                echo '<option value="<?= $car_id ?>"><?= $car_nome ?></option>';
                            <?php
                            }
                            ?>
                        </select></br>
                    </div>

                    <div class="col s12">
                        <input type="text" placeholder="login" name="login" required>
                    </div>

                    <div class="col s12">
                        <input type="text" placeholder="email" name="email" required>
                    </div>

                    <div class="col s12">
                        <input type="password" placeholder="senha" name="senha" required>
                    </div>

                    <div class="col s12">
                        <input type="password" placeholder="resenha" name="resenha">
                    </div>

                    <!-- <div class="input-field">
                    <input type="text" placeholder="nivel" name="nivel">
                </div> -->
                    <div class="col s12">
                        <div class="col s6">
                            <input class="btn-large" style="border: 1px solid black;background-color: red;" type="submit" value="Cadastrar" />
                        </div>
                </form>
                <div class="col s6">
                    <a class="btn-large" href="verificarFuncionarios.php" style="border: 1px solid black;background-color: red;" type="submit">Voltar</a>
                    <br>
                    <br>
                </div>
            </div>
        </div>
        </div>
        </div>
    </center>
</body>
<script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

<script type="text/javascript">


    $(document).ready(function() {
        $('.sidenav').sidenav();
    });

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