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
                                <h2>Adicionar item na cantina</h2>   
                                </div>
                        </div>              
                    <!-- /. ROW  -->
                    <hr />

                    <!--form Cantina-->
                    
                    <div>
            <form action="./processacantina.php" method="post" enctype="multipart/form-data">
                
                <label for="imgcantina">Foto do Produto<span>*</span></label>
                <input type="file" name="imgcantina" class="imgcantina" id="imgcantina">

                <label for="nomeprod">Nome do produto<span>*</span></label>
                <input type="text" name="nomeprod" id="nomeprod" class="nomeprod" placeholder="Ex: Jo??o Diogo">

                <label for="desccan">Descri????o do produto<span>*</span></label>
                
                <textarea name="desccan" id="desccan" class="desccan" placeholder="Descrever o produto" maxlength="90" minlength="3" ></textarea>

                <label for="precoatual">Pre??o actual<span>*</span></label>
                <input type="number" name="precoatual" id="precoatual" class="precoatual" placeholder="Ex: 500">

                <label for="precoantigo">Pre??o antigo<span>*</span></label>
                <input type="number" name="precoantigo" id="precoantigo" class="precoantigo" placeholder="Ex: 600">

                <button type="submit" name="registrarcantina" class="registrar" id="registrar">Enviar anuncio</button>

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
