<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
function sendEmail($to,$subject,$body)
{



    $mail = new PHPMailer(true);

    try {
        $senderemail = "nsudekenechi2@gmail.com";
        $senderpassword = "bobfqerepcurarhh";
        $senderFrom = "Fundflex";
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com;';
        $mail->SMTPAuth = true;
        $mail->Username = $senderemail;
        $mail->Password = $senderpassword;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        $mail->setFrom('fundflex@support.com',$senderFrom);
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AltBody = 'Body in plain text for non-HTML mail clients';
        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}