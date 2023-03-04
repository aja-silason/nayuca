<?php
	include "../conexao.php";
	
	//Dados da disciplina e do usuário
    $anc = $_POST['id_anuncio'];
    //Dados das notas
    //Iº
    $alt = $_POST['alttitulo'];

    //Alterar as notas do aluno
	$altanc = "update anuncio set titulo = '$alt' where idanuncio = '$anc'";
	
	$altnt = mysqli_query($connect, $altanc);

	header("Location: ./editAnuncio.php?id_anuncio=$anc");

?>