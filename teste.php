<?php 
include ('adm/config/seguranca.php');
include ('adm/config/conn.php');


$sql = "SELECT * FROM app_pizza";

$query = mysql_query($sql);

$nr_pizzas = mysql_num_rows($query);


 ?>