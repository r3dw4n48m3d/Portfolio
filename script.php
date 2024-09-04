<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $contractType = $_POST['contractType'];
    $startDate = $_POST['startDate'];
    $terms = $_POST['terms'];
    $signature = $_POST['signature'];

    // Email settings
    $to = "redwan.pentester@gmail.com"; // Replace with your email address
    $subject = "New Contract Submission";
    $headers = "From: noreply@example.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Create the email body
    $message = "
    <html>
    <head>
        <title>New Contract Submission</title>
    </head>
    <body>
        <h2>Contract Details</h2>
        <p><strong>Full Name:</strong> $fullName</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Phone Number:</strong> $phoneNumber</p>
        <p><strong>Contract Type:</strong> $contractType</p>
        <p><strong>Start Date:</strong> $startDate</p>
        <p><strong>Terms and Conditions:</strong></p>
        <p>$terms</p>
        <p><strong>Signature:</strong> $signature</p>
    </body>
    </html>
    ";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        echo "Form submitted and email sent successfully!";
    } else {
        echo "There was an error sending the email.";
    }
} else {
    echo "Invalid request method.";
}
?>
