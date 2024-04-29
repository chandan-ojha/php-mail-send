<?php
require 'mail.config.php';

$errors = [];
$successMessage = '';

if ( !empty( $_POST ) ) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if ( empty( $name ) ) {
        $errors[] = 'Name is empty';
    }

    if ( empty( $email ) ) {
        $errors[] = 'Email is empty';
    } elseif ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $errors[] = 'Email is invalid';
    }

    if ( empty( $subject ) ) {
        $errors[] = 'Subject is empty';
    }

    if ( empty( $message ) ) {
        $errors[] = 'Message is empty';
    }

    if ( !empty( $errors ) ) {
        $allErrors = join( '<br/>', $errors );
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    } else {
        $result = sendEmail( $name, $email, $subject, $message );
        if ( $result === true ) {
            $successMessage = "<p style='color: green;'>Thanks for contacting us! We will reply soon.</p>";
        } else {
            $errorMessage = $result;
        }
    }
}

require "index.view.php";