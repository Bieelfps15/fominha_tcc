<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../../index.php");
    die;
endif;
define("LINK1", "../../img");
?>

<!DOCTYPE html>

<html>

<head>

    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Fazer pedido</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../../materialize/css/materialize.min.css" media="screen,projection" />
    <link rel="icon" type="imagem/png" href="../../img/iconFominha.png" />

    <!-- codigo css -->
    <style type="text/css">
        .background {
            width: 80%;
            height: 500px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .texto p b {
            font-size: 300%;
        }

        #efeito {
            width: 100%;
            background-color: red;
            -webkit-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);
            box-shadow: 10px 10px 7px -4px rgba(0, 0, 0, 0.75);

        }

        a {
            text-decoration: none;
            color: white;
        }

        .img{
  padding-left: 4px!important;
}
.img img{
  width: 80px;
  text-align: center;
  display: block;
  margin-left: auto;
  margin-right: auto;
  

}

.texto{
  display: block;
  text-align: center;
  margin: 0;
  font-size: 29px;
  font-weight: 600;
  padding-bottom: 10px;
  padding-left: 4px;
}

.option{
  text-align: center;
  padding-left: 17px!important;
}
    </style>

</head>

<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">
<?php
include '../../conexao.php'; ?>
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../home.php">Voltar </a></li>
            <li><a href="../../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../home.php">Voltar </a></li>
        <li><a href="../../sair.php">Sair</a></li>
    </ul>

    <!-- Texto -->
    

    <!-- OPções  -->
<div class="container" style="width:90%; background-color: white; border-radius: 20px;">
    <div class="row">
    <center>
            <h4><b>SELECIONE A MESA</b></h4><BR>
    </center>
    <form name="form1" method="post" action="salvarpedido.php">
                <div class="col s12">

                <?php
                    include 'conexao.php';
                    try {
                        $stmt = $conexao->prepare("SELECT *from mesa ");
                        if ($stmt->execute()) {
                            while ($rs = $stmt->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                <div class="col s4 mesa">
                                    <div class="col s12 img">
                                        <h1 class="texto">Mesa <?= $rs->numero ?></h1>
                                        <?php if ($rs->status == 0) {          ?>
                                            <img src="../../img/verde.png">
                                        <?php
                                                    } else {
                                                        ?>
                                            <img src="../../img/vermelho.png">

                                        <?php
                                                    }
                                                    ?>
                                        <div class="col s12 option">
                                            <p>
                                                <label>
                                                    <input required="required" name="mesa" type="radio" value="<?= $rs->idmesa ?>" />
                                                    <span></span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                    <?php
                            }
                        } else {
                            echo "Erro: Não foi possivel recuperar os dados do banco de dados";
                        }
                    } catch (PDOException $erro) {
                        echo "Erro: " . $erro->getMessage();
                    }

                    ?>
                    <div class="col s12">
        <div class="col s6">
        <br> <center><button style="border: 1px solid black;background-color: red;" class="btn waves-effect waves-light button" type="submit" name="action">Iniciar pedido</button></center>
        </div>

        <div class="col s6">
        <br><center><a style="border: 1px solid black;background-color: red;" href="../admin/home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center></br></br>
        </div>
    </div>
    </br>
                    </form>
    </div>

    </div> </div>

</div>
</body>


<script type="text/javascript" src="../../js/index.js"></script>

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