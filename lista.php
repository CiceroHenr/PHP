<? php include_once('Conexao.php');?>
<html>
<head>
	<title>Lista</title>
</head>
<body>
	<center>
<table border="1px">
	<tr>
		<td><h1>CPF</h1></td>
		<td><h1>Nome</h1></td>
		<td><h1>Sobrenome</h1></td>
		<td><h1>Excluir</h1></td>
		<td><h1>Editar</h1></td>
	</tr>
	<?php
		include_once('Conexao.php');
		$sql ='SELECT * FROM usuario';
		$r = mysqli_query($con, $sql);
		if ($r) {
			while ($result = mysqli_fetch_array($r)) {
	?>
				<tr>
					<td><?php echo $result['cpf']; ?></td>
					<td><?php echo $result['nome']; ?></td>
					<td><?php echo $result['sobrenome']; ?></td>
					<td><a href="deletar.php?cpf=<?php echo $result['cpf']?>"><img src="excluir.png" width="8%"></a></td>
					<td><a href="editar.php?cpf=<?php echo $result['cpf']?> & nome=<?php echo $result['nome'] ?> & sobrenome=<?php echo $result['sobrenome'] ?>"><img src="editar.png" width="8%"></a></td>
				</tr>	  
	<?php
			}  
		}
	?>

</table>
	</center>
</body>
</html>