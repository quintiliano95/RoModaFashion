<?php

	include "includes/conecta.php";

	$id = $_GET['id'];

	$sql = "DELETE FROM cadclientes WHERE id = $id";

	//Envia código SQL para o MySQL
	$res = mysqli_query($conn, $sql);

	header("Location: listaclientes.php");

?>