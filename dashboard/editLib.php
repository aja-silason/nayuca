<?php

include "../conexao.php";

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
                                <h2>Editar Produto</h2>   
                                </div>
                        </div>              
                    <!-- /. ROW  -->
                    <hr />

                    <!--form Cantina-->
                    
            <div>
                <a href="./editArtigos-lib.php">Voltar</a>

                <?php        
                    $idlib = $_GET['id_lib'];
                    $sqlnt = "SELECT * FROM biblioteca WHERE id like '$idlib'";

                    $resultnt = mysqli_query($connect,$sqlnt);
                                         
                ?>

                <h4><strong>Livro nº:</strong> <?php echo $idlib;?></h4>

                <?php
                    while($exibirnt = mysqli_fetch_array($resultnt)){        
                ?>
                
            <form action="./processarlib.php" enctype="multipart/form-data" method="post">

                <input type="text" name="id_lib" value="<?php echo $exibirnt['id']?>" style="display: none;"/>

                <div style="display: flex;">
                    <div style="">
                        <h5><strong>Actualizar o título do livro</strong></h5>
                        <input type="text" name="nomelivro" value="<?php echo $exibirnt['nomelivro']?>" style="width: 170%;" maxlength="30"/></br>
                    </div>
                
                </div>

                <button type="submit" style="color: #fff; font-weight: 500; margin-bottom: 10px; border: none; font-size: 10pt; width: 40%;" value="" >Alterar o titulo</button>

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
