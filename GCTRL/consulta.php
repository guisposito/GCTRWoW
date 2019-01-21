<?php
include 'includes/topo.php';

?>

<div class="container-fluid" align="center">
<br><h3><b>.:: Lista de Players!! ::.</b></h3><br>
<br>
<a class="btn btn-success" href="consulta.php">Atualizar</a>
<br>

<?php

// CHAMA CONEXAO COM BANCO MySQL  
include 'Banco/dbconect.php';


// GERA UMA STRING DA CONSULTA
$sql = "SELECT * FROM players ORDER BY funcao desc";

// EXECUTA CONSULTA
$res = mysqli_query($conn, $sql);

// TOTAL DE REGISTROS
$total = mysqli_num_rows($res);
echo "<br>Total de Registros: <b>" . $total ."</b>";


// LISTA OS REGISTROS
echo  "<div class=\"table-responsive\">";
echo "<table class=\"table table-hover  table-bordered\">";
       echo" <thead>
        <tr>
            <th scope=\"col\"> CÓD </th>
            <th scope=\"col\"> Nome </th>
            <th scope=\"col\"> Funcao </th>
            <th scope=\"col\"> iLv </th>
            <th scope=\"col\"> ATIVO </th>
            <th scope=\"col\"> FUNÇÃO </th>
        </tr>
        </thead>";

while ($c = mysqli_fetch_array($res)){
    echo "<tbody>
        <tr>";	
    echo "<td>" . $c['id'] . "</td>";
	echo "<td>" . $c['nome'] . "</td>";
	echo "<td>" . $c['funcao'] . "</td>";
	echo "<td>" .$c['ilv'] . "</td>";
    echo "<td>" .$c['participando'] . "</td>";
    echo "<td><a class=\"btn btn-primary\" href=\"editar.php?acao=seleciona&id=" . $c['id'] ."\" role=\"button\">Alterar </a>
    &nbsp;&nbsp;";


    echo '<a class=\'btn btn-danger \' href="deleta.php?acao=seleciona&id=' . $c['id'] .'" role=\'button\'>Excluir </a></td>';

}
echo "  </tbody>
        </table>
        </div>";

// FECHA CONEXÃO
mysqli_close($conn);

?>
<br><br>


</div>
