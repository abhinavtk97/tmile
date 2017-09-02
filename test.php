<?php
           $subject_to='Takshak Miles Confirmation';
           $email_new = "ashwinkjoseph@gmail.com";
            $email_to=$email_new;
            $rand = "3";
            $message_to='Hi,<br/> We have recieved your request to sign in for "Takshak Miles", ';
            $message_to.='an online competition to travel and collect points through <strong>Mozilla Stumbler</strong>, ';
            $message_to.='an android app(firefox os app also available) and get rewarded.<br/><br/>';
            $message_to.="We have recieved a registration for this email id. Click on the link below to activate the competition. Please ignore this message if you haven't registered for the event.<br/>";
            $message_to.='<a href="http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'">http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'</a><br/><br/>';
            $message_to.='For more information <a href="http://traveller.takshak.in/">Click Here</a><br/><br/>';
            $message_to.='Thanks,<br/>Takshak Miles Team<br/><a href="http://takshak.in/">
            <img src="http://traveller.takshak.in/abhinav/assets/img/logo3.png" alt="Takshak 17."></a>';





// ini_set('SMTP', 'smtp.sendgrid.net');
// ini_set('smtp_port', 465);
// ini_set('username', 'apikey');
// ini_set('password', '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');
$headers = "From: miles@takshak.in";
        // boundary
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        // headers for attachment
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        // multipart boundary
        $message_to .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message_to . "\n\n";
        $message_to .= "--{$mime_boundary}\n";

        $to = $email_new;
        $subject = $subject_to;
        $body = $message_to;
        
        $host = "smtp.sendgrid.net";
        $port = "465";
        $username = "apikey";
        $password = "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";
        $from = "traveller@takshak.in";
        
        $headers = array ('From' => $from,
          'To' => $to,
          'Subject' => $subject);
        $smtp = Mail::factory('smtp',
          array ('host' => $host,
            'port' => $port,
            'auth' => true,
            'username' => $username,
            'password' => $password));
        
        $mail = $smtp->send($to, $headers, $body);
        
        if (PEAR::isError($mail)) {
          echo("
       " . $mail->getMessage() . "
       
       ");  } else {   echo("
       Message successfully sent!
       
       ");  } ?>

<!-- $ok = mail($email_new, $subject_to, $message_to, $headers);

 if ($ok) {
                echo "<p>mail sent to $to!</p>";
$email_success=3;
}
else{
        error_get_last();
} -->

<!-- ?> -->
