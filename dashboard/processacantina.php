
<?php

include "../conexao.php";

if($_FILES['imgcantina']['type'] == 'image/jpeg' || $_FILES['imgcantina']['type'] == 'image/png'){
        
    $nome_img = md5($_FILES['imgcantina']['name'].rand(1,999)).'.jpg';

    if(isset($_FILES['imgcantina'])){
        move_uploaded_file($_FILES['imgcantina']['tmp_name'], "../assets/cantina/".$nome_img); //efetua o upload do arquivo


        $nome = $_POST['nomeprod'];
        $descricao = $_POST['desccan'];
        $precoatual = $_POST['precoatual'];
        $precoantigo = $_POST['precoantigo'];

        $sqlCTN = "INSERT INTO cantina (imgproduto, nomeproduto, descricaoproduto, precoantigo, preconovo) VALUES ('$nome_img','$nome', '$descricao', '$precoantigo','$precoatual')";

        $criar = mysqli_query($connect,$sqlCTN);
    }	

        
}

mysqli_close($connect);

header('Location: ./cantina.php');

?>