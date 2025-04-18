<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Set up the recipient email address
    $to = "hillarykipngenok7@gmail.com"; // Change this to your email address

    // Set up the email headers
    $headers = "From: $name <$email>";
    $headers .= "Reply-To: $email";
    $headers .= "MIME-Version: 1.0";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<div class='sent-message'>Your message has been sent. Thank you!</div>";
    } else {
        echo "<div class='error-message'>Unable to send email. Please try again later.</div>";
    }
}

