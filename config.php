<?php
return [
    'smtp_host' => 'smtp.gmail.com',
    'smtp_auth' => true,
    'smtp_username' => 'your-email@gmail.com', // Replace with your email
    'smtp_password' => 'your-email-password', // Replace with your password or app password
    'smtp_secure' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
    'smtp_port' => 587,
    'from_email' => 'your-email@gmail.com',
    'from_name' => 'Website Query',
    'to_email' => 'admin-email@gmail.com', // Replace with recipient's email
    'to_name' => 'Admin',
];
?>
