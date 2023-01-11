<?php
defined('BASEPATH') or exit('No direct script access allowed');

class General
{

    public function some_method()
    {
        echo "tes";
    }

    public function sendMail($content, $to, $mail){
        $sender_email = "adityasholahudin608@gmail.com";
        $sender_name = "Belanja";

        $mail->isSMTP();
        $mail->Host     = 'smtp.googlemail.com';
        $mail->SMTPAuth = true;
        $mail->Username = "aditya@bolehdicoba.com";
        $mail->Password = "vrksulryrwtkhknk";
        $mail->SMTPSecure = 'tls';
        $mail->Port     = 587;

        $mail->setFrom($sender_email, $sender_name);
        $mail->AddAddress($to);
        $mail->AddReplyTo($sender_email, $sender_name);
        $mail->Subject = "Belanja - Forgot Password";
        $mail->isHTML(true);

        $mail->Body = $content;

        if ($mail->send()) {
            return 201;
        } else {
            return 404;
        }
    }
}
