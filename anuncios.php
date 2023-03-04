<?php

include "./conexao.php";

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
$anc = "SELECT * FROM anuncio where titulo like '%$filtro%'";

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
    <title>Anuncios</title>
    
</head>
<body>
    <div class="container">
        <!--Importando o Header Menu e Hide Menu-->
        <?php include("./menu.php") ?>
        <!--Importando o Header Menu e Hide Menu-->
        
        <div class="corpo">
            <div class="cards">
                <?php
                
                    $sqlexb = "SELECT * FROM anuncio order by idanuncio limit 6";
                    $resultadoanuncio = mysqli_query($connect, $sqlexb);

                    while($exibir = mysqli_fetch_array($resultadoanuncio)){
                
                ?>
                <div class="card1">

                    <div class="img">
                        <img src="./assets/anuncios/<?php 
                            if( $exibir['imganuncio'] == ""){
                                echo 'triangle-exclamation-solid.svg';
                            } else{
                                echo $exibir['imganuncio'];
                            }
                        ?>" alt="Item 1">
                    </div>
                    <div class="info">
                        <form action="" method="get">
                        <input type="search" name="pesquisar" value="<?php echo $exibir['titulo']?>" style="display: none;"/>
                        <button type="submit" style="background: none; color: #fff; font-weight: 500; border: none; font-size: 12pt;" value="<?php echo $exibir['titulo']?>" ><?php echo $exibir['titulo']?></button>
                        </form>
                    </div>
                        
                </div>

                <?php } ?>
                
            </div>

            <div class="panel">
                 <?php        
                 
                 $sqlanc = "SELECT * FROM anuncio WHERE titulo like '%$filtro%' order by idanuncio desc limit 1";
                 $resultanc = mysqli_query($connect,$sqlanc);
                                         
                    while($exibiranc = mysqli_fetch_array($resultanc)){
                ?>
                <div class="imagem">
                    <img src="./assets/anuncios/<?php echo $exibiranc['imganuncio']?>" alt="Main Item">
                </div>

                <div class="description">
                    <div class="name">
                        <h2><?php echo $exibiranc['titulo']?></h2>
                    </div>
                    <div class="details">
                        <p>
                            <?php echo $exibiranc['descricaoanuncio']?>
                        </p>
                    </div>
                </div>
                <?php } mysqli_close($connect); ?>
            </div>
            
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>