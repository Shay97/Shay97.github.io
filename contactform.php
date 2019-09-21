<?php

if (isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];

    $mailTo = "akshaypatel7@hotmail.com";
    $headers = "From: ".$email;
    $txt = "You have received an email from ".$fname.".\n\n".$subject;


    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}