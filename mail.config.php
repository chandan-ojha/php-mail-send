<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//Load Composer's autoloader
require 'vendor/autoload.php';

function sendEmail( $name, $email, $subject, $message ) {
    $mail = new PHPMailer();

    // specify SMTP credentials
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'user@example.com';
    $mail->Password = 'secret';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    //Recipients
    $mail->setFrom( 'from@example.com', 'Mailer' ); // Set sender's name and email
    $mail->addAddress( 'chandan@gmail.com', 'Chandan' );

    //Content
    $mail->isHTML( true );
    $mail->Subject = $subject;
    $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br( $message )];
    $body = join( '<br />', $bodyParagraphs );
    $mail->Body = $body;

    if ( $mail->send() ) {
        return true;
    } else {
        return 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
