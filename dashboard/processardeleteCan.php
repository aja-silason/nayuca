<?php
include '../conexao.php';

    $elm = $_POST['elimina'];

    $delete = "DELETE FROM cantina WHERE idproduto = '$elm'";
    $query_delete = mysqli_query($connect, $delete);

    header('Location: ./editArtigos-cantina.php')

?> 