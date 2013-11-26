<?php 
include ('config/seguranca.php');
include ('config/conn.php');


#checa se a variavel esta definida
if( isset($_GET['id']) ){


#recuperando o id via GET
$id_pizza = mysql_real_escape_string ($_GET['id']);

}


#seleciona no banco de dados a pizza com id recuperado anteriormente
$sql = "DELETE FROM app_pizza WHERE id_pizza = '$id_pizza'";

#da o tiro
$query = mysql_query($sql);
	
	
	if($query){

		echo "<h1 style='color:red;'>Produto deletado com sucesso</h1>";
		echo "<meta http-equiv='refresh' content='2; url=pizzas.php'>";

	}

	else{

		echo mysql_error();
	}


?>