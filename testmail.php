<?php

  $subject_to='Takshak Miles Confirmation';
  $email_new = "ashwinkjoseph@gmail.com";
  $rand = "2";
        $email_to=$email_new;
          $message_to='Hi,<br/> We have recieved your request to sign in for "Takshak Miles", ';
            $message_to.='an online competition to travel and collect points through <strong>Mozilla Stumbler</strong>, ';
            $message_to.='an android app(firefox os app also available) and get rewarded.<br/><br/>';
            $message_to.="We have recieved a registration for this email id. Click on the link below to activate the competition. Please ignore this message if you haven't registered for the event.<br/>";
            $message_to.='<a href="http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'">http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'</a><br/><br/>';
            $message_to.='For more information <a href="http://traveller.takshak.in/">Click Here</a><br/><br/>';
            $message_to.='Thanks,<br/>Takshak Miles Team<br/><a href="http://takshak.in/">
           <img src="http://traveller.takshak.in/abhinav/assets/img/logo3.png" alt="Takshak 17."></a>';


//$headers = "From: miles@takshak.in";
//        // boundary
//        $semi_rand = md5(time());
//        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
//        // headers for attachment
//        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
//        // multipart boundary
//        $message_to .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message_to . "\n\n";
//        $message_to .= "--{$mime_boundary}\n";
//
//
//$ok = mail($email_new, $subject_to, $message_to, $headers);
//
// if ($ok) {
//                // echo "<p>mail sent to $to!</p>";
//$email_success=3;        }

//  require("sendgrid-php.php");
if (!extension_loaded('mbstring.so')) {
    dl('mbstring.so');  
}
require 'vendor/autoload.php';
// require($_SERVER['DOCUMENT_ROOT']."/sendgrid-php/sendgrid-php.php");
$from = new SendGrid\Email("T-Mile", "mile@takshak.com");
$subject = "Sending with SendGrid is Fun";
$to = new SendGrid\Email("User", $email_to);
$content = new SendGrid\Content("text/html", $message_to);
$mail = new SendGrid\Mail($from, $subject_to, $to, $content);
$apiKey = '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';
$sg = new \SendGrid($apiKey);
$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();
$email_success=3;        

?>
