<?php
	include "../conexao.php";
	
	//Dados da disciplina e do usuário
    $anc = $_POST['id_produto'];
    //Dados das notas
    //Iº
    $nomeprod = $_POST['nomeprod'];
    $oldPrice = $_POST['oldPrice'];
    $newPrice = $_POST['newPrice'];

    //Alterar as notas do aluno
	$altanc = "update cantina set nomeproduto = '$nomeprod', precoantigo = '$oldPrice', preconovo = '$newPrice' where idproduto = '$anc'";
	
	$altnt = mysqli_query($connect, $altanc);

	header("Location: ./editCantina.php?id_produto=$anc");

?>