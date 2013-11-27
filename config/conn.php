<?php


//Define os caracteres especiais
setlocale(LC_ALL, 'pt_BR');


//conexão com o servidor
$conect = mysql_connect("localhost","root","root");
 
// Caso a conexão seja reprovada, exibe na tela uma mensagem de erro
if (!$conect) die ("<h1>Falha na conexao com o Banco de Dados!</h1>
	<br>".mysql_error());
 

// Caso a conexão seja aprovada, então conecta o Banco de Dados.	
$db = mysql_select_db("mydb");
$charset = mysql_set_charset('utf8');
if($db){
	echo "<h1>Conexao estabelecida!</h1>";
}
else{
	echo "erro".mysql_error();
}


?>