<?php  

	//reiniciar a sessão
	session_start();

	if(!isset($_SESSION['id'])) { // verifica se não foi criada uma sessão autenticada (se não existe id guardado na sessão)

		header("Location: login.php?autentica=1");

	}

?>