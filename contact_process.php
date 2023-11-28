<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "zeeshanbro96@gmail.com";
    $subject = "Contact Form Submission";
    $message = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";
    $headers = "From: $email\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Please fill out all required fields.";
}
?>
