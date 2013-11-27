<?php 

include ('adm/config/seguranca.php');
include ('adm/config/conn.php');


$sql = "SELECT * FROM app_pizza";

$query = mysql_query($sql);

$nr_pizzas = mysql_num_rows($query);


 ?>



<!DOCTYPE html>

<html>
<head>
	<meta charset="UTF-8">
	<title>Everyday Menu - Liberteri Italiano Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<ul class="first">
				<li><a href="index.html">Home</a></li>
				<li class="current"><a href="menu.html">Everyday Menu</a></li>
			</ul>
			<div>
				<a href="index.html"><img src="images/logo.jpg" alt="Logo"></a>
			</div>
			<ul>
				<li><a href="about.html">About</a></li>
				<li><a href="blog.html">Blog</a></li>
			</ul>
		</div>
	</div>
	<div id="content">
		<div>
			<div class="section">
				<span><a href="index.html"><img src="images/pizza.jpg" alt="Image"></a></span>
				<div>
					<h2>Pizza</h2>

					<!-- Escolhe o tamanho-->
					<div id="linha_opcao"><strong>Tamanho:</strong><br>
						<div id="opcao">
							<label>Broto</label>
							<input id="tamanhoPizza" type="checkbox" value="broto" onselect="selecionado()"><br>
						</div>
						<div id="opcao">
							<label>Média</label>
							<input id="tamanhoPizza" type="checkbox" value="media"><br>
						</div>

						<div id="opcao">
							<label>Grande</label>
							<input id="tamanhoPizza" type="checkbox" value="grande"><br>
						</div>
						
					</div>

					<!-- Pega o valor do select // TAMANHO ===================================================================================-->
					<script type="text/javascript">
						$('#myform :checkbox').click(function() {
   		 						var $this = $(this);
    							// $this will contain a reference to the checkbox   
    							if ($this.is(':checked')) {
							        document.getElementbyId.value
							    } else {
							        // the checkbox was unchecked
							    }
								});


					</script>
						
					<!--Escolhe o tipo de massa-->
					<div id="linha_opcao"><strong>Massa:</strong><br>
						<div id="opcao">
							<label>Fina</label>
							<input type="checkbox" value="fina"><br>
						</div>
						<div id="opcao">
							<label>Normal</label>
							<input type="checkbox" value="normal"><br>
						</div>
						<div id="opcao">
							<label>Grossa</label>
							<input type="checkbox" value="grossa"><br>
						</div>
					</div>

					<!--Escolhe se é inteira, meio a meio ou 1/3-->
					<div id="linha_opcao">
						<strong>Tipo da pizza:</strong><br>
						<div id="opcao">
							<label>Inteira:</label>
							<input type="checkbox" value="inteira"><br>
						</div>
						<div id="opcao">
							<label>1/2 a 1/24:</label>
							<input type="checkbox" value="inteira"><br>
						</div>
						<div id="opcao">
							<label>3 sabores:</label>
							<input type="checkbox" value="inteira"><br>
						</div>
						
					</div>

					<?php 
			 			
			 			while($nr_pizza =  mysql_fetch_assoc($query))
			 			{
			 				echo "<ul>";
			 				echo "<li class='first'>";
			 				echo "<table>";
			 				echo "<tr>";
			 				echo "<td>".$pizza['pizza_sabor']."</td><td>".$pizza['pizza_preco']."</td>";
							echo "</tr>";
							echo "</table>";
							echo "</li>";
							echo "</ul>";							
			 			}

			 		?>


					<ul>
						<li class="first">
							<table>
								<tr>
									<td>$pizza['pizza_sabor']</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ripacotta</td>
									<td><span>$24.50</span></td>
								</tr>
								<!--tr>
									<td>Terracotta on wheat</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ham and cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Burroli</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>La Pieta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Cheverkybebab</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Pastrami and Rye</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Delicateseen</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Michael&#39;s Special</td>
									<td><span>$24.50</span></td>
								</tr>
							</table>
						</li-->
						<!--li>
							<table>
								<tr>
									<td>Salami and Cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ripacotta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Terracotta on wheat</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ham and cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Burroli</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>La Pieta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Cheverkybebab</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Pastrami and Rye</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Delicateseen</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Michael&#39;s Special</td>
									<td><span>$24.50</span></td>
								</tr>
							</table>
						</li-->
					</ul>
				</div>
			</div>
			<!--div class="section">
				<span><a href="index.html"><img src="images/pasta.jpg" alt="Image"></a></span>
				<div>
					<h2>Pasta</h2>
					<ul>
						<li class="first">
							<table>
								<tr>
									<td>Salami and Cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ripacotta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Terracotta on wheat</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ham and cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Burroli</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>La Pieta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Cheverkybebab</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Pastrami and Rye</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Delicateseen</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Michael&#39;s Special</td>
									<td><span>$24.50</span></td>
								</tr>
							</table>
						</li>
						<li>
							<table>
								<tr>
									<td>Salami and Cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ripacotta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Terracotta on wheat</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Ham and cheese</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Burroli</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>La Pieta</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Cheverkybebab</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Pastrami and Rye</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Delicateseen</td>
									<td><span>$24.50</span></td>
								</tr>
								<tr>
									<td>Michael&#39;s Special</td>
									<td><span>$24.50</span></td>
								</tr>
							</table>
						</li>
					</ul>
				</div>
			</div-->
		</div>
	</div>
	<!--div id="footer">
		<div>
			<ul>
				<li id="pasta">
					<div>
						<span>Pasta</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus, metus et vulputate bibendum, nisi velit luctus purus, a mattis metus dui eu risus.</p>
						<a href="index.html" class="more">More</a>
					</div>
				</li>
				<li id="pizza">
					<div>
						<span>Pizza</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer cursus, metus et vulputate bibendum, nisi velit luctus purus, a mattis metus dui eu risus.</p>
						<a href="index.html" class="more">More</a>
					</div>
				</li>
				<li id="callus">
					<div>
						<span>Call us now!</span>
						<b>0934-475-59867</b>
						<p><strong>Contact us at:</strong><br><i>thechef@liberteri.com</i></p>
						<p><strong>Snailmail:</strong><span>#45 Old Venice,<br>Bargain Street<br>Italy 8888</span></p>
					</div>
				</li>
			</ul>
		</div>
		<div class="section">
			<div>
				<p>&copy; Copyright &copy; 2011. Company name all rights reserved</p>
				<div>
					<span>Get social <br>with us:</span>
					<div>
						<a href="http://facebook.com/freewebsitetemplates" class="facebook" target="_blank"></a>
						<a href="#" class="linked-in" target="_blank"></a>
						<a href="http://twitter.com/fwtemplates" class="twitter" target="_blank"></a>
					</div>
				</div>
			</div>
		</div>
	</div-->
</body>
</html>






