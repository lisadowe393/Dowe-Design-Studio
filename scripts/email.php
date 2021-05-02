<?php

use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  try {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $body  = "<h3>$name</h3>";
    $body .= "<h4>$email</h4>";
    $body .= "<p>$message</p>";

    require_once "PHPMailer.php";
    require_once 'SMTP.php';
    require_once 'Exception.php';

    $mail = new PHPMailer(TRUE);

    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "robert.clarkson.dev.test@gmail.com";
    $mail->Password = "Lobbob22";
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress("robert.clarkson.dev.test@gmail.com");
    $mail->Subject = ("$name | $email");
    $mail->Body = $body;

    if($mail->send()) {
      header("Location: https://dowedesignstudio.com/thankyou.html");
    } else {
      header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    }
    die();
  } catch (Exception $e) {
    header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
    die();
  }
} else {
  header($_SERVER['SERVER_PROTOCOL'] . ' 500 Internal Server Error', true, 500);
  die();
}
?>