<?php
    include "./conexao.php";

    session_start();

    if(!isset($_SESSION['logado'])):
        header('Location: ./index.php');
    endif;

    $id = $_SESSION['id_usuario'];

    //Para pegar dados do usuário para sessão
    $sql = "SELECT * FROM user WHERE id = '$id'";

    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);

    $descricao = $_POST['descricao'];

    //Alterar as notas do aluno
    $profile = "update user set descricao = '$descricao' where iduser = '$dados[iduser]' and bi = '$dados[bi]'";
    
    $altprofile = mysqli_query($connect, $profile);

    header('Location: ./perfil.php');
?>