<?php 
include ('config/seguranca.php');
include ('config/conn.php');


$sql = "SELECT * FROM app_pizza";

$query = mysql_query($sql);

$nr_pizzas = mysql_num_rows($query);


 ?>


 <html>
 <head>
 	<title>Pizzas</title>
 </head>
 <body>

 	<a href="home"><input type ="button" value="voltar"></a>
 	<h3>Pizzas: <?php echo $nr_pizzas ?></h3>
 	<a href="cadastro.php"><input type="button" value="Novo Cadastro"></a>



 	<ul>

 		<?php 
 			while($pizza = mysql_fetch_assoc($query)){
 				echo "<li>";
 				echo $pizza['id_pizza']." - ".$pizza['pizza_sabor']." - ".$pizza['pizza_preco'];
				echo " - <a href='edit.php?id=".$pizza['id_pizza']."'>Editar</a>";
 				echo " - <a href='delete.php?id=".$pizza['id_pizza']."'>Excluir</a>";
 				echo "</li>";	
 			}
 		 ?>





 	</ul>
 
 </body>
 </html>