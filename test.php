<?php
$to = 'urlrohit@gmail.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: hashingrohit@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}