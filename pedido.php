<?php

include('config/conn.php');

	$sql_pizza = "SELECT * FROM app_pizza";
	$sql_bebidas = "SELECT * FROM app_bebidas";
	$query_pizza = mysql_query($sql_pizza);
	$query_bebidas = mysql_query($sql_bebidas);

	$nro_result_pizza = mysql_num_rows($query_pizza);
	$nro_result_bebidas = mysql_num_rows($query_bebidas);
	
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styleP.css">
	<title></title>
</head>
<body>
	<h1>Faça seu Pedido!</h1>
	<h3>Fique ligado nas promoções semanais que a +Pizza tem para você!</h3>


	<section>
		<h2>Entradas</h2>
		<p>Escolha sua </p>

	</section>

	<section>
		<h2>Pizzas</h2>
		<p>Escolha a sua pizza</p>

			<form>

				<input type="radio" name="" value="">Broto<br><input type="radio" name="" value="">Broto<br><input type="radio" name="" value="">Broto<br><input type="radio" name="" value="">Broto<br>
			

			<!--Tamanho da pizza -->
			<p>Qual será o tamanho?</p>
			<input type="radio" name="" value="">Broto<br>
			<input type="radio" name="" value="">Broto 2 sabores<br>
			<input type="radio" name="" value="">Média<br>
			<input type="radio" name="" value="">Média 2 sabores<br>
			<input type="radio" name="" value="">Grande<br>
			<input type="radio" name="" value="">Grande 2 sabores<br>

			<!-- Massa da Pizza-->
			<p>Qual será a massa?</p>
			<input type="radio" name="" value="">Massa Fina<br>
			<input type="radio" name="" value="">Massa Tradicional<br>
			<input type="radio" name="" value="">Massa Pan<br>



			<!-- Escolha o sabor -->
			<p>Qual será o sabor?</p>
			<input type="radio" name="" value="">Mussarela<br>
			<input type="radio" name="" value="">Calabresa<br>
			<input type="radio" name="" value="">Alho<br>
			<input type="radio" name="" value="">Portuguesa<br>



				<div id="teste">

				<?php 

				while ($pizza = mysql_fetch_assoc($query_pizza)) {
					echo "<input type='radio'>".$pizza['pizza_sabor']." Preço: ".$pizza['pizza_preco']."<br>"; 
					}
				?>
				

				</div>
				


			</form>	
	</section>


	<section>
		<h2>Pizzas Doces</h2>

	</section>

	<section>
		<h2>Refrigerantes</h2>

	</section>


</body>
</html>