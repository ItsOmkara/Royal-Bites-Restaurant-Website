<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first_name"];
    $lastName = $_POST["last_name"];
    $email = $_POST["Gmail"];
    $phone = $_POST["number"];
    $message = $_POST["message"];
    $to= "9403139921om@gmail.com";
    $headers = "Form $email"
    if(mail($to,$number,$message,$headers)){
        echo "Email Sent";

    }else{
        echo "email not sent";
    }
}
?>