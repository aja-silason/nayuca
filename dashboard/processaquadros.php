
<?php

include "../conexao.php";

if($_FILES['imgquadro']['type'] == 'image/jpeg' || $_FILES['imgquadro']['type'] == 'image/png' || $_FILES['imgquadro']['type'] == 'image/webp'){
        
    $nome_img = md5($_FILES['imgquadro']['name'].rand(1,999)).'.jpg';

    if(isset($_FILES['imgquadro'])){
        move_uploaded_file($_FILES['imgquadro']['tmp_name'], "../assets/quadros/".$nome_img); //efetua o upload do arquivo


        $nome = $_POST['nomequadro'];
        $cargo = $_POST['cargo'];
        $descricao = $_POST['descricaoquadro'];

        $sql = "insert into quadros (nomequadro, cargo, descricaoquadro,imgquadro) values ('$nome','$cargo', '$descricao', '$nome_img')";

        $criar = mysqli_query($connect,$sql);
    }	

        
}

mysqli_close($connect);

header('Location: ./quadros.php');

?>