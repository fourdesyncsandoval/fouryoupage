<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email address to send the message to
    $to = 'fourdesyncsandoval@gmail.com';

    // Email subject
    $email_subject = 'New Message from Contact Form: ' . $subject;

    // Email body
    $email_body = "You have received a new message from the user $name.\n\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";

    // Headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'There was an error sending the message.';
    }
} else {
    echo 'Invalid request method.';
}
?>