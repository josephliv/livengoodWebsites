<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Set up the email parameters
  $to = 'joe@livengoodwebsites.com'; // Replace with your email address
  $subject = 'New Contact Form Submission';
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  $headers = "From: $email";

  // Send the email
  $success = mail($to, $subject, $body, $headers);

  // Check if the email was sent successfully
  if ($success) {
    echo 'Thank you for your message! We will be in touch soon.';
  } else {
    echo 'Oops! An error occurred while sending the message.';
  }
}
?>

