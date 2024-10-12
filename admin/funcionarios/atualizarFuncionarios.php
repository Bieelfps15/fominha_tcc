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
include '../../conexao.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta placeholder="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Atualizar Funcionarios </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />
    <style>
       
        .texto p b {
            font-size: 300%;
        }

        .efeito {
            width: 70%;
        }

        .bloco {
            width: 350px;
            height: 500px;
        }
    </style>
</head>

<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">
<?php
define("LINK1", "../../img");
?>
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../../sair.php">Sair</a></li>
    </ul>

    <?php
    $f_id = filter_input(INPUT_GET, 'f_id', FILTER_DEFAULT);

    $sth = $pdo->prepare("SELECT * FROM funcionarios where f_id=:f_id");
    $sth->bindValue(":f_id", $f_id, PDO::PARAM_INT);
    $sth->execute();
    $resultado = $sth->fetch(PDO::FETCH_ASSOC);
    extract($resultado);

    $sth = $pdo->prepare("SELECT * FROM funcionarios f INNER JOIN cargos x on x.car_id = f.f_cargo");
    $sth->execute();
    ?>

    <center>
    <br><div class="container" style="width:90%; background-color: white; border-radius: 20px;">
    
            <br>

            <form action="updateFuncionarios.php" method="post">
                <input type="hidden" name="f_id" value="<?= $f_id; ?>" />
                <div class="input-field">
                    <h6><b>Nome</b></h6>
                    <input type="text" placeholder="nome" name="f_nome" value="<?= $f_nome ?>" />
                </div>
                <div class="input-field col s12">
                    <h6><b>Cargo</b></h6>
                    <?php
                    $sth = $pdo->prepare("SELECT * FROM cargos ORDER BY car_nome");
                    $sth->execute(); ?>
                    <select class="browser-default" name="f_cargo" id="car_id" required>
                        <option value="<?= $f_cargo; ?>" disabled selected>Atualize o cargo</option>
                        <?php
                        foreach ($sth as $res) {
                            extract($res);
                        ?>
                            echo '<option value="<?= $car_id ?>"><?= $car_nome ?></option>';
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="input-field">
                    <h6><b>Login</b></h6>
                    <input type="text" placeholder="login" name="f_login" value="<?= $f_login ?>" />
                </div>
                <div class="input-field">
                    <h6><b>E-mail</b></h6>
                    <input type="text" placeholder="email" name="f_email" value="<?= $f_email ?>" />
                </div>
                <div class="input-field">
                    <h6><b>Nova senha</b></h6>
                    <input type="password" placeholder="senha" name="f_senha" valeu />
                </div>
                <div class="input-field">
                    <h6><b>Confirmar senha</b></h6>
                    <input type="password" placeholder="resenha" name="resenha" />
                </div>
                
                <input class="btn-large" style="border: 1px solid black;background-color: red;" type="submit" value="Atualizar Informações" />
            </form>
            <br>
            <a class="btn-large" style="border: 1px solid black;background-color: red;" href="verificarFuncionarios.php" type="submit">Voltar</a><br>
        </div>
    </center>
</body>

</html>