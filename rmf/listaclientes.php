<?php 
						
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
		  	<table border="1">
		  		<tr>
		  			<td> ID </td>
		  			<td> NOME </td>
		  			<td> Data de Nascimento </td>
		  			<td> CEP </td>
		  			<td> Endereço </td>
		  			<td> Cidade </td>
		  			<td> Telefone </td>
		  			<td> E-mail </td>
		  		</tr>
		  		<?php 
				
					function dateEmMysql($dtnasc){
						$ano= substr($dtnasc, 0, 4);
						$mes= substr($dtnasc, 5, 2);
						$dia= substr($dtnasc, 8, 2);
						return $dia . "/" .$mes . "/" . $ano;
					}
		  			
		  			include "includes/conecta.php";

					$sql = "SELECT id, nome, dtnasc, cep, endereco, cidade, telefone, email FROM cadclientes"; //seleciona as colunas que quer buscar os dados

					$res = mysqli_query($conn, $sql); // envia a o código para o MySQL através da conexão $conn e o comando $sql

					while($row = mysqli_fetch_assoc($res)) { //enquanto houver uma nova linha (row), é para continuar executando = função que pega as linhas de registro

					// imprime os dados na tela
						echo "<tr> 
								<td>". $row['id'] ."</td>
		  						<td>". $row['nome'] ."</td>
		  						<td>". dateEmMysql($row['dtnasc']) . "</td>
		  						<td>". $row['cep'] ."</td>
		  						<td>". $row['endereco'] ."</td>
		  						<td>". $row['cidade'] ."</td>
		  						<td>". $row['telefone'] ."</td>
		  						<td>". $row['email'] ."</td>
		  						<td><a href='cadlogin.php?id=". $row['id'] . "'>Editar</a></td>
		  						<td><a href='excluiclientes.php?id=". $row['id'] . "'>Excluir</a></td>
		  					</tr>";
		  				}

		  		?>
		  	</table>


		  </article>
		</section>

<?php 

	include "includes/rodape.php";

?>