<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars(trim($_POST['fullname'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    $to = 'ankywack@gmail.com';
    $subject = 'New message from your portfolio contact form';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if ($name && $email && $message) {
        if (mail($to, $subject, $body, $headers)) {
            echo '<script>alert("Message sent successfully!"); window.history.back();</script>';
        } else {
            echo '<script>alert("Failed to send message. Please try again later."); window.history.back();</script>';
        }
    } else {
        echo '<script>alert("Please fill in all fields."); window.history.back();</script>';
    }
} else {
    header('Location: index.html');
    exit();
} 