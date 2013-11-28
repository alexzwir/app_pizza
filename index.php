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
	



			<h1><?php echo "Pizzas: ".$nro_result_pizza; ?></h1>
			
			<!--Chamada das Pizzas -->
			<div>
				<ul>
				<?php 

				while ($pizza = mysql_fetch_assoc($query_pizza)) {
		
					echo "<div> Sabor: ".$pizza['pizza_sabor']."<input type='checkbox' value='".$pizza['pizza_sabor']."' class='teste' ><br>".'<p>Descrição: '.$pizza['pizza_desc'].'<br> Preço:'.$pizza['pizza_preco'].'<br></div></br>';
		
					}
				?>
				</ul>
			</div>


			<!--Chamada dos Refrigerantes -->
			<h1><?php echo "Bebidas: ".$nro_result_bebidas; ?></h1>
			<div>
				<ul>
				<?php 

				while ($bebida = mysql_fetch_assoc($query_bebidas)) {

					echo '<div> Marca:'. $bebida['bebida_marca']. '<br> Descrição:'.$bebida['bebida_desc'].'<br> Preço:'.$bebida['bebida_preco']. '</div>';    
					
					}
				?>

				</ul>
			</div>
		
			<script type="text/javascript">

				function calculatotal(){ 
					var valor = 0; 
					$('.teste').each(function(i){ 
					valor = parseInt($(this).val()) + valor;
				}); 
					document.getElementById("total").value = valor; 


			</script>



			<h3>TOTAL</h3>
			<input type="text" name="total" id="total" onBlur="javascript:calculatotal();" size="15" />
			<?php




			?>

</body>
</html>
