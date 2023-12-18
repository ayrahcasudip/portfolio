<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Send an email with the form data
        $to = "sudipacharya653@gmail.com"; // Replace with your email address
        $subject = "Feedback from $name";
        $messageBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

        if (mail($to, $subject, $messageBody)) {
            // Email sent successfully
            echo "success"; // You can handle this response in your JavaScript
        } else {
            // Email sending failed
            echo "error"; // You can handle this response in your JavaScript
        }
    } else {
        // Invalid email format
        echo "invalid-email"; // You can handle this response in your JavaScript
    }
}
?>

