<?php
$to = 'frannkx@outlook.com';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From: frannkx@gmail.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "Correo Enviado";
} else {
   echo "ERROR";
}