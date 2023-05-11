<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $phone = $_POST["phonenumber"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "mlewaisaiah@gmail.com";
  $subject = "New form submission from your website";
  $body = "Name: " . $name . "\n";
  $body .= "Email: " . $email . "\n";
  $body .= "Message: " . $message . "\n";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully.";
  } else {
    echo "Message sending failed.";
  }
}
?>
