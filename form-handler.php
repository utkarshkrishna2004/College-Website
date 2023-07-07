<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = 'utkarshkrishna04@gmail.com'; // Replace with your own email address

    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name\n".
                  "User Email: $visitor_email\n".
                  "Subject: $subject\n".
                  "User Message: $message\n";

    $headers = "From: $visitor_email\r\n".
               "Reply-To: $visitor_email\r\n";

    if (mail($to, $email_subject, $email_body, $headers)) {
        // Successful submission, redirect to the contact page
        header("Location: contact.html");
        exit();
    } else {
        // Error sending email, redirect to an error page
        header("Location: error.html"); // Replace with your error page URL
        exit();
    }
}
?>
