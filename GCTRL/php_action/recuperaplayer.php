<?php
// RECEBE ID via GET
$id=$_GET["id"];
       
// ABRE CONECAO COM BANCO
include("Banco/dbconect.php");

// CONSULTA POR UM ID ESPECÍFICO
$sql = "select * from players where id=$id;";

// EXECUTA CONSULTA
$res = mysqli_query($conn, $sql);

$c = mysqli_fetch_array($res);

$id = $c['id'];
$nome = $c['nome'];
$funcao = $c['funcao'];
$ilv = $c['ilv'];
$participando = $c['participando'];

// FECHA CONEXAO COM BANCO
mysqli_close($conn); 