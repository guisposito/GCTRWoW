<?php
//Conexao
require_once 'Banco/dbconect.php';

//Sessão
session_start();

//BOTAO ENVIAR
if(isset($_POST['btnEntrar'])):
	$erros = array();
	$login = mysqli_escape_string($conn, $_POST['login']);
	$senha = mysqli_escape_string($conn, $_POST['senha']);

	if(empty($login)or empty($senha)):
		$erros[] = "<div class=\"alert alert-warning"."\" role=\"alert\" align=\"center\"><br>O campo Senha/Login deve ser preenchido!!!<br></div>";
	else: 
		$sql = "SELECT login From usuarios WHERE login ='$login'"; 
		$resultado = mysqli_query($conn, $sql);
		if(mysqli_num_rows($resultado) > 0):
			$senha = md5($senha);
			$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
			$resultado = mysqli_query($conn, $sql);
				if (mysqli_num_rows($resultado) == 1 ):
					$dados = mysqli_fetch_array($resultado);
					mysqli_close($conn);
					$_SESSION['logado'] = true;
					$_SESSION['id_usuario'] = $dados['id'];
					header('Location: home.php');
				else:
					$erros[] = "<div class=\"alert alert-warning"."\" role=\"alert\" align=\"center\"><br>Usuario e senha não conferem<br></div>";			
				endif;
					
				

		else:
			$erros[] = "<div class=\"alert alert-warning"."\" role=\"alert\" align=\"center\"><br>Usuario inexistente. <br></div>";
		endif;
	endif;

endif;
?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<meta charset="utf-8">
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/folha.css">
<!------ Include the above in your HEAD tag ---------->

</head>
<body>
	<div class="wrapper fadeInDown" align="center">
		<h1><b>Login</b></h1>
		<br>

		<?php
		if(!empty($erros)):
			foreach ($erros as $erro):
				echo $erro;
			endforeach;
		endif;
		?>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
			<input type="text" name="login" class="fadeIn second" placeholder="username"> <br><br> 
			<input type="password" name="senha" class="fadeIn third" placeholder="password"><br> <br>
			<button type="submit" class="fadeIn fourth btn btn-primary" name="btnEntrar"> Entrar</button>
		<br><br>
		<a href="cadastro.html">Criar um login</a>


		</form>
	</div>
</body>
</html>