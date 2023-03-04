<?php
	include "../conexao.php";
	
	
    $anc = $_POST['id_quadro'];
    
    $nomequadro = $_POST['nomequadro'];
    $cargo = $_POST['cargo'];

    
	$altanc = "update quadros set nomequadro = '$nomequadro', cargo = '$cargo' where id = '$anc'";
	
	$altnt = mysqli_query($connect, $altanc);

	header("Location: ./editQuadro.php?id_quadro=$anc");

?>