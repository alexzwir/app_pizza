<?php 
include ('config/seguranca.php');
include ('config/conn.php');


$sql = "SELECT * FROM app_bebidas";

$query = mysql_query($sql);

$nr_bebidas = mysql_num_rows($query);


 ?>


 <html>
 <head>
 	<title>Pizzas</title>
 </head>
 <body>

 	<a href="home"><input type ="button" value="voltar"></a>
 	<h3>Bebidas: <?php echo $nr_bebidas ?></h3>
 	<a href="cadastro.php"><input type="button" value="Novo Cadastro"></a>



 	<ul>

 		<?php 
 			while($bebidas = mysql_fetch_assoc($query)){
 				echo "<li>";
 				echo $bebidas['bebida_marca']." - ".$bebidas['bebida_desc']." - ".$bebidas['bebida_preco'];
				echo " - <a href='edit.php?id=".$bebidas['id_bebidas']."'>Editar</a>";
 				echo " - <a href='delete.php?id=".$bebidas['id_bebidas']."'>Excluir</a>";
 				echo "</li>";	
 			}
 		 ?>





 	</ul>
 
 </body>
 </html>