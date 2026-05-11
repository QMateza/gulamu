<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = htmlspecialchars( $_POST["name"]);
    $email = htmlspecialchars( $_POST["email"]);
    $subject = htmlspecialchars( $_POST["subject"]);
    $message = htmlspecialchars( $_POST["message"]);

    $mailTo = "info@gulamu.co.za";
    $headers = "From: ".$email;
    $txt_message = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt_message, $headers);
    header("Location: ./index.html");
} else {
    header("Location: ./index.php");
}

