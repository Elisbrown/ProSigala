<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Send the results to my email address
    $to = "sunyinelisbrown@gmail.com";
    $headers = "From: $email";

    // Send email
    $mailResult = mail($to, $subject, $message, $headers);

    // Provide feedback to the user
    if ($mailResult) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
