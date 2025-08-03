<?php
require 'db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $conexao->real_escape_string($_POST['nome']);
  $email = $conexao->real_escape_string($_POST['email']);
  $mensagem = $conexao->real_escape_string($_POST['mensagem']);

  $sql = "INSERT INTO feedbacks (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

  if ($conexao->query($sql) === TRUE) {
    echo "Feedback enviado com sucesso!";
  } else {
    echo "Erro ao enviar: " . $conexao->error;
  }

  $conexao->close();
}
?>