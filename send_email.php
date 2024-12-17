<?php
$to = 'sisalik84@gmail.com';
$subject = 'Booking Table';

/full_name = $_POST['full_name'];
$phone_number = $_POST['phone_number'];
$date = $_POST['date'];
$time = $_POST['time'];
$persons = $_POST['persons'];

$body = "Full Name: $full_name\n";
$body .= "Phone Number: $phone_number\n";
$body .= "Date: $date\n";
$body .= "Time: $time\n";
$body .= "Number of Persons: $persons\n";

$headers = 'From: ' . $full_name . '\r\n';
$headers .= 'Reply-To: ' . $full_name . '\r\n';

mail($to, $subject, $body, $headers);

header('Location: thank-you.html');
exit;
?>