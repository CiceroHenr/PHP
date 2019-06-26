<?php
	include_once('Conexao.php');
	$c = $_GET["cpf"];
	$sql = "DELETE FROM usuario WHERE cpf = '$c'";
	$r = mysqli_query($con, $sql);
	header('Location: lista.php');
?>