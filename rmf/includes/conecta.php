<?php

	$conn = mysqli_connect("localhost", "root", "", "rmf"); //variavel de conexão | biblioteca mysqli (onde está instalado o SQL, qual usuário que vai acessar, senha vazia e se tiver senha colocar ela, database que irá ser conectada)

	if($conn == false) { //se a conexão for = falso é porque deu erro na conexão
		die("ERRO: Não conseguiu conectar ao MySQL. " . mysqli_connect_error()); //mostra mensagem de erro
	}


?>