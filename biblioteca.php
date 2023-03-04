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
<html lang="ept-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/configure.module.css">
    <link rel="stylesheet" href="./styles/items.module.css">
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
                    $sqlexb = "SELECT * FROM biblioteca order by id limit 4";
                    $resultado = mysqli_query($connect, $sqlexb);

                    while($exibir = mysqli_fetch_array($resultado)){
                ?>
                <div class="card1">
                    <div class="img">
                        <img src="./assets/livros/capas/<?php if($exibir['imglivro'] == ""){
                            echo 'triangle-exclamation-solid.svg';
                        } else { 
                            echo $exibir['imglivro'];
                        } 
                        ?>" alt="Item 1">
                    </div></a>
                    <div class="info"><h3>
                        <form action="" method="get">
                            <input type="search" name="pesquisar" value="<?php echo $exibir['id']?>" style="display: none;"/>
                            <button type="submit" style="background: none; color: #fff; font-weight: 500; border: none; width: 100%; cursor: pointer;font-size: 12pt;" value="<?php echo $exibir['id']?>" ><?php echo $exibir['nomelivro']?></button>
                        </form>
                    </div>
                </div>
                <?php } ?>
                
                
            </div>

            <div class="panel">
                <?php        
                    $sqlprod = "SELECT * FROM biblioteca WHERE id like '%$filtro%' order by id desc limit 1";
                    $result = mysqli_query($connect,$sqlprod);
                                            
                    while($exibirlib = mysqli_fetch_array($result)){
                ?>
                <a href="./assets/livros/<?php echo $exibirlib['link']?>" target="_blank">
                <div class="imagem">
                    <img src="./assets/livros/capas/<?php if($exibirlib['imglivro'] == ""){
                        echo 'triangle-exclamation-solid.svg';
                    } else { 
                        echo $exibirlib['imglivro'];
                    } 
                    ?>" alt="Main Item">
                </div>
                </a>

                <div class="description">
                    <div class="name">
                        <h2><a href="./assets/livros/<?php echo $exibirlib['link']?>" target="_blank">Titulo: <?php echo $exibirlib['nomelivro']?></a></h2>
                    </div>
                    <div class="details">
                        <p>
                            <i><?php echo $exibirlib['descricao']?></i>
                        </p>
                    </div>
                    <div class="price desp">

                        <!--Aqui vai alternar entre o desponibilidade fisica e digital de acordo ao registro da base de dados-->

                        <p>Desponibilidade:</p>
                        <?php if($exibirlib['desponibilidade'] == "Virtual"){
                        echo '<p  class="before"> Virtual</p>';
                        } else if($exibirlib['desponibilidade'] == "Física"){ 
                            echo '<p  class="after multa"> Física</p>';
                        } else{
                            echo '<p  class="after multa">Física</p>
                            <p> e </p>
                            <p class="before">Digital</p>';
                        }
                        ?>

                    </div>
                    <div class="readbook">
                        <a href="./assets/livros/<?php echo $exibirlib['link']?>" target="_blank">Ler o livro no formato digital</a>
                    </div>
                    </a>
                </div>
                <?php } mysqli_close($connect); ?>
            </div>
        </div>
    </div>
</body>
</html>