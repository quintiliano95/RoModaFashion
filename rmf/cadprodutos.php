<?php 
						
	include "includes/topo.php";	

?>
		<header>
		  <h2>Cadastro de Produtos</h2>
		</header>
		<section>
		  
		  	<?php 

				include "includes/menu.php";

			?>

		<article>
		  	<form action="recebeproduto.php" method="post">
			<label for="nomeproduto">Produto:</label> 
			<input type="text" name="nomeproduto" />
			 
			<label for="codproduto">Código do Produto:</label> 
			<input type="text" name="codproduto" />
			
			Observações: <input type="text" name="preparacao"><br></br>

			<input type="submit">
		
		</form>
			</article>
		</section>

<?php 

	include "includes/rodape.php";

?>