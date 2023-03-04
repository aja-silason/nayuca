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
$anc = "SELECT * FROM cantina where idproduto like '%$filtro%'";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/configure.module.css">
    <link rel="stylesheet" href="./styles/items.module.css">
    <link rel="stylesheet" href="./styles//general.module.css">
    <link rel="stylesheet" href="./styles/menu.module.css">
    <script src="./js/showmenu.js"></script>
    <title>Cantina</title>
</head>
<body>
    <div class="container">
        <!--Importando o Header Menu e Hide Menu-->
        <?php include("./menu.php") ?>
        <!--Importando o Header Menu e Hide Menu-->
        
        <div class="corpo">
            <div class="cards">
                <?php
                    $sqlexb = "SELECT * FROM cantina order by idproduto limit 6";
                    $resultadoproduto = mysqli_query($connect, $sqlexb);

                    while($exibir = mysqli_fetch_array($resultadoproduto)){
                ?>

                <div class="card1">
                    <div class="img">
                        <img src="./assets/cantina/<?php 
                        if($exibir['imgproduto'] == ""){
                            echo 'triangle-exclamation-solid.svg';
                        } else {
                            echo $exibir['imgproduto'];
                        } 
                        ?>" alt="Item 1">
                    </div>
                    <div class="info">
                        <form action="" method="get">
                            <input type="search" name="pesquisar" value="<?php echo $exibir['idproduto']?>" style="display: none;"/>
                            <button type="submit" style="background: none; color: #fff; font-weight: 500; border: none; font-size: 12pt;" value="<?php echo $exibir['idproduto']?>" ><?php echo $exibir['nomeproduto']?></button>
                        </form>
                    </div>
                </div>
                <?php } ?>
                
            </div>

            <div class="panel">
                <?php        
                 
                 $sqlprod = "SELECT * FROM cantina WHERE idproduto like '%$filtro%' order by idproduto desc limit 1";
                 $resultprod = mysqli_query($connect,$sqlprod);
                                         
                    while($exibirprod = mysqli_fetch_array($resultprod)){
                ?>
                <div class="imagem">
                    <img src="./assets/cantina/<?php
                    if($exibirprod['imgproduto'] == ""){
                        echo 'triangle-exclamation-solid.svg';
                    } else {
                        echo $exibirprod['imgproduto'];
                    }
                    ?>" alt="Main Item">
                </div>

                <div class="description">
                    <div class="name">
                        <h2><?php echo $exibirprod['nomeproduto']; ?></h2>
                    </div>
                    <div class="details">
                        <p>
                            <?php echo $exibirprod['descricaoproduto']?>
                        </p>
                    </div>
                    <div class="price">
                        <p>Antes: <span class="after">Kz: <?php echo $exibirprod['precoantigo'] ?></span></p>
                        <p>Agora: <span class="before">Kz: <?php echo $exibirprod['preconovo'] ?></span></p>

                    </div>
                </div>
                <?php } mysqli_close($connect);?>
            </div>
        </div>
    </div>
</body>
</html>