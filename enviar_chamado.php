<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = "jeanaldano@gmail.com"; // Endereço de e-mail para onde o chamado será enviado

    $assunto = "Novo Chamado";
    $mensagem = "Um novo chamado foi recebido:\n\n";
    $mensagem .= "Tipo de Chamado: " . $_POST["tipoChamado"] . "\n";
    $mensagem .= "Descrição do Chamado: " . $_POST["descricaoChamado"] . "\n";

    $headers = "De: " . $_POST["jeanmouralima2015@gmail.com"]; // Substitua por um campo de e-mail do formulário

    if (mail($para, $assunto, $mensagem, $headers)) {
        echo "Chamado enviado com sucesso!";
    } else {
        echo "Ocorreu um erro ao enviar o chamado.";
    }
}
?>
