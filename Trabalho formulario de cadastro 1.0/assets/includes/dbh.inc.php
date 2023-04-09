<?php
/* Arquivo responsavel por conectar o banco de dados ao projeto */
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "projetousuarios";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn){
    die("Falha na conexão: " . mysqli_connect_error());
}
?>