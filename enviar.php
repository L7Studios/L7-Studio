<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telefone = htmlspecialchars($_POST['phone']);
    $mensagem = htmlspecialchars($_POST['message']);

    $destinatario = "contato@l7studio.com.br"; // seu e-mail
    $assunto = "Nova mensagem do formulário de contato";

    $corpoEmail = "Você recebeu uma nova mensagem:\n\n";
    $corpoEmail .= "Nome: $nome\n";
    $corpoEmail .= "Email: $email\n";
    $corpoEmail .= "Telefone: $telefone\n";
    $corpoEmail .= "Mensagem:\n$mensagem\n";

    $cabecalhos = "From: $email\r\n";
    $cabecalhos .= "Reply-To: $email\r\n";
    $cabecalhos .= "X-Mailer: PHP/" . phpversion();

    if (mail($destinatario, $assunto, $corpoEmail, $cabecalhos)) {
        echo "OK"; // sucesso
    } else {
        echo "ERRO"; // erro
    }
}
?>
