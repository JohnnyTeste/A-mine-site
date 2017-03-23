<?php

function pegaValor($valor) {
    
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
    
}


function validarEmail($email) {
    
    return filter_var($email, FILTER_VALIDATE_EMAIL);
    
}

function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor){
    
    $headers =  "From: yan.johnny.teles@gmail.com\r\n".
                "Reply-TO $de\r\n".
                "X-Mailer: PHP" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .="Content-Type: text/html; charset-ISO-8859-1\r\n";



    mail($para, $assunto, n1br($mensagem), $headers);
}

$email_servidor = "yan.johnny.teles@gmail.com";

$para = "seu@email.com";
    
$de = pegaValor("email");

$mensagem = "Parabéns você é um novo fã da banda. Aguarde para novas noticias";


?>

<?php
    
if ($nome && validaEmail($de)) {
enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
$pagina = "mail_ok.php";
} else {
$pagina = "mail_error.php";
}
    
header("location:$pagina");
?>