<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['form-field-name']);
    $email = htmlspecialchars($_POST['form-field-email']);
    $message = htmlspecialchars($_POST['form-field-message']);

    // Email details
    $to = "redwan.pentester@gmail.com";
    $subject = "New Contact Form Submission in Your Website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message sending failed.";
    }
}
?>
