<?php


include 'includes/topo.php';

$acao=$_GET["acao"];

if($acao == "alterar"){
    include 'php_action/precuperaform.php';
    include 'Banco/dbconect.php';

    $id=$_GET["id"];

    

    $altera = ("UPDATE players set nome='$nome', funcao='$funcao', ilv='$ilv', participando='$participando' where id='$id';") or die( mysql_error() );
    mysqli_query($conn, $altera); // INSERE NO BANCO
    mysqli_commit($conn);  // EXECUTA A TRANSAÇÃO
    mysqli_close($conn);  // ENCERRA CONEXAO MySQL
    
    ?><br><br><br><br><span class='msg'><div class="alert alert-success" align="center">Player ALTERADO com Sucesso!</div></span><?php
    // REDIRECIONAMENTO AUTOMATICO EM 5 SEGUNDOS
    echo "<meta HTTP-EQUIV='refresh' CONTENT='50; URL=consulta.php'>";
}

?>


<?php
    if($acao=="seleciona"){

    include 'php_action/recuperaplayer.php';
?>
<br><br><br><br>
<div class="container" align="center">
    <br><h3><b>.:: Alterar ::.</b></h3><br>
<form  id="form1" method="POST" action="editar.php?acao=alterar&id=<?=$id?>" enctype="multipart/form-data">

    <table width="350" border="0" cellspacing="5">
        <tr>
            <td>Cód: </td>
            <td><input type="text" name="id_" value="<?= $id ?>" readonly class="form-control" /></td>
        </tr>
        <tr>
            <td>Nome: </td>
            <td><input type="text" name="nome_" value="<?= $nome ?>" class="form-control" /></td>
        </tr>
        <tr>
            <td>Funcao: </td>
            <td><input type="text" name="funcao_" value="<?= $funcao ?>" class="form-control" /></td>
        </tr>  
         <tr>
            <td>iLv: </td>
            <td><input type="text" name="ilv_" value="<?= $ilv ?>" class="form-control" /></td>
        </tr>  
         <tr>
            <td>Participando: </td>
            <td><input type="text" name="participando_" value="<?= $participando ?>" class="form-control" /></td>
        </tr>    
    
        
        <tr>
            <td colspan="2">
                <br>
                <input class="btn btn-success" type="submit" name="altera" value="Alterar" /> 
            </td>
        </tr>        
        
    </table>
    
</form>
</div>

<?php
    }
?>




<?php
//#---------------------------------------------------------

echo "<div class=\"container\" align=\"center\" ><br><br><br><h3><a href=\"consulta.php\" class=\"btn btn-primary\"> Voltar </a></h3></div>";

?>
</div>
<br><br>
