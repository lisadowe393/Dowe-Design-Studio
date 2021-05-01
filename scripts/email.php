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

    $mail->isSMTP();
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
      $status = "success";
      $response = "Email is Sent!";
    } else {
      $status = "failed";
      $response = "Email failed!";
    }
    echo $status;
  } catch (Exception $e) {
    // echo $e->getMessage();
    var_dump($e->getTrace());
  }

  // header("Location: https://dowedesignstudio.com/thankyou.html");
  // die();
  // exit(json_encode(array("status" => $status, "response" => $response)));
} else {
  echo "Not Set";
}
?>