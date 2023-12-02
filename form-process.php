<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $fullName = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Your email address where you want to receive messages
    $to = "denividan@gmail.com";

    // Subject of the email
    $subject = "New Form Submission";

    // Message body
    $body = "Name: $fullName\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    $success = mail($to, $subject, $body, $headers);

    // Check if the email is sent successfully
    if ($success) {
        // Send a JSON response
        $response = array('status' => 'success', 'message' => 'Form submitted successfully');
    } else {
        // Send a JSON response indicating email sending failure
        $response = array('status' => 'error', 'message' => 'Failed to send email');
    }
} else {
    // Invalid request method
    $response = array('status' => 'error', 'message' => 'Invalid request method');
}

// Set the content type to JSON
header('Content-Type: application/json');

// Send the JSON response
echo json_encode($response);
?>