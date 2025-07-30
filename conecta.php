<?php

$servidor = "localhost";
$user = "root";
$pass = "";
$banco = "contato";


$conexao = new mysqli($servidor,$user,$pass,$banco);


// carcteres 
mysqli_set_charset($conexao, "UTF8");
// fuso horarrio
date_default_timezone_set("America/Sao_Paulo");

// verificando conexão

if(mysqli_connect_errno()){
    die("erro ao concetar". mysqli_connect_error());
}
?>