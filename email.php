<?php
if (isset($_POST['name'], $_POST['email'], $_POST['mesage'])) {

        $nome = htmlspecialchars(strip_tags($_POST['name']));
        $email = htmlspecialchars(strip_tags($_POST['email']));
        $mensagem = htmlspecialchars(strip_tags($_POST['mesage']));

        $to = "gabriel.mansousa@senacsp.edu.br";
        $subject = "contato - programador brabo"; // $subject = $assunto;
        $body = "Nome: " . $nome . "\r\n" .
                "Email: " . $email . "\r\n" .
                "Mensagem: " . $mensagem;


        $header = "From:gabrielmatheussousa@hotmail.com" . "\r\n"
                . "Reply-to:" . $email . "\r\n"
                . "X=Mailer:PHP/" . phpversion();

        if (mail($to, $subject, $body, $header)) {
                echo 'Email enviado com sucesso!';
        } else {
                echo 'o email não pode ser enviado';
        }
}
