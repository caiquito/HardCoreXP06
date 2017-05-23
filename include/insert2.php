<?php

require 'config.php';

$SQL	 = Connect();
$nome    = $_POST['nome'];
$email   = $_POST['email'];
$cargo    = $_POST['cargo'];
$empresa = $_POST['empresa'];
$query   = "INSERT into cadastro (nome,email,cargo,empresa) VALUES('" . $nome . "','" . $email . "','" . $cargo . "','" . $empresa . "')";
$success = $SQL->query($query);

if (!$success) {
	$name = "../logs/log_cadastroError.txt";
	$text = "- Erro ao cadastrar usuario: ".$SQL->error." - Erro de Conexão: ".$SQL->connect_error."/n Nome: ".$nome."/n Email: ".$email."/n Cargo: ".$cargo."/n Empresa: ".$empresa."/n";
	$text .= "------------------------------------ // ------------------------------------";
		
	$file = fopen($name, "a");
	fwrite($file, $text);
	fclose($file);

	die("Não foi possivel se cadastrar no momento, favor tentar novamente mais tarde.");
}

echo "Valeu pelo contato! Conte conosco para aumentar sua performance com nossos conteúdos! <br>";

$SQL->close();
 
?>
