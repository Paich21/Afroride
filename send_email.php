<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get the form data
  $pickupLocation = $_POST["pickup-location"];
  $destination = $_POST["destination"];
  $phoneNumber = $_POST["phone-number"];

  // Set up the email
  $to = "paichbley@gmail.com";
  $subject = "New Booking!!";
  $message = "Here is the booking:\n\n";
  $message .= "Pickup Location: " . $pickupLocation . "\n";
  $message .= "Destination: " . $destination . "\n";
  $message .= "Phone Number: " . $phoneNumber;

  // Send the email
  $headers = "From: Your Name <your-email@example.com>"; // Replace with your email address
  if (mail($to, $subject, $message, $headers)) {
    // Email sent successfully
    header("Location: index.html?status=success");
    exit();
  } else {
    // Email failed to send
    header("Location: index.html?status=error");
    exit();
  }
}

?>
