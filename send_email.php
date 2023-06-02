<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  // Retrieve form data
  $pickupLocation = $_POST["pickup-location"];
  $destination = $_POST["destination"];
  $phoneNumber = $_POST["phone-number"];

  // Compose the email
  $to = "blaysam2021@gmail.com";
  $subject = "New Booking!!";
  $message = "Here is the booking:\n\n";
  $message .= "Pickup Location: " . $pickupLocation . "\n";
  $message .= "Destination: " . $destination . "\n";
  $message .= "Phone Number: " . $phoneNumber . "\n";

  // Send the email
  $headers = "From: Your Website <noreply@example.com>";
  mail($to, $subject, $message, $headers);
}
?>
