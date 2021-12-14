<?php
$successMessage="";
$email="";
// $subject="";
// $message="";
$error = ""; $error1 = "" ; $error2 = ""; $error3 = ""; $error4 = "";
if(isset($_POST['btn'])){
	if(!$_POST['email']){
		$error1 = "Email Address is empty!";
	}
	if(!$_POST['subject']){
		$error2 = "subject field is required!";
	}
	if(!$_POST['message']){
		$error3 = "message field is required!";
	}
	if( !$_POST['email'] && filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  $error4 = "Email Address is invalid!";
}
if($error1 != "" || $error2 != "" || $error3 != "" || $error4 != ""){
	$error = "<strong>Danger!</strong> There were error(s) in your form!";
}
	else
	{
		// $emailTo = "4nm19cs207@gmail.com";
		// $subject = $_POST['subject'];
		// $message = $_POST['message'];
		// $headers = "From:".$_POST['email'];
		// if(mail($emailTo,$subject,$message,$headers)){
			$successMessage= "Congrats! Message was sent successfully!";
		// }
		// else{
		// 	$error = "Message was not sent,Try again Later!";
		// }
	}

}
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset = "utf-8">
   <title>Contact From Design</title>
   <link rel="stylesheet" href="CSS/contactusp.css">
 </head>
<body>

	<div class="Contact-box">
	<form action="" method="post">
		<h1>Contact Us</h1>
		<input type="text" class="input-field" placeholder="Your Name">
	<div>
		<input type="email" class="input-field" name="email" id="email" placeholder="Your Email">
		<div class = "error">
			<?php 
				echo $error1;
				echo $error4;
			?>
		</div>
	</div>
	<div>
		<input type="text" class="input-field" name="subject" id="subject" placeholder="Subject">
		<div class = "error">
			<?php 
				echo $error2;
			?>
		</div>
	</div>
	<div>
		<textarea type="text" class="input-field textarea-field" name="message" id="message" placeholder="Your Message"></textarea><br/>
		<div class = "error">
			<?php 
				echo $error3;
			?>
		</div>
	</div>
	<div>
		<button type="submit" class="btn" name="btn" id="btn">Send Message</button>
		<div class = "successMessage">
			<?php 
				echo $successMessage;
			?>
		</div>
		<div class = "errorMessage">
			<?php 
				echo $error;
			?>
		</div>
	</div>
		<button type="button" class="btn">Reset</button>
			 
			
	</form>
	</div>
</body>
</html>
