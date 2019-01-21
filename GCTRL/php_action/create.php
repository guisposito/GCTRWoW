<?php
//conn
require_once '../Banco/dbconect.php';
include '../includes/topo.php';


//evitar hacker...
function clear($input){
	global $conn;
	//sql
	$var = mysqli_escape_string($conn, $input);
	//xss
	$var = htmlspecialchars($var);
	return $var;

}
if(isset($_POST['btn-cadastrar'])):
	//require_once '../banco/conecta.php';
	$nome = clear($_POST['nome']);
	$funcao = clear($_POST['funcao']);
	$ilv =  clear($_POST['ilv']);
	$participando = clear($_POST['participando']);
	$sql = ("INSERT INTO players(nome, funcao, ilv, participando) VALUES ('$nome','$funcao', '$ilv', '$participando')");

	if(mysqli_query($conn, $sql)):
		?><br><br><br><br><span class='msg'><div class="alert alert-success" align="center">Player CADASTRADO com Sucesso!</div></span><?php
    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5; URL=../consulta.php'>";

	else:
		echo "Erro ao cadastrar";
		header('Location: ../home.php');
	endif;

endif;

?>