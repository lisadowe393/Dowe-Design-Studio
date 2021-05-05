<?php
use PHPMailer\PHPMailer\PHPMailer;
$msg = '';
if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  require_once 'scripts/PHPMailer.php';
  require_once 'scripts/SMTP.php';
  require_once 'scripts/Exception.php';

  //Create a new PHPMailer instance
  $mail = new PHPMailer();
  //Send using SMTP to localhost (faster and safer than using mail()) – requires a local mail server
  //See other examples for how to use a remote server such as gmail
  // $mail->isSMTP();
  $mail->Host = 'localhost';
  $mail->Port = 25;

  //Use a fixed address in your own domain as the from address
  //**DO NOT** use the submitter's address here as it will be forgery
  //and will cause your messages to fail SPF checks
  $mail->setFrom('info@dowedesignstudio.com', 'Contact Form');

  //Choose who the message should be sent to
  $mail->addAddress('info@dowedesignstudio.com');

  //Put the submitter's address in a reply-to header
  //This will fail if the address provided is invalid,
  //in which case we should ignore the whole request
  if ($mail->addReplyTo($email, $name)) {
      $mail->Subject = "Contact: " . $name . " | " . $email;
      //Keep it simple - don't use HTML
      $mail->isHTML(false);
      //Build a simple message body
      $mail->Body = <<<EOT
        Email: {$email}
        Name: {$name}
        Message: {$message}
        EOT;
      //Send the message, check for errors
      if (!$mail->send()) {
          //The reason for failing to send will be in $mail->ErrorInfo
          //but it's unsafe to display errors directly to users - process the error, log it on your server.
          $msg = 'Woops, something went wrong. You can contact me directly at info@dowedesignstudio.com';
          // echo $mail->ErrorInfo;
      } else {
          // echo 'Message sent! Thanks for contacting us.';
          header("Location: https://dowedesignstudio.com/thankyou.html");
          die();
      }
  } else {
      $msg = 'You appear to have entered an invalid email address. If this is a mistake, feel free to contact me at info@dowedesignstudio.com';
  } 
}
?>

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>
		<link rel="icon" href="images/dd-run1.svg">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
		<link rel="stylesheet"  href="css/stylesheet.css">
		<link rel="stylesheet"  href="css/contact.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet"> 
	</head>
	
	<body class="container-fluid">
		
		<!-- Navbar -->
    <nav class="row" id="navbar">
      <a href="index.html" class="col-md text-center">Home</a>
      <a href="about.html" class="col-md text-center">About</a>
      <a href="portfolio.html" class="col-md text-center">+Portfolio</a>
      <a href="contact.php" class="col-md text-center">Contact</a>
    </nav>

		<!-- image -->
		<header class="container-fluid">
			<img src="images/dd_logo.png" alt="Dowe Design Studio" class="img-fluid mx-auto d-block">
			<h1 class="text-center">dowe design studio</h1>
		</header>

		<!-- Main -->
		<main class="container-fluid">

			<h2 class="text-center">Let's Make<span class="orange"> Beautiful</span> Visuals Together!</h2>

			<!-- Form -->
			<section class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<h1>Contact</h1>
					</div>
					<div class="col-12 col-lg-6">
						<?php 
							echo "<p>$msg</p>";
						?>
					</div>
				</div>
				<form method="POST" id="contact-form">
					<div class="form-group row">
						<input name="name" class="col-md" type="text" class="form-control" id="first_name" placeholder="Your Name" required>
					</div>
					<div class="form-group row">
						<input name="email" class="col-md" type="email" class="form-control" id="email" placeholder="Your email" required>
					</div>
					<div class="form-group row">
						<textarea name="message" class="form-control" id="message" rows="5" placeholder="Your Message..." required></textarea>
					</div>
					<div class="form-group row">
						<button type="submit" class="col btn btn-lg btn-outline-light">Contact</button>
					</div>
				</form>
			</section>

			<!-- social media -->
			<section id="social-media" class="container-fluid row justify-content-around">
				<div class="col-xs">
					<a class="btn btn-lg btn-outline-light text-center" href="https://www.instagram.com/dowedesignstudio/"><i class="bi bi-instagram"></i> Instagram</a>
				</div>
				<div class="col-xs">
					<a id="copyemailbtn" class="btn btn-lg btn-outline-light text-center" onclick="copyEmail()"><i class="bi bi-envelope"></i> info@dowedesignstudio.com</a>
				</div>
				<div class="col-xs">
					<a class="btn btn-lg btn-outline-light text-center" href="https://www.behance.net/dowedesignstudio"><i class="bi bi-brush"></i> Behance</a>
				</div>
			</section>
			
			<!-- Bottom Image -->
			<section class="container-fluid" id="bottom-head-section">
				<img src="images/dd-head.svg" id="head" alt="Head" class="img-fluid mx-auto d-block">
				<h3 class="text-center">CREATIVITY STARTS WITH THOUGHT</h3>		
			</section>

			<!-- Nav Footer -->
      <section id="footer-nav" class="container-fluid row justify-content-center">
        <div class="col-xs">
          <a href="cremephraiche.html" class="text-center">&laquo; Previous</a>
        </div>
      </section>
		</main>

		<!-- Footer Line -->
		<hr/>

    <!-- Footer -->
    <footer class="text-center" id="footer">
      Copyright © Dowe Design Studio  All Rights Reserved
    </footer>

		<!-- Scripts -->
		
		<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
		<script type="text/javascript">
			function copyEmail() {
				var dummy = document.createElement("input");
				document.body.appendChild(dummy);
				dummy.setAttribute('value', "info@dowedesignstudio.com");
				dummy.select();
				document.execCommand('copy');
				document.body.removeChild(dummy);

				var email = document.getElementById("copyemailbtn").innerHTML = "Copied email to your clipboard!";
				setTimeout(() => {
					var email = document.getElementById("copyemailbtn").innerHTML = "<i class='bi bi-envelope'></i> info@dowedesignstudio.com";
				}, 2000);
			}

		</script>
	</body>

</html>