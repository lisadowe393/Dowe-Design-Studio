<?php
use PHPMailer\PHPMailer\PHPMailer;

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['body'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $body = $_POST['body'];

  require_once "PHPMailer/PHPMailer.php";
  require_once "PHPMailer/SMTP.php";
  require_once "PHPMailer/Exception.php";

  $mail = new PHPMailer();

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
  $mail->Subject = ("$email(Contact)");
  $mail->Body = $body;

  if($mail->send()) {
    $status = "success";
    $response = "Email is Sent!";
  } else {
    $status = "failed";
    $response = "Email failed!";
  }

  exit(json_encode(array("status" => $status, "response" => $response)));
}



// require_once "vendor/autoload.php";

// //PHPMailer Object
// $mail = new PHPMailer(true); //Argument true in constructor enables exceptions

// //From email address and name
// $mail->From = "from@yourdomain.com";
// $mail->FromName = "Full Name";

// //To address and name
// $mail->addAddress("recepient1@example.com", "Recepient Name");
// $mail->addAddress("recepient1@example.com"); //Recipient name is optional

// //Address to which recipient will reply
// $mail->addReplyTo("reply@yourdomain.com", "Reply");

// //CC and BCC
// $mail->addCC("cc@example.com");
// $mail->addBCC("bcc@example.com");

// //Send HTML or Plain Text email
// $mail->isHTML(false);

// $mail->Subject = "Subject Text";
// $mail->Body = "<i>Mail body in HTML</i>";
// $mail->AltBody = "This is the plain text version of the email content";

// try {
//     $mail->send();
//     echo "Message has been sent successfully";
// } catch (Exception $e) {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }
?>