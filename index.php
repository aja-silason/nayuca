<?php

require_once 'conexao.php';

session_start();

/* Para manter o inicio de sessão organizado*/
if(isset($_SESSION['logado'])):
    header('Location: home.php');
endif;

if(isset($_POST['acessarconta'])):
    $erros = array();
    $idlogin = mysqli_escape_string($connect, $_POST['iduser']);
    $pass = mysqli_escape_string($connect, $_POST['passuser']);

    if(empty($idlogin) or empty($pass)):
        $erros[] = "<p class='erro3'>Atenção: Erro no login tente novamente.</p>";
    
    else:
        $sql = "SELECT iduser FROM user WHERE iduser='$idlogin'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0 ):
            $sql = "SELECT * FROM user WHERE iduser = '$idlogin' AND bi = '$pass'";
            $resultado = mysqli_query($connect, $sql);
            
            if(mysqli_num_rows($resultado) == 1):
                $dados = mysqli_fetch_array($resultado);
                mysqli_close($connect);   

                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];

                header('Location: ./home.php');

                /*if($_SESSION['id_usuario'] == 1):
                    header('Location: ./dashboard/index.php');
                endif;*/

            else:
                $erros[] = "<p class='erro'>Usuário não existe, crie uma conta se não tiveres uma.</p>";

            endif;

        else:
            $erros[] = "<p class='erro2'>Usuário não existe, crie uma conta se não tiveres uma.</p>";
        endif;

    endif;
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/general.module.css">
    <link rel="stylesheet" href="./styles/index.module.css">
    <link rel="stylesheet" href="./styles/formulario.module.css">
</head>
<body class="conteiner-general">
    <div class="conteiner">

        <div class="descricao">
            <div class="descrever">
                <h1>CONTA ALUNO</h1>
                <p>Certifique-se que tem os dados correctos para acessar a tua conta, caso não possua entre em contacto com a direção do <i>Complexo Acadêmico Nayuca</i> ao fim de obter a sua conta de estudante.</p>
            </div>
            <div class="allrights">
                <div class="social">
                    <a href="https://www.facebook.com/emersoncorridaoficiall" target="_blank"><img src="./assets/icons/icons8-facebook-128.svg" alt="" srcset=""></a>
                    <a href="https://www.instagram.com/emerson_corrida_official/" target="_blank"><img src="./assets/icons/icons8-instagram-128.svg" alt="" srcset=""></a>
                    
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
                    
                    <a href="https://www.facebook.com/emersoncorridaoficiall" target="_blank"><img src="./assets/icons/icons8-facebook-128.svg" alt="" srcset=""></a>
                    <a href="https://www.instagram.com/emerson_corrida_official/" target="_blank"><img src="./assets/icons/icons8-instagram-128.svg" alt="" srcset=""></a>

                </div>
                <p>All rights reserveds to Cakiza corp&copy;</p>
            </div>
        </div>
        
    </div>
</body>
</html>