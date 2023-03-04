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
                            <h2>Adicionar livros a biblioteca</h2>   
                            </div>
                    </div>              
                    <!-- /. ROW  -->
                    <hr />

                    <!--form lib-->
                    
                <div>
                    <form action="./processalib.php" enctype="multipart/form-data" method="post">
                
                <label for="imglivros">Foto do Livro<span>*</span></label>
                <input type="file" name="imglivros" class="imglivros" id="imglivros" required>

                <label for="file">O Livro<span>*</span></label>
                <input type="file" name="livro" class="livro" id="livro" required>

                <label for="aluno">Titulo do livro<span>*</span></label>
                <input type="text" name="nome" id="nome" class="nome" placeholder="Ex: João Diogo" maxlength="20" minlength="5" required>

                <label for="desccan">Descrição do livro<span>*</span></label>
                
                <textarea name="desccan" id="desccan" class="desccan" placeholder="Descrever o produto" required></textarea>

                <label for="desp">Desponibilidade do livro<span>*</span></label>
                <select name="desp" class="desp" id="desp" required>
                    <option>Física</option>
                    <option>Virtual</option>
                    <option>Ambas</option>
                </select>

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
