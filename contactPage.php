<?php 
    header("Location: contact.html");
    exit;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $from = 'sarahkamalmaz@gmail.com'; 
    $message = $_POST['message']; 
    $subject = 'New Website Message'; 
    $to = 'leenkamalmaz@gmail.com'; 
    $body = "Name: $name\n".
            "Email: $email\n".
            "Message: $message\n";
    $headers = "From: $from \r\n";
    $headers .= "Reply-To: $email \r\n";
    mail ($to, $subject, $body, $headers);
?>
