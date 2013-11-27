<?php 


include('config/conn.php');


if(isset($_POST['login'])){
  $login = mysql_real_escape_string($_POST['login']);
}

if(isset($_POST['senha'])){
  $senha = mysql_real_escape_string($_POST['senha']);
}

#Select do usuário no banco
$sql = "SELECT * 
               FROM app_adm 
               WHERE adm_login = '$login' 
               AND adm_senha = '$senha' ";
#Executa a query
$query = mysql_query($sql);

#Numero de registros encontrados
$nr_user = mysql_num_rows($query);

#Se numero de linhas for menos que zero mata o cara
if($nr_user < 1){
	echo "Login ou senha Invalidos<br>";
    echo "<meta http-equiv='refresh' content='3; url=index.php'>";
    //echo "<a href='index.php'><input type='button' value='voltar'></a>";
}
//Se o login for válido 
else{
//Transformamos a consulta sql em um objeto
$usuario = mysql_fetch_object($query);

//Iniciamos a sessão para o usuário
session_start();

//Gravamos os dados do usuário em sessão
 $_SESSION['id_adm']    = $usuario->id_adm;
 $_SESSION['adm_login'] = $usuario->adm_login;
 $_SESSION['adm_nome']  = $usuario->adm_nome;	
 $_SESSION['adm_level'] = $usuario->adm_level;    
 //Redirecionamos o usuário para a pagina da Home
 header('Location:home.php');
 }

?>