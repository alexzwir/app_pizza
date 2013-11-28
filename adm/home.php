<?php 
	include('config/seguranca.php');
	include('config/conn.php');
?>

<!DOCTYPE html>
<html Lang="pt_BR">
<head>
	<meta charset="utf-8">
	<title>Painel Admin</title>
</head>
<body>
<a href="sair.php">
	<input type="button" value="Sair">
</a>
	<h2>Bem vindo: <?php echo $_SESSION['adm_nome'];?></h2>

	<ol>
		<a href="pizzas.php"><li>Pizzas</li></a>
		<a href="bebida.php"><li>Bebidas</li></a>
		
	</ol>
</body>
</html>

