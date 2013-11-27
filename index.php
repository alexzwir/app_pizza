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
<link rel="stylesheet" type="text/css" href="style.css">
<title></title>
</head>
<body>
	<div id="pai">

		<header>
			<div id="logo">
				<img src="images/logo.gif">
				<a href=""><p>Peça Agora</p></a>
			</div>


			<nav>
				<li>
					<ul>Home</ul>
					<ul>Sobre nós</ul>
					<ul>Cardápio</ul>
					<ul>Cardápio</ul>
					<ul>Entre em Contato</ul>
				</li>
			</nav>

		</header>

		<section>
			<div>
				<h1>As melhores pizzas pra você! Peça agora sua pizza, atraves do nosso Delivery!</h1>
				<p id="cardapio">Confira o nosso cardápio</p>

			</div>

			<section>
				<h2>Confira nossas promoções</h2>
			</section>

			<section>
				<h3>Baixe nosso app e peça sua pizza aonde estiver!</h3>
			</section>


			<h1><?php echo "Pizzas: ".$nro_result_pizza; ?></h1>
			
			<!--Chamada das Pizzas -->
			<div style="background-color:#FFF;">
				<ul style="font-size:18px; color:#333; font-family: arial; list-style:none; margin:5px 0 5px 0; padding:0;">
				<?php 

				while ($pizza = mysql_fetch_assoc($query_pizza)) {
					echo "</b><br> ";
					echo '<p style="font-weight:bold">'.$pizza['pizza_sabor']."</p><br><b>  Descrição:</b> ";
					echo $pizza['pizza_desc']."<br><b>  Preço:</b> R$ ";
					echo $pizza['pizza_preco']."<br><br><hr>";
					}
				?>
				</ul>
			</div>


			<!--Chamada dos Refrigerantes -->
			<h1 style="color:#F60; font-family: arial;"><?php echo "Bebidas: ".$nro_result_bebidas; ?></h1>
			<div style="background-color: #111;">
				<ul style="font-size:18px; font-family: arial; list-style:none; margin:5px 0 5px 0; padding:0;">
				<?php 

				while ($bebida = mysql_fetch_assoc($query_bebidas)) {
					echo "<br><b>  Marca:</b> ";
					echo $bebida['bebida_marca']."<br><b>  Descrição:</b> ";
					echo $bebida['bebida_desc']."<br><b>  Preço:</b> R$ ";
					echo $bebida['bebida_preco']."<br><br><hr>";
					}
				?>

				</ul>
			</div>
		</section>

		<section>
			<a href="pedido.php">Gostou? Faça seu pedido!!!</a>	
			

		</section>

	</div>


</body>
</html>
