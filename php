<?php
require 'PHPMailerAutoload.php';
require 'class.phpmailer.php';

$mailer = new PHPMailer;
$mailer->isSMTP(); // Set mailer to use SMTP
$mailer->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

if($_GET['acao'] == 'enviar'){
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$arquivo = $_FILES["arquivo"];

$mailer->Host = 'plesk12l0002.hospedagemdesites.ws';
$mailer->SMTPAuth = true;     // Enable SMTP authentication
$mailer->IsSMTP();
$mailer->isHTML(true);       // Set email format to HTML
$mailer->Port = 587;

// Ativar condição caracteres
$mailer->CharSet = 'UTF-8';

// Dados da sua conta do provedor de hospedagem para autenticação e envio
$usuario = 'contato@sandromir.com';
$senha = '4523452ghdfgh#$%';
$seuEmail = 'contato@sandromir.com';

// Conta do usuário
$mailer->Username = $usuario; // SMTP username
$mailer->Password = $senha;    // SMTP password

// E-mail do destinatario
$address = $seuEmail;

// Corpo do e-mail em html
$corpoMSG = "<strong>Nome:</strong> $nome <br><br> <strong>E-mail:</strong> $email <br><br> <strong>Telefone:</strong> $telefone <br><br> <strong>Assunto:</strong> $assunto <br><br> <strong>Mensagem:</strong> $mensagem <br><br>";

$mailer->AddAddress($address, "destinatario");
$mailer->Sender = $seuEmail;
$mailer->FromName = $nome;
$mailer->From = $email;

// assunto da mensagem
$mailer->Subject = $assunto;

// corpo da mensagem
$mailer->MsgHTML($corpoMSG);

// anexar arquivo no máximo 2MB
$mailer->AddAttachment($arquivo['tmp_name'], $arquivo['name']  );

if(!$mailer->Send()) {
   echo "Erro: " . $mailer->ErrorInfo;
  } else {
   echo('<script> alert("Mensagem enviada com sucesso!"); window.location.href="index.php"; </script>');

  }
}
?>