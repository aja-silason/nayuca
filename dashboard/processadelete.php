<?php
include '../conexao.php';

if(isset($_POST['eliminar'])):

    $elm = $_POST['elimina'];

    $delete = "DELETE FROM user WHERE iduser = '$elm'";
    $query_delete = mysqli_query($connect, $delete);

    $deletent = "DELETE FROM notas WHERE iduser = '$elm'";
    $query_deletent = mysqli_query($connect, $deletent);

    header('Location: ./curso-informatica.php');

else:
    $elm = $_POST['elimina'];

    $delete = "DELETE FROM user WHERE iduser = '$elm'";
    $query_delete = mysqli_query($connect, $delete);

    $deletent = "DELETE FROM notas WHERE iduser = '$elm'";
    $query_deletent = mysqli_query($connect, $deletent);

    header('Location: ./curso-etelecom.php');

endif;

?> 