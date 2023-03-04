<?php
	include "../conexao.php";
	
	//Dados da disciplina e do usuário
    $user = $_POST['id_user'];
    $iddisciplina = $_POST['id_disciplina'];
    $idcurso = $_POST['id_curso'];

    //Dados das notas
    //Iº
    $Ip1 = $_POST['inserirnotaI1'];
    $Ip2 = $_POST['inserirnotaI2'];
    $Ipt = $_POST['inserirnotaIpt'];

    //IIº
    $IIp1 = $_POST['inserirnotaII1'];
    $IIp2 = $_POST['inserirnotaII2'];
    $IIpt = $_POST['inserirnotaIIpt'];

    //IIº
    $IIIp1 = $_POST['inserirnotaIII1'];
    $IIIp2 = $_POST['inserirnotaIII2'];
    $IIIpt = $_POST['inserirnotaIIIpt'];

    //Prova final
    $pf = $_POST['inserirnotapf'];

    //Alterar as notas do aluno
	$alterarnt = "update notas set Ip1 = '$Ip1', Ip2 = '$Ip2', Ipt = '$Ipt', IIp1 = '$IIp1', IIp2 = '$IIp2', IIpt = '$IIpt', IIIp1 = '$IIIp1', IIIp2 = '$IIIp2', IIIpt = '$IIIpt', pf = '$pf' where iduser = '$user' and iddisciplina = '$iddisciplina'";
	
	$altnt = mysqli_query($connect, $alterarnt);

	header("Location: ./addnotas-aluno.php?id_aluno=$user");

?>