<nav>
   <ul id="menu">
    <li><a href="inicio.php" <?php if (basename ($_SERVER['PHP_SELF'])=="inicio.php") {echo "class='active'";} ?> >Início</a></li>
	
	<li><a href="cadclientes.php" <?php if (basename ($_SERVER['PHP_SELF'])=="cadclientes.php") {echo "class='active'";} ?> >Cadastro Clientes</a></li>
	
	<li><a href="cadfornec.php" <?php if (basename ($_SERVER['PHP_SELF'])=="cadfornec.php") {echo "class='active'";} ?> >Cadastro Fornecedores</a></li>
	
	<li><a href="cadprodutos.php" <?php if (basename ($_SERVER['PHP_SELF'])=="cadprodutos.php") {echo "class='active'";} ?> >Cadastro Produtos</a></li>
	
	<li><a href="lancavendas.php" <?php if (basename ($_SERVER['PHP_SELF'])=="lancavendas.php") {echo "class='active'";} ?> >Lançamento de Vendas</a></li>

</ul>
  </nav>