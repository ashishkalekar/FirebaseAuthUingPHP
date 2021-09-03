<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);	
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "vendor/autoload.php";
function sendOTP($email,$otp) {

	$mail = new PHPMailer(true); 
	$mail->From = "ashu.apponix@gmail.com";
	$mail->FromName = "firebase project";
	
	$mail->addAddress("$email", "Recepient Name");
	$mail->addAddress("recepient1@example.com"); 
	$mail->Subject = "password reset";
	$message_body = "<h4 style='color: black'>Password reset link:</h4><h3>".$otp."</h3>
		";
		
	$mail->isHTML(true);
		$mail->MsgHTML($message_body);
	$result=$mail->send();
	
	return $result;
}
?>
