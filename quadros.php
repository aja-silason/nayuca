<?php

include "conexao.php";

session_start();

if(!isset($_SESSION['logado'])):
    header('Location: ./index.php');
endif;

$id = $_SESSION['id_usuario'];

//Para pegar dados do usuário para sessão
$sql = "SELECT * FROM user WHERE id = '$id'";

$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);


$filtro = isset($_GET['pesquisar'])?$_GET['pesquisar']: "";
$anc = "SELECT * FROM quadros where id like '%$filtro%'";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/items.module.css">
    <link rel="stylesheet" href="./styles/configure.module.css">
    <link rel="stylesheet" href="./styles//general.module.css">
    <link rel="stylesheet" href="./styles/menu.module.css">
    <script src="./js/showmenu.js"></script>
    <title>Quadros</title>
</head>
<body>
    <div class="container">
        <!--Importando o Header Menu e Hide Menu-->
        <?php include("./menu.php") ?>
        <!--Importando o Header Menu e Hide Menu-->
        
        <div class="corpo">
            <div class="cards">
                <?php
                    $sqlexb = "SELECT * FROM quadros order by id limit 4";
                    $resultado = mysqli_query($connect, $sqlexb);

                    while($exibir = mysqli_fetch_array($resultado)){
                ?>

                <div class="card1">
                    <div class="img">
                        <img src="./assets/quadros/<?php
                            if($exibir['imgquadro'] == ""){
                                echo 'triangle-exclamation-solid.svg';
                            } else{
                                echo $exibir['imgquadro'];
                            }
                         ?>" alt="Item 1">
                    </div>
                    <div class="info">
                        <form action="" method="get">
                            <input type="search" name="pesquisar" value="<?php echo $exibir['id']?>" style="display: none;"/>
                            <button type="submit" style="background: none; color: #fff; font-weight: 500; border: none; width: 100%; cursor: pointer;font-size: 12pt;" value="<?php echo $exibir['id']?>" ><?php echo $exibir['nomequadro']?></button>
                        </form>
                    </div>
                </div>
                <?php } ?>
                
            </div>

            <div class="panel">
                <?php        
                 $sqlprod = "SELECT * FROM quadros WHERE id like '%$filtro%' order by id desc limit 1";
                 $resultqdr = mysqli_query($connect,$sqlprod);
                                         
                    while($exibirqd = mysqli_fetch_array($resultqdr)){
                ?>
                <div class="imagem">
                    <img src="./assets/quadros/<?php
                    if($exibirqd['imgquadro'] == ""){
                        echo 'triangle-exclamation-solid.svg';
                    } else{
                        echo $exibirqd['imgquadro'];
                    }
                    ?>" alt="Main Item">
                </div>

                <div class="description">
                    <div class="name">
                        <h2><?php echo $exibirqd['cargo'];?>: <?php echo $exibirqd['nomequadro'];?></h2>
                    </div>
                    <div class="details">
                        <p>
                            <?php echo $exibirqd['descricaoquadro'] ?>
                        </p>
                    </div>
                    
                </div>
                <?php } mysqli_close($connect); ?>
            </div>
        </div>
    </div>
</body>
</html>