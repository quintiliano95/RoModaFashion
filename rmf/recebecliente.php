<?php

	include "includes/conecta.php";

	$id = $_POST["id"];
	$nome = $_POST["nome"];
	$dtnasc = $_POST["dtnasc"];
	$cep = $_POST["cep"];
	$endereco = $_POST["endereco"];
	$cidade = $_POST["cidade"];
	$telefone = $_POST["telefone"];
	$email = $_POST["email"];

	if(empty($id)) { //se id estiver vazio, é INSERT 

	//Monta o SQL para inserir os dados do formulário do MySQL.
			$sql = "INSERT INTO cadclientes (id, nome, dtnasc, cep, endereco, cidade, telefone, email) VALUES ('$id', '$nome', '$dtnasc', '$cep', '$endereco', '$cidade', '$telefone', '$email')";

	//Envia código SQL para o MySQL
	$res = mysqli_query($conn, $sql);

	if ($res) {
		header("Location: listaclientes.php"); //se der boa, o usuário vai para listagem (função header serve para enviar cabeçalho na requisição http e o location redireciona para outra página)
	}
	else {
		echo "Erro ao inserir!";
	}
}
	else {

		$sql = "UPDATE cadclientes SET 

				nome = '$nome',
				dtnasc = '$dtnasc',
				cep = '$cep',
				endereco = '$endereco',
				cidade = '$cidade',
				telefone = '$telefone',
				email = '$email'
					
				WHERE 
					id = $id";

		//Envia código SQL para o MySQL
	$res = mysqli_query($conn, $sql);

	if ($res) {
		header("Location: listaclientes.php"); //se der boa, o usuário vai para listagem (função header serve para enviar cabeçalho na requisição http e o location redireciona para outra página)
	}
	else {
		echo "Erro ao atualizar!";
	}

	}
?>