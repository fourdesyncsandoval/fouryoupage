<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Recipient email
    $to = 'fourdesyncsandoval@gmail.com';

    // Email subject
    $subject = "New message from: $name";

    // Email body
    $body = "You have received a new message from $name ($email).\n\nMessage: $message";

    // Headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Message sent successfully!';
    } else {
        echo 'Error sending message.';
    }
}
?>
