<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up the email headers
    $to = 'manabaka@kean.edu';
    $subject = 'New message from ' . $name;
    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Compose the email message
    $body = "<h3>You have a new message from your website contact form</h3>";
    $body .= "<p><b>Name:</b> " . $name . "</p>";
    $body .= "<p><b>Email:</b> " . $email . "</p>";
    $body .= "<p><b>Message:</b> " . $message . "</p>";

    // Send the email
    if(mail($to, $subject, $body, $headers)) {
        echo "<p>Your message has been sent. Thank you!</p>";
    } else {
        echo "<p>There was an error sending your message. Please try again later.</p>";
    }
}
?>
