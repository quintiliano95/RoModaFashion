<!DOCTYPE html>
<html>
	<head>
		<title>Rô ModaFashion</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body>
		<header>
		  <h2>Login</h2>
		</header>

		<div>
			<p style="text-align:center">Caso deseje visualizar nossos produtos	, <a href="produtos.php">clique aqui</a>.</p>
			<p style="text-align:center">Caso contrário, realize o login para acessar a área restrita.</p>
			
			<?php
			
				//Se foi enviado parâmetro de erro - se não autenticou
				if(isset($_GET['erro'])){
					echo '<p style="text-align:center;color:white"><b>Usuário e/ou senha incorreto(s).</b></p>';
				}
				
				if(isset($_GET['autentica'])){
					echo '<p style="text-align:center;color:white"><b>Você não tem permissão de acesso.</b></p>';
				}
			
			?>
		<section>
		  	
		<article>
		  	<form action="cadlogin.php" method="post">
			<label for="login">Login:</label> 
			<input type="text" name="login" />
			 
			<label for="senha">Senha:</label> 
			<input type="password" name="senha" />
			
			<input type="submit" value="Autenticar">
		
		</form>
			</article>
		</section>

		<br></br><br></br>

<?php 

	include "includes/rodape.php";

?>