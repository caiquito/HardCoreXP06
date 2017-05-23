<?php

require 'connection.php';
$conn    = Connect();
$name    = $conn->real_escape_string($_POST['nome']);
$email   = $conn->real_escape_string($_POST['email']);
$subj    = $conn->real_escape_string($_POST['cargo']);
$message = $conn->real_escape_string($_POST['empresa']);
$query   = "INSERT into cadastro (nome,email,cargo,empresa) VALUES('" . $nome . "','" . $email . "','" . $cargo . "','" . $empresa . "')";
$success = $conn->query($query);

if (!$success) {
    die("Couldn't enter data: ".$conn->error);

}

echo "Valeu pelo contato! Conte conosco para aumentar sua performance com nossos conteúdos! <br>";

$conn->close();

?>
