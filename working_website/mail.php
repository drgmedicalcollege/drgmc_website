<?php
if (isset($_POST["appointment"])) {
    extract($_POST);
    $to_email = "mahoretushar@gmail.com";
    $subject = "Appointment Request";
    $date = $_POST["date"];
    $time = $_POST["time"];
    $name = $_POST["name"];
    $message = $_POST["message"];
    $body = "Name : $name\nDate: $date\nTime : $time\nMessage : $message";
    $headers = "mahoretushar@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        ?>
        <script> alert("Message Sent, you will notify by mail or call soon..."); </script> <?php
    } else {
        ?>
        <script> alert("Message Could not Sent, Try to call on +91-8888137777 for Admission Details..."); </script> <?php
    }
}
?>