<?php 
session_start();



if(isset($_SESSION['id_adm']) && isset($_SESSION['adm_nome'])){

	// echo "Usuário Logado";
}
else{
	header('Location:index.php');
}

?>