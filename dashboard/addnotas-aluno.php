<?php

include "../conexao.php";

//Para pegar dados do usuário para sessão

$filtro = isset($_GET['pesqclasse'])?$_GET['pesqclasse']: "";
$anc = "SELECT * FROM user where iduser like '%$filtro%'";

$nome = mysqli_query($connect,$anc);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="./assets/css/style.module.css">
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./painel.php">
                        <h1>Nayuca</h1>
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="#" style="color:#fff;">Sair</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <?php include('./menu.php');?>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                <div id="page-inner">
                
                        <div class="row">
                                <div class="col-md-12">
                                <h2>Adicionar nota</h2>   
                                </div>
                        </div>              
                    <!-- /. ROW  -->
                    <hr />

                    <!--form Cantina-->
                    
            <div>
                <?php
                    /*$user = $_POST['iduser'];
                    $iddisciplina = $_POST['iddisciplina'];
                    $idcurso = $_POST['idcurso'];
                
                    //Dados das notas
                    //Iº
                    $Ip1 = $_POST['inserirnotaI1'];
                    $Ip2 = $_POST['inserirnotaI2'];
                    $Ipt = $_POST['inserirnotaIpt'];
                
                    //IIº
                    $IIp1 = $_POST['inserirnotaII1'];
                    $IIp2 = $_POST['inserirnotaII2'];
                    $IIpt = $_POST['inserirnotaIIpt'];
                
                    //IIº
                    $IIIp1 = $_POST['inserirnotaIII1'];
                    $IIIp2 = $_POST['inserirnotaIII2'];
                    $IIIpt = $_POST['inserirnotaIIIpt'];
                
                    //Prova final
                    $pf = $_POST['inserirnotapf'];
                /*
                    echo $Ip1;
                    echo $Ip2;
                    echo $Ipt;*//*
                
                    //Alterar as notas do aluno
                    $alterarnt = "update notas set Ip1 = '$Ip1', Ip2 = '$Ip2', Ipt = '$Ipt', IIp1 = '$IIp1', IIp2 = '$IIp2', IIpt = '$Iipt', IIIp1 = '$IIIp1', IIIp2 = '$IIIp2', IIIpt = '$IIIpt', pf = '$pf' where iduser = '$user' and iddisciplina = '$iddisciplina' and idcurso = '$idcurso'";
                    
                    $altnt = mysqli_query($connect, $alterarnt);*/
                ?>

                <?php        
                    $idaluno = $_GET['id_aluno'];
                    $sqlnt = "SELECT * FROM notas WHERE iduser like '%$filtro%' and iduser like '$idaluno'";

                    $resultnt = mysqli_query($connect,$sqlnt);
/*
                    $nome = mysqli_fetch_array($resultnt);*/
                    /*
                    $peganome = "SELECT nome FROM user WHERE iduser like '$idaluno' ";*/
                                         
                ?>

                <h4><strong>ID do aluno:</strong> <?php echo $idaluno;?></h4>

                <?php
                    while($exibirnt = mysqli_fetch_array($resultnt)){        
                ?>
                
            <form action="./processarnotas.php" enctype="multipart/form-data" method="post">
                <input type="text" name="id_user" value="<?php echo $exibirnt['iduser']?>" style="display: none;"/>
                <input type="text" name="id_disciplina" value="<?php echo $exibirnt['iddisciplina']?>" style="display: none;"/>
                <input type="text" name="id_curso" value="<?php echo $exibirnt['idcurso']?>" style="display: none;"/>
                
                <!--Primeiro trimeste -->
                <h5><strong>Iº, IIº e IIIº: </strong><?php echo $exibirnt['disciplina'] ?></h5>

                <div style="display: flex;">
                    <div style="text-align: center;">
                        <h5><strong>Primeiro trimestre</strong></h5>
                        <input type="number" name="inserirnotaI1" value="<?php echo $exibirnt['Ip1']?>" style="width: 50px;" maxlength="2" required/>
                        <input type="number" name="inserirnotaI2" value="<?php echo $exibirnt['Ip2']?>" style="width: 50px;" maxlength="2" required/>
                        <input type="number" name="inserirnotaIpt" value="<?php echo $exibirnt['Ipt']?>" style="width: 50px;" maxlength="2" required/>
                    </div>
                    <!--Segundo trimeste -->
                    <div style="margin-right: 15px; margin-left: 15px; text-align: center;">
                        <h5><strong>Segundo trimestre</strong></h5>
                        <input type="number" name="inserirnotaII1" value="<?php echo $exibirnt['IIp1']?>" style="width: 50px;" maxlength="2" required/>
                        <input type="number" name="inserirnotaII2" value="<?php echo $exibirnt['IIp2']?>" style="width: 50px;" maxlength="2" required/>
                        <input type="number" name="inserirnotaIIpt" value="<?php echo $exibirnt['IIpt']?>" style="width: 50px;" maxlength="2" required/>
                    </div>
                    <!--Terceiro trimeste -->
                    <div style="text-align: center;">
                        <h5><strong>Terceiro trimestre</strong></h5>
                        <input type="number" name="inserirnotaIII1" value="<?php echo $exibirnt['IIIp1']?>" style="width: 50px;" maxlength="2" required/>
                        <input type="number" name="inserirnotaIII2" value="<?php echo $exibirnt['IIIp2']?>" style="width: 50px;" maxlength="2" required/>
                        <input type="number" name="inserirnotaIIIpt" value="<?php echo $exibirnt['IIIpt']?>" style="width: 50px;" maxlength="2" required/>
                    </div>
                    <div style="text-align: center;">
                        <h5><strong>Prova Final</strong></h5>
                        <input type="number" name="inserirnotapf" value="<?php echo $exibirnt['pf']?>" style="width: 50px;" maxlength="2" required/>
                    </div>
                
                </div>

                <button type="submit" style="color: #fff; font-weight: 500; margin-bottom: 10px; border: none; font-size: 10pt; width: 40%;" value="" >Alterar nota de <?php echo $exibirnt['disciplina'] ?></button>

                <!--<input type="submit" name="registraraluno" class="registrar" id="registrar" value="Cadastrar aluno"/>-->

            </form>
            
            <?php } mysqli_close($connect)?>
        </div>
                    
                    <!--form Cantina-->
                
                    <!-- /. ROW  -->           
                </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
    </div>

    <div class="footer">
      <div class="row">
          <div class="col-lg-12" >
              &copy;  2023 | Desenvolvido por: <a href="https://nayuca.vercel.app" style="color:#fff;" target="_blank">www.nayuca.vercel.app</a>
          </div>
      </div>
    </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
