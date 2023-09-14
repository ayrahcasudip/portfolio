<?php
  


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // You can perform additional validation and sanitization here

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
}
?>
