<?php
	include "../conexao.php";
	
	
    $anc = $_POST['id_lib'];
    
    $nomelivro = $_POST['nomelivro'];

    
	$altanc = "update biblioteca set nomelivro = '$nomelivro' where id = '$anc'";
	
	$altnt = mysqli_query($connect, $altanc);

	header("Location: ./editLib.php?id_lib=$anc");

?>