<?php

if($_POST) {
    $name = $_POST["visitor_name"];
	$email = $_POST["visitor_email"];
	$subject = $_POST["email_title"];
	$content = $_POST["visitor_message"];
	
    $toEmail = "alexandergreen.93@gmail.com";
    
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	   echo "<p>Thank you for contacting us.<br>We will reply to your message as soon as possible.<br>Go 'back' in your browser to return to Go Bible Studies.</p>";
	   } else {
        echo '<p>We are sorry but the email did not go through.<br>Please try again.</p>';
    }
}
?>