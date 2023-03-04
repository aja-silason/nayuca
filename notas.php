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
    <link rel="stylesheet" href="./styles/notas.module.css">
   <script src="./js/showmenu.js"></script>
    <title>Notas</title>
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

                </div>

                <div class="picture">
                    <a href="./perfil"><img src="./assets/user/<?php
                    if($dados['img'] == ""){
                        echo 'user-graduate-solid.svg';
                    } else {
                        echo $dados['img'];
                    }
                    ?>" alt="Profile image"></a>

                </div>
            </div>

            <div class="calendario">

                <table class="desktop">
                    <thead>
                        <tr>
                            <th>Id do aluno:</th>
                            <th><?php echo $dados['iduser']?></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th>Disciplínas</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Periodo</th>
                            <th>Trimestral</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="trimestres">
                            <th></th>
                            <!--Primeiro trimestre-->
                            <th>Iº P1</th>
                            <th>Iº P2</th>
                            <th>Iº PT</th>
                            <th>Iº Média</th>
                                                                        <!--Segundo trimestre-->
                            <th>IIº P1</th>
                            <th>IIº P2</th>
                            <th>IIº PT</th>
                            <th>IIº Média</th>
                                                                        <!--Terceiro trimestre-->
                            <th>IIIº P1</th>
                            <th>IIIº P2</th>
                            <th>IIIº PT</th>
                            <th>IIIº Média</th>
                                                                        <!--Classificação anual-->
                            <th>PF</th>
                            <th>CF</th>
                            <th>Estado</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    
                        <!--Dados de cada disciplina-->
                        
                        <?php
                        
                        //apresentar as notas Apresentar a disciplinas
                        $sqlnt = "SELECT * FROM notas WHERE iduser = '$dados[iduser]' AND idclasse = '$dados[idclasse]'";
                        $resultnt = mysqli_query($connect, $sqlnt);

                        while($exint = mysqli_fetch_array($resultnt)){

                        ?>
                        
                        <tr>
                            <!-- Área rezervada para o calculo da média do aluno-->
                            <?php
                                //N, 1T
                                
                                $n1 = $exint['Ip1'];
                                $n2 = $exint['Ip2'];
                                $n3 = $exint['Ipt'];
                                $media1 = ($n1 + $n2 + $n3)/3;
                                $media1 = number_format($media1);
                                

                                //N, 2T
                                $nII1 = $exint['IIp1'];
                                $nII2 = $exint['IIp2'];
                                $nII3 = $exint['IIpt'];
                                $media2 = ($nII1 + $nII2 + $nII3)/3;
                                $media2 = number_format($media2);

                                //N, 3T
                                $nIII1 = $exint['IIIp1'];
                                $nIII2 = $exint['IIIp2'];
                                $nIII3 = $exint['IIIpt'];
                                $media3 = ($nIII1 + $nIII2 + $nIII3)/3;
                                $media3 = number_format($media3);

                                //Prova final
                                $pf = $exint['pf'];

                                //Classificação final
                                $mediaTotal = ($media1 + $media2 + $media3)/3;
                                $cf = ($mediaTotal + $pf)/2;
                                $cf = number_format($cf);
                            
                            ?>

                            <!-- Área rezervada para o calculo da média dos alunos-->

                            <th><?php echo $exint['disciplina']; ?></th>

                            <th><?php echo $exint['Ip1'] ?></th>
                            <th><?php echo $exint['Ip2'] ?></th>
                            <th><?php echo $exint['Ipt'] ?></th>
                            <th>
                                <?php 
                                    if($media1 >= 10){
                                        echo "<p style='color: green;'>$media1</p>";
                                    } else if($media1 < 10){
                                        echo "<p style='color: red;'>$media1</p>";
                                    } 
                                ?>
                            </th>

                            <th><?php echo $exint['IIp1'] ?></th>
                            <th><?php echo $exint['IIp2'] ?></th>
                            <th><?php echo $exint['IIpt'] ?></th>
                            <th>
                                <?php 
                                    if($media2 >= 10){
                                        echo "<p style='color: green;'>$media2</p>";
                                    } else if($media2 < 10){
                                        echo "<p style='color: red;'>$media2</p>";
                                    } 
                                ?>
                            </th>
                            
                            <th><?php echo $exint['IIIp1'] ?></th>
                            <th><?php echo $exint['IIIp2'] ?></th>
                            <th><?php echo $exint['IIIpt'] ?></th>
                            <th>
                                <?php 
                                    if($media3 >= 10){
                                        echo "<p style='color: green;'>$media3</p>";
                                    } else if($media3 < 10){
                                        echo "<p style='color: red;'>$media3</p>";
                                    } 
                                ?>
                            </th>

                            <th>
                                <?php
                                    if($pf >= 10){
                                        echo "<p style='color: green;'>$pf</p>";
                                    } else if($pf < 10){
                                        echo "<p style='color: red;'>$pf</p>";
                                    }  
                                ?>
                            </th>
                            <th>
                                <?php 
                                    if($cf >= 10){
                                        echo "<p style='color: green;'>$cf</p>";
                                    } else if($cf < 10){
                                        echo "<p style='color: red;'>$cf</p>";
                                    } 
                                ?>
                            </th>
                            <th>
                                <?php 
                                    if($cf >= 10){
                                        echo "<p style='color: green;'>Apto</p>";
                                    } else if($cf < 10){
                                        echo "<p style='color: red;'>N/Apto</p>";
                                    } 
                                ?>
                            </th>

                        </tr>
                        <?php }?>

                    </tbody>

                </table>

                <table class="mobile">
                    
                    <thead>
                        <tr>
                            <th>ID:</th>
                            <th><?php echo $dados['iduser']?></th>
                            <th>Periodo</th>
                            <th>Trimestral</th>
                            <th></th>
                        </tr>  
                        <tr>
                            <th>Disciplínas</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th>Estado</th>
                        </tr>
                        <tr class="trimestres">
                            <th></th>
                            <th>MédiaIº</th>
                            <th>MédiaIIº</th>
                            <th>MédiaIIº</th>
                            <th>CF</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--Dados de cada disciplina-->
                        
                        <?php
                        
                        //apresentar as notas Apresentar a disciplinas
                        $sqlnt = "SELECT * FROM notas WHERE iduser = '$dados[iduser]' AND idclasse = '$dados[idclasse]'";
                        $resultnt = mysqli_query($connect, $sqlnt);

                        while($exintmb = mysqli_fetch_array($resultnt)){

                        ?>

                        <tr>
                            <!-- Área rezervada para o calculo da média do aluno-->
                            <?php
                                //N, 1T
                                
                                $nmb1 = $exintmb['Ip1'];
                                $nmb2 = $exintmb['Ip2'];
                                $nmb3 = $exintmb['Ipt'];
                                $mediamb1 = ($nmb1 + $nmb2 + $nmb3)/3;
                                $mediamb1 = number_format($mediamb1);
                                

                                //N, 2T
                                $nmbII1 = $exintmb['IIp1'];
                                $nmbII2 = $exintmb['IIp2'];
                                $nmbII3 = $exintmb['IIpt'];
                                $mediamb2 = ($nmbII1 + $nmbII2 + $nmbII3)/3;
                                $mediamb2 = number_format($mediamb2);

                                //N, 3T
                                $nmbIII1 = $exintmb['IIIp1'];
                                $nmbIII2 = $exintmb['IIIp2'];
                                $nmbIII3 = $exintmb['IIIpt'];
                                $mediamb3 = ($nmbIII1 + $nmbIII2 + $nmbIII3)/3;
                                $mediamb3 = number_format($mediamb3);

                                //Prova final
                                $pfmb = $exintmb['pf'];

                                //Classificação final
                                $mediaTotalmb = ($mediamb1 + $mediamb2 + $mediamb3)/3;
                                $cfmb = ($mediaTotalmb + $pfmb)/2;
                                $cfmb = number_format($cfmb);
                            
                            ?>

                            <!-- Área rezervada para o calculo da média dos alunos-->
                            <th><?php echo $exintmb['disciplina']; ?></th>
                            <th>
                                <?php 
                                    if($mediamb1 >= 10){
                                        echo "<p style='color: green;'>$mediamb1</p>";
                                    } else if($mediamb1 < 10){
                                        echo "<p style='color: red;'>$mediamb1</p>";
                                    } 
                                ?>
                            </th>
                            <th>
                                <?php 
                                    if($mediamb2 >= 10){
                                        echo "<p style='color: green;'>$mediamb2</p>";
                                    } else if($mediamb2 < 10){
                                        echo "<p style='color: red;'>$mediamb2</p>";
                                    } 
                                ?>
                            </th>
                            <th>
                                <?php 
                                    if($mediamb3 >= 10){
                                        echo "<p style='color: green;'>$mediamb3</p>";
                                    } else if($mediamb3 < 10){
                                        echo "<p style='color: red;'>$mediamb3</p>";
                                    } 
                                ?>
                            </th>
                            
                            <th>
                                <?php 
                                    if($cfmb >= 10){
                                        echo "<p style='color: green;'>Apto</p>";
                                    } else if($cfmb < 10){
                                        echo "<p style='color: red;'>N/Apto</p>";
                                    } 
                                ?>
                            </th>
                        </tr>
                        <?php } mysqli_close($connect) ?>
                        
                    </tbody>
                
                </table>

            </div>


        </div>
    </div>
</body>
</html>