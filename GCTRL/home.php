<?php
//conexao
require_once 'Banco/dbconect.php';

// Sessão
session_start();

//dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios where id = '$id'";
$resultado = mysqli_query($conn, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($conn);

include 'includes/topo.php';
?>


<!---<script type="text/javascript">
	alert("Seja Bem vindo(a)!!!");
</script>--->
<body>
	<div class="container-fluid">
		<div class="alert alert-success alert-dismissible">
		    <button type="button" class="close" data-dismiss="alert">&times;</button>
		    <strong>Bem vindo(a)!!!</strong>
		</div>
	</div>
	<div class="container-fluid">


			<h1>Olá <?php

				if ($dados == 0) {
					session_destroy();
					header('Location: logout.php');

				 } 
				 else {
				 	echo $dados['nome'];
				 }


				  ?></h1>
			<hr>

	</div>
</div>
