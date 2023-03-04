
<?php

include "../conexao.php";

if($_FILES['imganuncio']['type'] == 'image/jpeg' || $_FILES['imganuncio']['type'] == 'image/png'){
        
    $nome_img = md5($_FILES['imganuncio']['name'].rand(1,999)).'.jpg';

    if(isset($_FILES['imganuncio'])){
        move_uploaded_file($_FILES['imganuncio']['tmp_name'], "../assets/anuncios/".$nome_img); //efetua o upload do arquivo


        $titulo = $_POST['titulo'];
        $descricaoanuncio = $_POST['descricaoanuncio'];

        $sql = "insert into anuncio (titulo, descricaoanuncio, imganuncio) values ('$titulo', '$descricaoanuncio','$nome_img')";

        $criar = mysqli_query($connect,$sql);
    }	

        
} else /*if($_FILES['imganuncio']['type'] == 'image/png')*/{
        
    $nome_img = md5($_FILES['imganuncio']['name'].rand(1,999)).'.png';

    if(isset($_FILES['imganuncio'])){
        move_uploaded_file($_FILES['imganuncio']['tmp_name'], "../assets/anuncios/".$nome_img); //efetua o upload do arquivo


        $titulo = $_POST['titulo'];
        $descricaoanuncio = $_POST['descricaoanuncio'];

        $sql = "insert into anuncio (titulo, descricaoanuncio, imganuncio) values ('$titulo', '$descricaoanuncio','0')";

        $criar = mysqli_query($connect,$sql);
    }	

        
}

mysqli_close($connect);

header('Location: ./editArtigos-anuncio.php');

?>