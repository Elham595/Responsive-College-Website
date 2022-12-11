<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form="college@website.com";
$email_subject= "New Submission";
$email_body="User Name :$name.\n".
            "User Email :$visitor_email.\n".
            "User Name :$subject.\n".
            "User Name :$message.\n";
$to = "elhammuhammedbalbaa@gmail.com";
$headers = "From : $email_form";
$headers .="Reply To :$visitor_email";

mail($to, $email_subject, $email_body, $headers);
header("Location: contact.html");
?>