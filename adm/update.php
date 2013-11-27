<?php  
include ('config/seguranca.php');
include ('config/conn.php');



#checa se a variavel esta definida
	if( isset($_POST['id']) ){
  	
  	#recuperando os valores id via POST
	$id_pizza = mysql_real_escape_string ($_POST['id']);
	$pizza_sabor = mysql_real_escape_string ($_POST['pizza_sabor']);
	$pizza_desc = mysql_real_escape_string ($_POST['pizza_desc']);
	$pizza_preco = mysql_real_escape_string ($_POST['pizza_preco']);
	$pizza_status = mysql_real_escape_string ($_POST['pizza_status']);

	#faz o update no banco
	$sql = " UPDATE app_pizza SET pizza_sabor = '$pizza_sabor', pizza_desc = '$pizza_desc', pizza_preco = '$pizza_preco', pizza_status = '$pizza_status' WHERE id_pizza = '$id_pizza'";
	#da o tiro
	$query = mysql_query($sql);


	if($query){
		echo "<h1 style='color:red;'>alterado com sucesso</h1>";
		echo "<meta http-equiv='refresh' content='2; url=pizzas.php'>";
	}
	else{

		echo mysql_error();
	}

}





?>