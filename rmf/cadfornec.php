<?php 
						
	include "includes/topo.php";	

?>
		<header>
		  <h2>Cadastro de Fornecedores</h2>
		</header>
		<section>
		  		  	
		  	<?php 

				include "includes/menu.php";

			?>

		<article>
		  	<form action="recebefornec.php" method="post">
			<label for="nome">Nome:</label> 
			<input type="text" name="nome" />
			 
			<label for="endereco">Endereço:</label> 
			<input type="text" name="endereco" />
			 
			<label for="telefone">Telefone/Celular:</label> 
			<input type="number" name="telefone" />

			<label for="cnpj">CNPJ:</label> 
			<input type="number" name="cnpj" />

			<input type="submit">
		
		</form>
		  </article>
		</section>

<?php 

	include "includes/rodape.php";

?>