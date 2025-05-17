<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = "hillarymarindany53@gmail.com";

    // Set the email subject
    $email_subject = "New Contact Form Submission: " . $subject;

    // Construct the email content
    $email_body = "
    You have received a new message from your website contact form:\n\n
    Name: $name\n
    Email: $email\n
    Subject: $subject\n
    Message:\n
    $message
    ";

    // Set the email headers
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message failed to send. Please try again later.'); window.location.href='index.html';</script>";
    }
}
?>