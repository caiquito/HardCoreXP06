<?php
require 'config.php';

function Inserir()
{

	$SQL	 = Connect();
	$nome    = $_POST['nome'];
	$email   = $_POST['email'];
	$cargo   = $_POST['cargo'];
	$empresa = $_POST['empresa'];
	$ip_user = $_SERVER["REMOTE_ADDR"];
	$query   = "INSERT into cadastro (nome,email,cargo,empresa,IP) VALUES('" . $nome . "','" . $email . "','" . $cargo . "','" . $empresa . "','".$ip_user."')";
	$success = $SQL->query($query);

	if (!$success) {
		$name = "../logs/log_cadastroError.txt";
		$text = "- Erro ao cadastrar usuario: ".$SQL->error." - Erro de Conexão: ".$SQL->connect_error."/n Nome: ".$nome."/n Email: ".$email."/n Cargo: ".$cargo."/n Empresa: ".$empresa."/n";
		$text .= "------------------------------------ // ------------------------------------";
			
		$file = fopen($name, "a");
		fwrite($file, $text);
		fclose($file);

		return "Erro";
	}
	$SQL->close();
	return "Salvo!";	
}

	$insercao = Inserir();
	if($insercao == "Salvo!"){
		header("Location: http://".$_SERVER[HTTP_HOST]."/sucesso.html");
	} else{
		header("Location: http://".$_SERVER[HTTP_HOST]."/noCadastro.html");
	}


?>
