<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
//encerramento de sessão



session_start();
session_unset();
session_destroy();

echo"<span class='msg'><div class=\"alert alert-danger\" align=\"center\">Você está sendo redirecionado !!!</span><br><br></div>";
				    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
				  
					echo "<meta HTTP-EQUIV='refresh' CONTENT='2; URL=index.php'>";




?>