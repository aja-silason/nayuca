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
            <?php include('./menu.php'); ?>
        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
                <div id="page-inner">
                        <div class="row">
                                <div class="col-md-12">
                                <h2>Quadros</h2>   
                                </div>
                        </div>              
                    <hr />
                    
                    <div>

            <div class="nt-nt" style="display: flex; flex-direction: column;">
                <?php        
                 
                 $sqluser = "SELECT * FROM quadros";
                 $resultuser = mysqli_query($connect,$sqluser);
                                         
                ?>

                <br>
                
                <?php
                    while($exibiruser = mysqli_fetch_array($resultuser)){
                ?>
                <form action="./editQuadro.php" method="get">

                    <input type="text" value="<?php echo $exibiruser['id']?>" style="display: none;" name="id_quadro">

                    <p style="display: flex; justify-content: space-around;"><img src="../assets/quadros/<?php echo $exibiruser['imgquadro'] ?>" style="width: 50px; height: 50px;"> <strong>Nome:</strong> <?php echo $exibiruser['nomequadro'] ?>  <strong>Cargo:</strong> <?php echo $exibiruser['cargo'] ?>
                    
                    <input type="submit" value="Editar" style="width: 100px; margin: 5px; border-bottom: none; border-radius: 10px; height: 40px; background-color: rgba(127,235,127,0.5); color: green;">

                </p>
                    
                </form>
                <form action="./processardeleteQdo.php" method="post">
                    <input type="text" name="elimina" value="<?php echo $exibiruser['id']?>" style="display: none;">

                    <input type="submit" value="Eliminar" name="eliminar" style="width: 95%; margin: 5px; border-bottom: none; border-radius: 10px; height: 40px; background-color: rgb(236,100,100); color: red;">
                </form>

                <?php } mysqli_close($connect);?>
            </div>
            
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