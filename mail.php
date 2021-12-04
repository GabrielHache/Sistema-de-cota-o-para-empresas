<?php
include_once('config.php');
require_once 'PHPMailer/src/PHPmailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';
$result="SELECT email FROM fornecedor";
$resul= mysqli_query($conexao, $result);
$aros= mysqli_fetch_assoc($resul);


use PHPmailer\PHPMailer\PHPMailer;
use PHPmailer\PHPMailer\Exception;
use PHPmailer\PHPMailer\SMTP;



   


function send($assunto, $menssagem)
{
    try {
        $mail = new PHPMailer(true);

        
        $mail-> IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'tls://smtp.gmail.com';
        $mail-> Username = 'cotacaoblubras@gmail.com';
        $mail-> Password = 'curtume849##';
        $mail->Port = 587;
        $mail->setFrom('cotacaoblubras@gmail.com');
        $mail->addReplyTO('opman82@outlook.com');
        $mail->addReplyTO('forzake@outlook.com');
        $mail->addReplyTO('configpgp@outlook.com');
        $mail->addAddress('forzake@outlook.com');
        $mail->addAddress('opman82@outlook.com');
        $mail->addAddress('configpgp@outlook.com');
        $mail->isHTML(true);
        $mail->CharSet = 'UTF-8';
        $mail->Subject = $assunto;
        $mail->Body = $menssagem;
        $envia = $mail->send();
        echo "Email enviado com Sucesso";

    } catch (Exception $e){
        echo $mail->Errorinfo;


    }
}


?>