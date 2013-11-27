<?php 

include("config/conn.php");

?>

<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
</head>
<body>
	
<center>
<h2>Página de Login</h2>
<br>

<form action="login.php" method="POST">	
	<label for="login">Login</label>
	<input type="text" name="login" size="10" maxlegth="10" required>
	<br>
	<br>
	<label for="senha">Senha</label>
	<input type="password" name="senha" size="10" maxleght="10" required>
 <br>
 <br>
 <input type="submit" value="Enviar">

 </form>
  </center>	
 </body>
</html>

