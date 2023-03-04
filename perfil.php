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

//Pega dados do usuário para Exibição no perfl

$sqlexb = "SELECT * FROM curso WHERE id = '$dados[idcurso]'";
$resultadoexb = mysqli_query($connect, $sqlexb);
$exb = mysqli_fetch_array($resultadoexb);

/*Apresentar a classe*/

$sqlcls = "SELECT * FROM classe WHERE id = '$dados[idclasse]'";
$resultadoexbcls = mysqli_query($connect, $sqlcls);
$exbcls = mysqli_fetch_array($resultadoexbcls);


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
    <link rel="stylesheet" href="./styles/perfil.module.css">
    <link rel="stylesheet" href="./styles/formulario.module.css">
   <script src="./js/showmenu.js"></script>
    <title>Perfil</title>
</head>
<body>

    <div class="conteiner">

    <!--Importando o Header Menu e Hide Menu-->
    <?php include("./menu.php") ?>
        <!--Importando o Header Menu e Hide Menu-->

        <!--Copro do home-->
        <div class="corpo">

            <div class="dadosuser">

                <div class="dados">
                    <h3><a href="./perfil.php">Nome: <?php echo $dados['nome'] ?></a></h3>
                    <p><strong>ID:</strong> <?php echo $dados['iduser'] ?></p>
                    <p><strong>Bibliografia:</strong> <?php echo $dados['descricao'] ?></p>
                    <p><strong>Classe:</strong> <?php echo $exbcls['classe'] ?>º ano</p>
                    <p><strong>Curso:</strong> Técnico de <?php echo $exb['curso'] ?></p>
                    <div class="editarperfil mobile">
                        <a href="#editarperfil">Editar Perfil</a>
                    </div>
                </div>

                <div class="picture">
                    <a href="./perfil.php">
                        <img src="./assets/user/<?php
                        if($dados['img'] == ""){
                            echo 'user-tie-solid.svg';
                        } else {
                            echo $dados['img'];
                        }
                        ?>
                        " alt="Profile image"></a>

                    <div class="editarperfil desk">
                        <a href="#editarperfil">Editar Perfil</a>
                    </div>

                </div>
                
            </div>

            <div class="editarperfil container" id="editarperfil">
                
                <h3>Editar Perfil</h3>                
                <form action="./processaperfil.php" method="post" enctype="multipart/form-data">

                    <div>
                        <p>A sua descrição <span>*</span></p>
                        <textarea name="descricao" id="descricao" class="descricao" maxlength="70" min="2" placeholder="A sua descição" aria-multiselectable=""><?php echo $dados['descricao']; ?></textarea>
                    </div>
                    
                    <div>
                        <button type="submit" name="btneditar" id="btneditar" class="btneditar">Salvar</button>
                    </div>
                </form>

            </div>


        </div>
    </div>
</body>
</html>