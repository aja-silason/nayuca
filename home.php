<?php

include "conexao.php";

session_start();

if(!isset($_SESSION['logado'])):
    header('Location: ./index.php');
endif;

$id = $_SESSION['id_usuario'];

$sql = "SELECT * FROM user WHERE id = '$id'";

$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/general.module.css">
    <link rel="stylesheet" href="./styles/menu.module.css">
    <link rel="stylesheet" href="./styles/home.module.css">
   <script src="./js/showmenu.js"></script>
    <title>Home</title>
</head>
<body>

    <div class="conteiner">

    <!--Header Menu e Hide Menu-->
        <?php include("./menu.php") ?>

        <!--Copro do home-->
        <div class="corpo">

            <div class="dadosuser">

                <div class="dados">
                    <h3><a href="./perfil.php">Nome: <?php echo $dados['nome']; ?></a></h3>
                    <p><strong>ID:</strong> <?php echo $dados['iduser']?></p>
                    <p><strong>Bibliografia:</strong> <?php echo $dados['descricao']?></p>

                </div>

                <div class="picture">
                    <a href="./perfil"><img src="./assets/user/<?php 
                    if($dados['img'] == ""){
                        echo "user-tie-solid.svg";
                    }else {
                       echo $dados['img'];
                    }?>" alt="Profile image"></a>


                    <div class="editar">
                        <a href="./perfil.php">Editar Perfil</a>
                    </div>

                </div>
            </div>

            <div class="cards">
                <!--Card das notas-->
                <div class="card1">
                    <a href="./notas.php">
                        <h4>Notas</h4>
                        <img src="./assets/icons/table-cells-solid.svg" alt="Notas logo">
                    </a>
                    <a href="./notas.php" class="vernotas">Ver minha notas</a>
                </div>

                <!--Card da cantina-->
                <div class="card2">
                    <a href="./cantina.php">
                        <h4>Cantina</h4>
                        <img src="./assets/icons/burger-solid.svg" alt="Cantina logo">
                    </a>
                    <a href="./cantina.php" class="vercantina">O que tem na cantina</a>
                </div>
                
                <!--Card da biblioteca-->
                <div class="card3">
                    <a href="./biblioteca.php">
                        <h4>Biblioteca</h4>
                        <img src="./assets/icons/book-solid.svg" alt="Biblioteca logo">
                    </a>
                    <a href="./biblioteca.php" class="verlivros">Ver Livros</a>
                </div>
                
                <!--Card dos anuncios-->
                <div class="card4">
                    <a href="./anuncios.php">
                        <h4>Anuncios</h4>
                        <img src="./assets/icons/triangle-exclamation-solid.svg" alt="Anuncios logo">
                    </a>
                    <a href="./anuncios.php" class="veranuncios">Ver Anuncios</a>
                </div>

                <!--Cards para brevimente-->

                <div class="bvmt">
                    <div>
                        <img src="./assets/icons/triangle-exclamation-solid.svg" alt="Anuncios logo">
                        <h4>BREVEMENTE</h4>
                    </div>
                </div>
                <div class="bvmt">
                    <div>
                        <img src="./assets/icons/triangle-exclamation-solid.svg" alt="Anuncios logo">
                        <h4>BREVEMENTE</h4>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>