<?php 

	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	include "includes/conecta.php";

	$sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'"; // consulta o id na tabela usuarios
	$res = mysqli_query($conn, $sql);
	
	$qtdeRegistros = mysqli_num_rows($res); // obtém quantidade de registros encontrados

	if($qtdeRegistros > 0) {

		session_start(); // inicia a sessão

		$row = mysqli_fetch_assoc($res);

		// armazena informações do usuário na sessão
		$_SESSION['id'] = $row['id'];
		$_SESSION['nome'] = $row['nome'];		

		header("Location: inicio.php");
	}
	else {
		header("Location: login.php?erro=1");
	}
?>