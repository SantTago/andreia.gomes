<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegar os valores do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Destinatário
    $to = "mocobom09@gmail.com";

    // Assunto do e-mail
    $assunto = "Mensagem do site";

    // Mensagem do e-mail
    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "Email: $email\n";
    $mensagem_email .= "Mensagem:\n$mensagem";

    // Cabeçalhos
    $headers = "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Enviar e-mail
    if (mail($to, $assunto, $mensagem_email, $headers)) {
        echo "<p>Obrigado por entrar em contato, $nome! Sua mensagem foi enviada com sucesso.</p>";
    } else {
        echo "<p>Ocorreu um erro ao enviar sua mensagem. Por favor, tente novamente mais tarde.</p>";
    }
} else {
    // Se o método de requisição não for POST
    echo "<p>Erro: Este script PHP deve ser acessado via método POST.</p>";
}
?>
