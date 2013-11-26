<?php 
include ('config/seguranca.php');
include ('config/conn.php');

#checa se a variavel esta definida
	if( isset($_GET['id']) ){

	#recuperando o id via GET
	$id_pizza = mysql_real_escape_string ($_GET['id']);


	#seleciona os dados para edicao
	$sql = "SELECT * FROM app_pizza where id_pizza = '$id_pizza'";

	#da o tiro
	$query = mysql_query($sql);

	//Transformamos a consulta sql em um objeto
	$pizza = mysql_fetch_object($query);
	}


?>


<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<a href="pizzas.php">Voltar</a>

<h3>Editar</h3>	

	<form id="form" name="form" method="POST" action="update.php">
	<input type="hidden" name="id" value="<?php echo $pizza->id_pizza ?>">	
	<p>Sabor: <input type="text" name="pizza_sabor" value="<?php echo $pizza->pizza_sabor ?>"></p>
	<p>Descrição: <input type="text" name="pizza_desc" value="<?php echo $pizza->pizza_desc ?>"></p>
	<p>Preço: <input type="text" name="pizza_preco" value="<?php echo $pizza->pizza_preco ?>"></p>
	<p>status: <input type="text" name="pizza_status" value="<?php echo $pizza->pizza_status ?>"></p>

	<br>
	<input type="submit" value"Enviar"></p>
	</form>


</body>
</html>

