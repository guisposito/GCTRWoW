<?php
include 'includes/topo.php';

$acao=$_GET["acao"];

if($acao == "deletar"){
    //include 'php_action/precuperaform.php';
    include 'Banco/dbconect.php';
    $id=$_GET["id"];
    
    $altera = ("DELETE FROM players WHERE id='$id';");
    mysqli_query($conn, $altera); // INSERE NO BANCO
    mysqli_commit($conn);  // EXECUTA A TRANSAÇÃO
    mysqli_close($conn);  // ENCERRA CONEXAO MySQL

    ?><br><br><br><br><br><span class='msg'><div class="alert alert-success" align="center">.:: Player DELETADO com Sucesso ! ::.</div></span><?php

    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
    echo "<meta HTTP-EQUIV='refresh' CONTENT='50; URL=consulta.php'>";
}

?>


<?php
    if($acao=="seleciona"){

    include 'php_action/recuperaplayer.php';
?>
<div class="container-fluid" align="center">
    <br><br><br><br><br><br>
    <br><h3><b>.:: Deleta ::.</b></h3><br>
<form id="form1" method="POST" action="deleta.php?acao=deletar&id=<?=$id?>" enctype="multipart/form-data">

    <table width="350" border="0" cellspacing="5">
        <tr>
            <td>Cód: </td>
            <td><?= $id ?></td>
        </tr>
        <tr>
            <td>Nome: </td>
            <td><?= $nome ?></td>
        </tr>
        <tr>
            <td>Funcao: </td>
            <td><?= $funcao ?></td>
        </tr>    
        
        <tr>
            <td colspan="2">
                <br>
                <input class="btn btn-danger" type="submit" name="deletar" value="Deletar" /> 
            </td>
        </tr>        
        
    </table>
    
</form>
</div>

<?php
    }
?>




<?php


echo "<div class=\"container-fluid\" align=\"center\"<br><br><br><h3><b><a href=\"consulta.php\" class=\"btn btn-primary\"> Voltar </a></b></h3>";


?>
</div>
<br><br>