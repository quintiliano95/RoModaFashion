<?php 
						
	include "includes/topo.php";	

?>

		<header>
		  <h2>Rô ModaFashion</h2>
		</header>

		<section>
		  	
		  	<?php 

				include "includes/menu.php";

			?>
		  
		  <article>
		  	<p style="font: 40px Arial;color: #9370DB">Seja bem-vinda, <?php echo $_SESSION['nome'] ?>!</p>
		    <br></br>
		    <br></br><br></br><br></br>

		    <a href="cadlogin.php?id=<?php echo $_SESSION['id']; ?>">Editar Perfil</a>
		    </br></br><a href="logout.php">Sair</a>
		  </article>
		</section>
		<br></br>

<?php 

	include "includes/rodape.php";

?>