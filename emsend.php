<?php
error_reporting(0);
if(isset($_GET['type'])||isset($_POST['rand']))
{ if($_GET['type']==send)
    $sendic=1;
  if(isset($_GET['email'])&&isset($_GET['rand']))
  {
      echo 'get';
      $email_new=$_GET['email'];
      $rand=$_GET['rand'];
        $subject_to='Takshak Miles Confirmation';
            $email_to=$email_new;
            $message_to='Hi,<br/> We have recieved your request to sign in for "Takshak Miles", ';
            $message_to.='an online competition to travel and collect points through <strong>Mozilla Stumbler</strong>, ';
            $message_to.='an android app(firefox os app also available) and get rewarded.<br/><br/>';
            $message_to.="We have recieved a registration for this email id. Click on the link below to activate the competition. Please ignore this message if you haven't registered for the event.<br/>";
            $message_to.='<a href="http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'">http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'</a><br/><br/>';
            $message_to.='For more information <a href="http://traveller.takshak.in/">Click Here</a><br/><br/>';
            $message_to.='Thanks,<br/>Takshak Miles Team<br/><a href="http://takshak.in/">
            <img src="http://traveller.takshak.in/abhinav/assets/img/logo.png" alt="Takshak 17."></a>';

      $headers = "From: miles@takshak.in";
        // boundary
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        // headers for attachment
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        // multipart boundary
        $message_to .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message_to . "\n\n";
        $message_to .= "--{$mime_boundary}\n";


$ok = mail($email_new, $subject_to, $message_to, $headers);

      var_dump($ok);
 if ($ok) {
                // echo "<p>mail sent to $to!</p>";
$email_success=3;        }

      }


  else if(isset($_POST['email'])&&isset($_POST['rand']))
  {
      echo 'post';
      $email_to=$_POST['email'];
      $rand=$_POST['rand'];
      $subject_to='Takshak Miles Confirmation';
            $email_to=$email_new;
            $message_to='Hi,<br/> We have recieved your request to sign in for "Takshak Miles", ';
            $message_to.='an online competition to travel and collect points through <strong>Mozilla Stumbler</strong>, ';
            $message_to.='an android app(firefox os app also available) and get rewarded.<br/><br/>';
            $message_to.="We have recieved a registration for this email id. Click on the link below to activate the competition. Please ignore this message if you haven't registered for the event.<br/>";
            $message_to.='<a href="http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'">http://traveller.takshak.in/abhinav/login.php?type=verify&email='.$email_new.'&rand='.$rand.'</a><br/><br/>';
            $message_to.='For more information <a href="http://traveller.takshak.in/">Click Here</a><br/><br/>';
            $message_to.='Thanks,<br/>Takshak Miles Team<br/><a href="http://takshak.in/">
            <img src="http://traveller.takshak.in/abhinav/assets/img/logo.png" alt="Takshak 17."></a>';
      $headers = "From: miles@takshak.in";
        // boundary
        $semi_rand = md5(time());
        $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
        // headers for attachment
        $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\"";
        // multipart boundary
        $message_to .= "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $message_to . "\n\n";
        $message_to .= "--{$mime_boundary}\n";


$ok = mail($email_new, $subject_to, $message_to, $headers);
var_dump($ok);
 if ($ok) {
                // echo "<p>mail sent to $to!</p>";
$email_success=3;        }
      }


}
else
{
    $no_send=1; //If login script is required
}
?>
