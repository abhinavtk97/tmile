<?php
error_reporting(0);
require_once('connectvars.php');
$dbc=mysqli_connect(DB_HOST2325,DB_USER2325,DB_PASSWORD2325,DB_NAME2325) or die('could not connect to database.');

$verific=0;
$sys_verified=0;
$used=0;
$plain_login=0;
$email=null;


if(isset($_GET['type'])||isset($_POST['email']))
{
if($_GET['type']==nick)
    $verific=1;
  if(isset($_GET['email'])){
                   
      $email=$_GET['email'];
        $query='SELECT * FROM our_travel WHERE email="'.$email.'"';
      $data=mysqli_query($dbc,$query);
      if(mysqli_num_rows($data)>0)
      {
          $sys_verified=1;
      }

}
else if(isset($_POST['email']))
  {      $email=$_POST['email'];
   $query='SELECT * FROM our_travel WHERE email="'.$email;
      $data=mysqli_query($dbc,$query);
      if(mysqli_num_rows($data)>0)
      {
          $sys_verified=1;
          echo "bl2";

      }

    
}}

    if(isset($_POST['submit']))
    {
        $nick=htmlspecialchars($_POST['nick']);
        $email=$_POST['email'];
        if(empty($_POST['nick']))
        {

        $error_msg="All essential fields must be filled.<br/>";
        $verific=1;

        }
        else
        {
            $query='UPDATE our_travel set nick="'.$nick.'" where email="'.$email.'"';
                            mysqli_query($dbc,$query);
                            header('Location:howto.php?email='.$email);


        }
           }
?>
<!DOCTYPE HTML>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="TRAVEL TO WIN">
    <title>T-Mile</title>
    <link rel="shortcut icon" href="/sponsor/images/favicon.ico" type="image/x-icon">
 <link rel="icon" href="assets/img/logo2.png" >
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php"><i class="glyphicon glyphicon-phone"></i>T-Mile</a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active" role="presentation"> <a href="http://takshak.in">Takshak Home </a> </li>
        <li role="presentation" title="Home"> <a href="index.php">Home</a> </li>
        <li role="presentation" > <a href="process.php">Leaderboard</a> </li>
        <li role="presentation" > <a href="howto.php">HowTo?</a> </li>
                </ul>
            </div>
        </div>
    </nav>
            <section class="testimonials">

        <div align="center">
         <a href="http:/takshak.in" target="_blank"><img src="/assets/img/logo.png" alt="T-Mile" id="logo" width="200"></a>

            <div id="main_content2">
                <a href="http://takshkamile.herokuapp.com" target="_blank" style="text-decoration:none; color:#FFF;">"T-Mile"</a>
            </div>
        </div>
        <div id="login_main" align="center">
<?php
                if($sys_verified==0)
                    echo 'You seems to have not yet registered. Go back to the <a href="http://takshakmile.herokuapp.com/" style="color:blue;" title="Home Page">home page</a> and enter your e-mail.<br/> Happy Travelling.<br/>';

                else if($verific==1&& $sys_verified==1)
                {
                    if($verific==1)
                    { ?>
                            <form method="post" action="nickchange.php">
                            <table>
                                <tr><td>Nickname: </td><td><input class="form-control" type="text" name="nick" class="in_login" placeholder="Your Nickname Here" maxlength="30" value="<?php if(isset($nick)) echo $nick;?>" required></td></tr>
                                <input type="hidden" name="email" value="<?php if(isset($_GET['email'])) echo $_GET['email']; else if(isset($email)) echo $email; ?>">
                                <tr><td></td><td><input class="btn btn-success" type="submit" name="submit" class="in_login" style="cursor:pointer;"></td></tr>
                            </table>
                                </form>

            <?php
                         if(isset($error_msg))
                            echo '<strong style="color:red;">'.$error_msg.'</strong>';
                    
                    }}

            ?>
                </div>
    </section>
    </body></html>
