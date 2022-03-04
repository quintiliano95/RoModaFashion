<?php 
						
	include "includes/topo.php";	

?>
		<header>
		  <h2>Lançamento de Vendas</h2>
		</header>
		<section>
		  	
		  	<?php 

				include "includes/menu.php";

			?>

		<article>
			<form action="recebevendas.php" method="post">
			<label for="cliente">Cliente:</label> 
			<select name="cliente">
				<option></option>
				<option>Fulano da Silva</option>
				<option>Beltrano da Silva</option>
			</select><br/><br/>
			
			<label for="canal">Canal da Venda:</label> 
			<select name="canal">
				<option></option>
				<option>Marketplace</option>
				<option>WhatsApp</option>
				<option>Instagram</option>
			</select><br/><br/>
			
			<label for="formpag">Forma de Pagamento:</label> 
			<select name="formpag">
				<option></option>
				<option>Dinheiro</option>
				<option>Débito</option>
				<option>Crédito</option>
				<option>Pix</option>
			</select><br/><br/>
			
			<label for="dtvenda">Data da Venda:</label>
			<input type="date" name="dtvenda" /><br/><br/>
			
			<label for="valor">Valor:</label>
			<input type="number" min="1" step="any" name="valor" /><br/><br/>

			<input type="submit">
		
		</form>
			</article>
		</section>

<?php 

	include "includes/rodape.php";

?>