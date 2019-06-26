<?php
include_once('Conexao.php');
$cpf = $_POST['n'];
$nome = $_POST['nome'];
$sbn = $_POST['sbn'];
$sql = "INSERT INTO usuario (cpf, nome, sobrenome) VALUES ('$cpf','$nome','$sbn')";
mysqli_query($con, $sql);
header("Location: lista.php");
?>