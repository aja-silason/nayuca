<?php
include '../conexao.php';

    $elm = $_POST['elimina'];

    $delete = "DELETE FROM anuncio WHERE idanuncio = '$elm'";
    $query_delete = mysqli_query($connect, $delete);

    header('Location: ./editArtigos-anuncio.php')

?> 