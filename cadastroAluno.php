<html>
<head>
    <meta charset="utf-8">    
    <title>Cadastro</title>   
</head>
<body bgcolor="#191970">
    <?php include_once('Conexao.php') ?>
    <center>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    	<br>
    <form action="inserir.php" method="POST">
    	<table bgcolor="orange">
    	<tr></tr>
    	<tr><td align="center"></td><td><h1>Cadastre-se</h1></td></tr>
    	<tr></tr>
    	<tr>
        <td>Seu CPF:</td><td><input type="text" name="n" size="40"></td>
    	</tr>
    	<tr>
        <td>Seu nome:</td><td><input type="text" name="nome" id="nome" size="40"></td>
    	</tr>
    	<tr>
        <td>Seu Sobrenome:</td><td><input type="text" name="sbn" id="sbn" size="40"></td>
    	</tr>
    	<tr>
        <td></td><td align="right"><input type="submit"></td>
    	</tr>
        </table>
    </form>
</body>
</html>