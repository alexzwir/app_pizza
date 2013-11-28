<?php 
include ('config/seguranca.php');
include ('config/conn.php');

if (isset($_POST['pizza_sabor']) && isset($_POST['pizza_desc']) && isset($_POST['pizza_preco']) ){

	$sabor = mysql_real_escape_string($_POST['pizza_sabor']);
	$desc = mysql_real_escape_string($_POST['pizza_desc']);
	$preco = mysql_real_escape_string($_POST['pizza_preco']);
	$status = 1;

			#
	$sql = "INSERT INTO app_pizza (pizza_sabor,pizza_desc,pizza_preco,pizza_status) 
	
			#definindo o valor dos campos que serao inseridos na tabela app pizza
			VALUES ('$sabor','$desc','$preco','$status') ";
	#inseri no banco 
	$query = mysql_query($sql);
	

	if($query){

		echo "Produto Gravado com sucesso";
		header('Location:pizzas.php');

	}

	else{

		echo mysql_error();
	}

}

if (isset($_POST['bebida_marca']) && isset($_POST['bebida_desc']) && isset($_POST['bebida_preco']) ){

	$sabor = mysql_real_escape_string($_POST['bebida_marca']);
	$desc = mysql_real_escape_string($_POST['bebida_desc']);
	$preco = mysql_real_escape_string($_POST['bebida_preco']);
	$status = 1;

			#
	$sql = "INSERT INTO app_pizza (bebida_marca,bebida_desc,bebida_preco,pizza_status) 
	
			#definindo o valor dos campos que serao inseridos na tabela app pizza
			VALUES ('$sabor','$desc','$preco','$status') ";
	#inseri no banco 
	$query = mysql_query($sql);
	

	if($query){

		echo "Produto Gravado com sucesso";
		header('Location:bebidas.php');

	}

	else{

		echo mysql_error();
	}

}



?>

<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<h1>Insira a nova pizza</h1>
	<form id="form" name="form" method="POST" action="">
	<p>Sabor: <input type="text" name="pizza_sabor"></p>
	<p>Descrição: <input type="text" name="pizza_desc"></p>
	<p>Preço: <input type="text" name="pizza_preco"></p>


	<h1>Insira uma bebida</h1>
	<form id="form" name="form" method="POST" action="">
	<p>Sabor: <input type="text" name="bebida_marca"></p>
	<p>Descrição: <input type="text" name="bebida_desc"></p>
	<p>Preço: <input type="text" name="bebida_preco"></p>


	<br>
	<input type="submit" value"Enviar"></p>
	</form>



</body>
</html>