<?php
include("conecta.php");

$recnome=$_GET["fnome"];
$recemail=$_GET["femail"];
$recstatus=$_GET["fstatus"];

mysqli_query($conexao, "insert into
alunos.aluno (nome, email, stts) values ('$recnome',
'$recemail', '$recstatus')");

header("location:lista.php");

?>