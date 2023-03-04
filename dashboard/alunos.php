<?php               
                    
    include '../conexao.php'; 
    
    $sql = "SELECT * FROM user";

    $resultado = mysqli_query($connect, $sql);

    $dados = mysqli_fetch_array($resultado);
    $dd = $dados['idcurso'];

    while($exibir = mysqli_fetch_array($resultado)){
        $novoiduser = 1 + $exibir['iduser'];
    }    


    //Pega dados do usuário para Exibição no perfl

    $sqlexb = "SELECT * FROM curso WHERE id = '$dd'";
    $resultadoexb = mysqli_query($connect, $sqlexb);
    $exb = mysqli_fetch_array($resultadoexb);

    

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
                  <a href="./index.php" style="color:#fff;">Sair</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <?php include('./menu.php'); ?>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                <div id="page-inner">
                        <div class="row">
                                <div class="col-md-12">
                                <h2>Adicionar alunos novos</h2>   
                                </div>
                        </div>              
                    <!-- /. ROW  -->
                    <hr />

                    
                    <div>
 
                    
                <form action="./processaaluno.php" method="post" enctype="multipart/form-data">
                    
                <!--Att
                    O Iduser será posto automaticamente começando do 230101 e concatenando ++
                -->
                <input type="text" value="<?php echo $novoiduser;?>" name="iduser" placeholder="Dif" required/>

                <label for="aluno">Nome do Aluno <span>*</span></label>
                <input type="text" name="nome" id="nome" class="nome" placeholder="Ex: João Diogo" minlength="3" maxlength="20" required/>

                <label for="bi">BI<span>*</span></label>
                <input type="text" name="bi" id="bi" class="bi" placeholder="Ex: 008565414LA041" minlength="14" maxlength="16" required/>
                
                
                <label for="classe">Classe <span>*</span></label>

                <?php

                /*Apresentar a classe*/

                $sqlcls = "SELECT * FROM classe";
                $resultadoexbcls = mysqli_query($connect, $sqlcls);
                
                ?>

                <select name="classe" class="classe" id="classe" required>
                    <option value="">---</option>
                    <?php
                        while($exibircls = mysqli_fetch_assoc($resultadoexbcls)){
                    ?>

                    <option value="<?php echo $exibircls['id'];?>"><?php echo $exibircls['classe']; ?></option>
                    <?php 
                        }
                    ?>

                </select>

                 <label for="classe">Curso <span>*</span></label>

                <?php

                /*Apresentar os curso*/

                $sqlcs = "SELECT * FROM curso";
                $resultadoexbcs = mysqli_query($connect, $sqlcs);
                
                ?>

                <select name="curso" class="curso" id="curso" required>
                    <option value="">---</option>
                    <?php
                        while($exibircs = mysqli_fetch_assoc($resultadoexbcs)){
    
                    ?>
                    <option value="<?php echo $exibircs['id'];?>"><?php echo $exibircs['curso']; ?></option>
                <?php }?>

                </select>

                <label for="descal">Descrição do aluno<span>*</span></label>
                
                <input type="text" name="descricao " id="descal" class="descal" placeholder="Descrever o aluno" minlength="5" maxlength="30" required/>
                
                <label for="imgaluno">Foto tipo passe<span>*</span></label>
                <input type="file" name="imgaluno" class="imgaluno" id="imgaluno" required>
                

                <input type="submit" name="registraraluno" class="registrar" id="registrar" value="Cadastrar aluno"/>


            </form>
            

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
