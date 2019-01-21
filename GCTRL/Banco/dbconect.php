<?php
//conexao com banco de dados

$servername = "localhost";
$username = "gui";
$password = "darck12";
$nomebanco = "test";

$conn = mysqli_connect($servername, $username, $password, $nomebanco);

if(mysqli_connect_error()):
	echo "Falha na conexao: " .mysqli_connect_error();

endif;

?>