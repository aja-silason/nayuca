<?php

include "../conexao.php";

$filtro = isset($_GET['pesqclasse'])?$_GET['pesqclasse']: "";
$anc = "SELECT * FROM user where idclasse like '%$filtro%'";

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
                                <h2>Escolha a classe</h2>   
                                </div>
                        </div>              
                    <!-- /. ROW  -->
                    <hr />

                    <!--form Cantina-->
                    
                    <div>
            <form action="" method="get">
                
                <select name="pesqclasse">
                    <?php        
                    
                    $sqlclasse = "SELECT * FROM classe WHERE idcurso = 2";
                    $resultclasse = mysqli_query($connect,$sqlclasse);
                                            
                        while($exibirClasse = mysqli_fetch_array($resultclasse)){
                    ?>
                    <option value="<?php echo $exibirClasse['id']?>"><?php echo $exibirClasse['classe'] ?></option>
                    <?php } ?>
                </select>

                <!--<input type="search" name="pesquisar" value="</?php echo $exibir['classe']?>" style=""/>-->
                <button type="submit">Filtrar classe</button>
            </form>

            <div class="nt-nt" style="display: flex; flex-direction: column;">
                <?php        
                 
                 $sqluser = "SELECT * FROM user WHERE idclasse like '%$filtro%' and idcurso = '2'";
                 $resultuser = mysqli_query($connect,$sqluser);
                                         
                ?>

                <br>
                
               <?php
               switch($filtro):
                case 5:
                    echo '<h3>Filtrando para alunos da 10 ª classe</h3>';
                break;
                case 6:
                    echo '<h3>Filtrando para alunos da 11 ª classe</h3>';
                break;
                case 7:
                    echo '<h3>Filtrando para alunos da 12 ª classe</h3>';
                break;
                case 8:
                    echo '<h3>Filtrando para alunos da 13 ª classe</h3>';
                break;
                endswitch;

               ?>
                
                <?php
                    while($exibiruser = mysqli_fetch_array($resultuser)){
                ?>
                <form action="./addnotas-aluno.php" method="get">

                    <input type="text" value="<?php echo $exibiruser['iduser']?>" style="display: none;" name="id_aluno">

                    <p style="display: flex; justify-content: space-around;"><strong>ID Aluno:</strong> <?php echo $exibiruser['iduser'] ?> | <strong>Nome:</strong> <?php echo $exibiruser['nome'] ?> | <strong>curso:</strong>  <?php if($exibiruser['idcurso'] == 1){
                        echo 'Informática';
                    } else {
                        echo 'E.Telecom';
                    }
                    ?>
                    
                    <input type="submit" value="Add" style="width: 100px; margin: 5px; border-bottom: none; border-radius: 10px; height: 40px; background-color: rgba(127,235,127,0.5); color: green;">
                </p>
                </form>
                <form action="./processadelete.php" method="post">
                    <input type="text" name="elimina" value="<?php echo $exibiruser['iduser']?>" style="display: none;">

                    <input type="submit" value="Eliminar" name="eliminaretelecom" style="width: 95%; margin: 5px; border-bottom: none; border-radius: 10px; height: 40px; background-color: rgb(236,100,100); color: red;">
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
