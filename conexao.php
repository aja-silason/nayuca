<?php

$servername = "127.0.0.1";
$username = "root";
$password = "";
$basededados = "nayuca";

$connect = mysqli_connect($servername, $username, $password, $basededados);

if(mysqli_connect_error()):
    echo "Falha na conexão com o servidor".mysqli_connect_error();
endif;


?>