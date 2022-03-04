<?php 

	include "includes/conecta.php";

	$id = "";
	$nome = "";
	$dtnasc = "";
	$cep = "";
	$endereco = "";
	$cidade = "";
	$telefone = "";
	$email = "";

	if(isset($_GET['id'])) { //isset = is set (está setado), ou seja, se existe a variavel id dentro do get, ele faz isso
		$id = $_GET['id']; // obtém o valor enviado via GET

		$sql = "SELECT * FROM cadclientes WHERE id = $id"; // consulta o id na tabela cadclientes

		$res = mysqli_query($conn, $sql); // envia a consulta para obter dados do cliente atual 

		$row = mysqli_fetch_assoc($res); // armazena os dados obtidos

		$nome = $row['nome'];
		$dtnasc = $row['dtnasc'];
		$cep = $row['cep'];
		$endereco = $row['endereco'];
		$cidade = $row['cidade'];
		$telefone = $row['telefone'];
		$email = $row['email'];
	}

	include "includes/topo.php";

?>


		<header>
		  <h2>Cadastro de Clientes</h2>
		</header>
		<section>
		  	
		  	<?php 

				include "includes/menu.php";

			?>
		  
		  <article>
		  	<form action="recebecliente.php" method="post">

		  	<input type="hidden" name="id" value="<?php echo $id; ?>" />

			<label for="nome">Nome:</label> 
			<input type="text" name="nome" value="<?php echo $nome; ?>" />
			 
			<label for="dtnasc">Data de Nascimento:</label> 
			<input type="date" placeholder="dd/mm/aaaa" name="dtnasc" value="<?php echo $dtnasc; ?>" />
			 
			<label for="cep">CEP:</label> 
			<input type="number" name="cep" value="<?php echo $cep; ?>" />

			<label for="endereco">Endereço:</label> 
			<input type="text" name="endereco" value="<?php echo $endereco; ?>" />
			 
			<label for="cidade">Cidade:</label> 
			<input type="text" name="cidade" value="<?php echo $cidade; ?>" />
			
			<label for="telefone">Telefone:</label> 
			<input type="number" name="telefone" value="<?php echo $telefone; ?>" />

			<label for="email">E-mail:</label> 
			<input type="text" name="email" value="<?php echo $email; ?>" />

			<input type="submit">
		
		</form>
		  </article>
		</section>

<?php 

	include "includes/rodape.php";

?>