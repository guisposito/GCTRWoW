<?php
include 'includes/topo.php';


?>
<head>
  <meta charset="utf-8">
</head>

<div class="container-fluid" align="center">
  <div class="container-fluid">
    <h3 class="light"><strong>.::Novo Player::.</strong> </h3>
    <form action="php_action/create.php" method="POST">
      <div class="form-group">
      <table width="350" border="0" cellspacing="5">
        <tr>
          <td><label for="nome">Nome</label></td>
          <td><input class="form-control" type="text" name="nome" id="nome"></td>
        </tr>
      </div>

      <div class="form-group">
        <tr>
          <td><label for="funcao">Funcao</label></td>
          <td><input class="form-control" type="text" name="funcao" id="funcao"></td>
        </tr>
      </div>

      <div class="form-group">
        <tr>
          <td><label for="ilv">iLV</label></td>
          <td><input class="form-control" type="text" name="ilv" id="ilv"></td>
        </tr>
      </div>

      <div class="form-group">
        <tr>
          <td><label for="participando">Participando</label></td>
          <td><input class="form-control" type="text" name="participando" id="participando" placeholder="S,N"></td>
        </tr>
      </div>
      <br><br>
      <tr>
        <td><button type="submit" name="btn-cadastrar" class="btn btn-success">Cadastrar </button></td>

        <td><a href="consulta.php" type="submit" class="btn btn-primary">Voltar </a> </td>
      <tr>
    </table>
    </form> 

  </div>
</div>
