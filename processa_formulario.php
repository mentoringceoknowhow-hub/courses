<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST["nome"];
  $email = $_POST["email"];
  $mensagem = $_POST["mensagem"];

  // Formatar a mensagem em HTML
  $mensagem_html = "<h1>Dados do Formulário</h1>";
  $mensagem_html .= "<p><strong>Nome:</strong> " . $nome . "</p>";
  $mensagem_html .= "<p><strong>Email:</strong> " . $email . "</p>";
  $mensagem_html .= "<p><strong>Mensagem:</strong> " . $mensagem . "</p>";

  // Configurações do email
  $destinatario = "mentoringceoknowhow@gmail.com"; // Substitua pelo seu email Gmail
  $assunto = "Novo contato do formulário";
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= "From: " . $email . "\r\n"; // Enviar com o email do remetente

  // Enviar o email
  if (mail($destinatario, $assunto, $mensagem_html, $headers)) {
    echo "Email enviado com sucesso!";
  } else {
    echo "Erro ao enviar o email.";
  }
}
?>
