<?php

if(isset($_POST['acessarconta'])):

    $user = md5($_POST['iduser']);
    $pass = md5($_POST['passuser']);

    $erros = array();

    if($user == md5('210011') and $pass == md5('1234567890')):
        header('Location: ./painel.php');
    else:
        $erros[] = "<p class='erro2' style='color: red;'><strong style='color: red;'>ALERTA:</strong> Admin não autorizado.</p>";
    endif;

endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/general.module.css">
    <link rel="stylesheet" href="../styles/index.module.css">
    <link rel="stylesheet" href="../styles/formulario.module.css">
</head>
<body class="conteiner-general">
    <div class="conteiner">

        <div class="descricao">
            <div class="descrever">
                <h1>Admin</h1>
                <p>Acessar o Painel de controle. <strong>OBS</strong>: Se não estás autorizado por favor saia imediatamnente e entre em contacto com os administradores pelo seguinte linha telefonica +222 587 444</p>
            </div>
            <div class="allrights">
                <div class="social">
                    <a href="https://www.facebook.com/emersoncorridaoficiall" target="_blank"><img src="../assets/icons/icons8-facebook-128.svg" alt="" srcset=""></a>
                    <a href="https://www.instagram.com/emerson_corrida_official/" target="_blank"><img src="../assets/icons/icons8-instagram-128.svg" alt="" srcset=""></a>
                    
                </div>
                <p>All rights reserveds to AJASoft&copy;</p>
            </div>
        </div>
        
        <div class="logo">
            <!--Substituir por uma logo-->
            <h2><span>NAYUCA&TRADE;</span></h2>
        </div>
        <!--formulário de login-->
        <div class="formulario">
            <div class="logo2">
                <!--Substituir por uma logo-->
                <h2><span>NAYUCA&TRADE;</span></h2>
            </div>
            <h3>Dados do usuário</h3>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="user-data">
                    <?php
                        if(!empty($erros)):
                            foreach($erros as $erro):
                                echo $erro;
                            endforeach;
                        endif;
                    ?>
                </div>
                <div class="user-data">
                    <input type="text" name="iduser" id="iduser" class="iduser" placeholder="Insira o seu ID" maxlength="9" minlength="6" required>
                </div>
                <div class="user-data">
                    <input type="password" name="passuser" id="passuser" class="passuser" placeholder="Insira a sua pass" maxlength="16" minlength="8" required>
                </div>
                <div class="button">
                    <button type="submit" class="btn-entrar" name="acessarconta">Entrar</button>
                </div>
            </form>
            <div class="allrights mobile">
                <div class="social">
                    
                    <a href="https://www.facebook.com/emersoncorridaoficiall" target="_blank"><img src="../assets/icons/icons8-facebook-128.svg" alt="" srcset=""></a>
                    <a href="https://www.instagram.com/emerson_corrida_official/" target="_blank"><img src="../assets/icons/icons8-instagram-128.svg" alt="" srcset=""></a>

                </div>
                <p>All rights reserveds to Cakiza corp&copy;</p>
            </div>
        </div>
        
    </div>
</body>
</html>