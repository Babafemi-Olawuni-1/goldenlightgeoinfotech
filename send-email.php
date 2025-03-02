<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "babafemiolawuni@gmail.com";  // Replace with your email
    $subject = "New Appointment Request from $name";
    $headers = "From: $email\r\nReply-To: $email";

    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your appointment request has been sent!";
    } else {
        echo "Failed to send. Please try again.";
    }
}
?>