<?php
session_start();
if (!$_SESSION['Lanche']) :
    header("Location: ../../index.php");
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
?>



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


    <style>
        .background {
            width: 80%;
            height: 500px;
            margin: 0 auto;
            margin-top: 20px;
            background-color: #f2f2f2;
        }


        a {
            text-decoration: none;
            color: white;
        }

    </style>
</head>
<?php
define("LINK1", "../../img");
include '../../conexao.php';
?>


<body style="background-color:#f2f2f2;box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 5px 10px 0px rgba(0, 0, 0, 0.1);">
    <nav style="-webkit-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);-moz-box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75);box-shadow: 0px 9px 14px -2px rgba(0,0,0,0.75); border-radius: 0px 0px 20px 20px; background-color: #DA0000;">
        <a href="../home.php" class="brand-logo">
            <center><img src="<?= LINK1 ?>/logoFominha.png" style="width: 50%;"></center>
        </a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="../sair.php">Sair</a></li>
        </ul>
        </div>
    </nav>

    <ul class="sidenav" id="mobile-demo">
        <li><a href="../sair.php">Sair</a></li>
    </ul>

    <div class="container" style="width:90%; background-color: white; border-radius: 20px;">
        <div class="row">
            <center>
                <h4><b>ADICIONAR PRODUTO</b></h4>
            </center></br>
            <form name="form" method="post" action="registraritens.php">

                <div class="col s6">
                    <h5 for="">PRODUTO</h5>

                    <input type="text" name="nome" required="required">
                </div>

                <div class="col s6">
                    <h5 for="">DESCRIÇÃO</h5>

                    <input type="text" name="descricao" required="required">
                </div>
                <div class="col s6">
                    <h5 for="">PREÇO</h5>
                    <input type="text" name="preco" onKeyPress="return(moeda(this,'.',',',event))" required="required">
                </div>
                <div class="col s6">

                    <h5>CATEGORIA</h5>
                    <div class="input-field col s12">
                    
                        <?php
                        $sth = $pdo->prepare("SELECT * FROM categorias ORDER BY cat_nome");
                        $sth->execute(); ?>
                        <select class="browser-default" name="categoria" id="categoria" required="required" style="right: 20px;"> 
                            <option value="" disabled selected>Escolha uma categoia</option>
                            <?php
                            foreach ($sth as $res) {
                                extract($res);
                            ?>
                                echo '<option value="<?= $cat_id ?>"><?= $cat_nome ?></option>';
                            <?php
                            }
                            ?>
                        </select></br>
                        
                    </div>
                    <br>
                    <br>
                </div>
                <div class="col s12">
        <div class="col s6">
            <center><button style="border: 1px solid black;background-color: red;" class="btn waves-effect waves-light button" type="submit" name="action">Cadastrar</button></center>
        </div>

        <div class="col s6">
            <center><a style="border: 1px solid black;background-color: red;" href="../home.php" class="waves-effect waves-light btn botaoVoltar">
            Voltar
                    </a></center></br></br>
        </div>
    </div>
    </br>
                    </form>
       
        
        </br></br></br>
        <center>
            <h5 style="margin-top: 270px;">PRODUTOS CADASTRADOS</h5>
        </center>
        <?php
        include 'select.php';
        ?>
<br>

    </div>




</body>

<script type="text/javascript" src="../../materialize/jquery/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="../../materialize/js/materialize.min.js"></script>

<script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script>  

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