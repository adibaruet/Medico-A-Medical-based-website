<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
 include 'connection.php';

 if(isset($_POST["submit"])){

	$email = $_POST["email"];
	$code = mysqli_real_escape_string($database, rand(111111, 999999));

	
	$mail = new PHPMailer(true);

	try {
		//Server settings
		$mail->SMTPDebug = 0;                      //Enable verbose debug output
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'humairatadiba@gmail.com';                     //SMTP username
		$mail->Password   = 'ilrheicyquozsjmr';                               //SMTP password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
		$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

		//Recipients
		$mail->setFrom('adibaruet@gmail.com', 'MEDICO');
		$mail->addAddress($email);     //Add a recipient             //Name is optional

		// //Attachments        //Add attachments
		// $mail->addAttachment('assets/images/ruet.png', 'ruet.png');    //Optional name

		//Content
		$mail->isHTML(true);                                  //Set email format to HTML
		$mail->Subject = 'Reset Password Link';
		$mail->Body    = "Click The Link.
        \nhttp://localhost/change_password.php?email=$email";
		// $mail->AltBody = "";

	    if($mail->send()){
            echo '<script type="text/javascript">window.location = "reset_confirmation.html"</script>';
        }

		
	} catch (Exception $e) {
		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}
 }
?>