<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "kajal.lochab@gmail.com"; // Change this to your email address
    $subject = "New Contact Form Submission";
    $body = "Full Name: $fullname\nEmail: $email\nMessage: $message";
    $headers = "From: $email";
    
    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
} else {
    // Not a POST request, redirect back to the form
    header("Location: index.html");
}
?>
