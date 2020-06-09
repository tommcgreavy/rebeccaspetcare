<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailto = "info@tommcgreavy.co.uk";

    $headers = "From: ".$email;
    $headers .= "Subject: ".$subject;

    $txt = "You have had a contact form submission from: ".$name."\n\nTheir message is about: ".$subject."\n\nMessage: ".$message."\n\nYou can contact them on: ".$email;

    mail($mailto, $headers, $txt);
    header("Location: index.html");
}

else {
    header("Location: index.html");
}

?>