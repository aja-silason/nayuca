
<?php

include "../conexao.php";

if($_FILES['imglivros']['type'] == 'image/jpeg' || $_FILES['imglivros']['type'] == 'image/png' || $_FILES['imglivros']['type'] == 'image/webp'){
        
    $nome_img = md5($_FILES['imglivros']['name'].rand(1,999)).'.jpg';

    $nome_livro = md5($_FILES['livro']['name'].rand(1,999)).'.pdf';
    
    if(isset($_FILES['imglivros'])){
        move_uploaded_file($_FILES['imglivros']['tmp_name'], "../assets/livros/capas/".$nome_img); //efetua o upload do arquivo
        
        move_uploaded_file($_FILES['livro']['tmp_name'], "../assets/livros/".$nome_livro); //efetua o upload do arquivo

        $nome = $_POST['nome'];
        $descricao = $_POST['desccan'];
        $desponibilidade = $_POST['desp'];

        $sql = "insert into biblioteca (nomelivro, imglivro, desponibilidade,link, descricao) values ('$nome', '$nome_img','$desponibilidade', '$nome_livro','$descricao')";

        $criar = mysqli_query($connect,$sql);
    }	

        
}

mysqli_close($connect);

header('Location: ./biblioteca.php');

?>