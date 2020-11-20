<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS\navigation.css">
  <link rel="stylesheet" href="CSS\homepage.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <?php
  include 'Navigation/nav.php';
  echo $header;
   ?>
  <section>
  <div id="landing">
    <img src="IMGS\General\pexels-cottonbro-4778424.jpg" alt="pic" id="landing-pic">
    <div id="landing-txt">A way to find a tutor<br> in syria
      <br> <a href="#" id="shrt-browse">Find A Tutor</a></div>
  </div>

  <div id="why">
      <div id="why-txt">Why Should You Use It</div>
  <div class="cont-why">
<img class="img-why" src="IMGS\Icons\security.png">
<p class="txt-why">We Value Your Security</p>
    </div>
    <div class="cont-why">
  <img class="img-why" src="IMGS\Icons\cake.png">
  <p class="txt-why">Finding A Tutor Is A Piece Of Cake</p>
      </div>
      <div class="cont-why">
    <img class="img-why" src="IMGS\Icons\satisfaction.png">
    <p class="txt-why">We Strive For Your Satisfaction</p>
        </div>
        <div class="cont-why">
      <img class="img-why" src="IMGS\Icons\trust.png">
      <p class="txt-why">Our Platform Is Reliable</p>
          </div>
  </div>
  <div id="manual">
<div id="title">Using Our Platform Is <b>Simple</b></div>
<div class="instruction"><div class="order">1</div>
<p>Start by making an account.</p>
</div>
<div class="instruction"><div class="order">2</div>
<p>Start searching for a tutor.</p>
</div>
<div class="instruction"><div class="order">3</div>
<p>Once a tutor is found, request a lesson. </p>
</div>
<div class="instruction"><div class="order">4</div>
<p>The teacher wil either accept or decline the request, however once accepted you will be provided with all the info required.</p>
</div>
  </div>
  <div id="signup">
    <p id="title">Join Us</p>
    <div id="student" class="signup">
    <div class="teacher-student"><p class="side">Become A</p><p class="main"> Student</p></div>
      <ul id="benefits">
        <li>Our platform is free.</li>
        <li>It is easy to find a teacher.</li>
        <li>Find a teacher near you.</li>
        <li>See teachers info.</li>
        <li>Book online.</li>
      </ul>
 <a href="#" class="signUp-button">Sign Up</a>
      </div>
      <div id="teacher" class="signup">
        <div class="teacher-student"><p class="side">Become A</p><p class="main"> Teacher</p></div>
        <ul id="benefits">
          <li>Our platform is free.</li>
          <li>Gain new students.</li>
          <li>Manage your students effectively.</li>
          <li>Adevertise yourself.</li>
          <li>Communicate with your student.</li>
        </ul>
 <a href="#" class="signUp-button">Sign Up</a>
        </div>
  </div>
    </section>
    <?php
    include 'Navigation/nav.php';
    echo $footer;
     ?>
</body>
</html>
