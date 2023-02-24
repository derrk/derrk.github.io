<?php
require_once('phpmailer/PHPMailerAutoload.php');

// Get the email address from the form submission
$email = $_POST['email'];

// Create a new PHPMailer instance
$mail = new PHPMailer;

// Set up the email headers
$mail->setFrom('dev.derrik@gmail.com', 'Derrik Pollock');
$mail->addAddress($email);
$mail->Subject = 'Please Review my Resume';
$mail->Body = 'Hello, thank you for reviewing my resume. You may reach me at 8062417013';

// Attach the file to the email
$mail->addAttachment('./MainSWEresi.pdf', 'MainSWEresi.pdf');

// Send the email
if (!$mail->send()) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent successfully';
}
?>
