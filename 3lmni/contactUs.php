<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';

if (!empty($_GET) &&preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/',$_GET['email'])){
$mail=new PHPMailer();
try{
$mail->SMTPDebug=0;
$mail->isSMTP();
$mail->SMTPAuth=true;
$mail->Host="smtp.gmail.com";
$mail->Username="hassan.sheref.jr@gmail.com";
$mail->Password="kgSw+gr5EJpaPbk";
$mail->SMTPSecure="ssl";
$mail->Port = 465;
$mail->setFrom($_GET['email'],$_GET['fname']);
$mail->addAddress("hassan.sheref.jr@gmail.com");
$mail->Subject="Customer Message";
$mail->isHTML();
$mail->Body=$_GET['desc'];
$mail->send();
$var="<img id='tick' src='IMGS/Nav/tick.png'>";
}catch(Exception $e){
  $var="<img id='tick' src='IMGS/Nav/ui.png'>";
}
}else{
$var="<img id='tick' src='IMGS/Nav/ui.png'>";
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS\navigation.css">
  <link rel="stylesheet" href="CSS\contactUs.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  include 'Navigation/nav.php';
  echo $header;
   ?>
  <section>
    <div id="contact-info">
<p id="title">Contact Us</p>
<p id="main">Email:</p><p id="side">EXAMPLE@emal.com</p>
<p id="main">Number:</p><p id="side">099#####</p>
    </div>
    <form name="Form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get" enctype="multipart/form-data" >
      <?php
      echo "<div id='mail'>$var</div>";
       ?>
      <div class="cont">
        <p id="input-name">Full Name</p>
            <input class="input" type="text" name="fname" placeholder="Full Name" required>
</div>
<div class="cont">
  <p id="input-name">Email</p>
    <input class="input" type="text" name="email" placeholder="Email account" required>
</div>
<div class="cont">
  <p id="input-name">Description</p>
      <textarea class="input" id="des" type="textarea" name="desc" placeholder="Description" required></textarea>
</div>
<button id="submit" type="submit" onclick="sub()">Send Message</button>
    	</form>
  </section>
  <?php
  include 'Navigation/nav.php';
  echo $footer;
   ?>
  </body>
  </html>
