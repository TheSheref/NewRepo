<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="CSS\navigation.css">
  <link rel="stylesheet" href="CSS\signUp.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
include 'Navigation/nav.php';
echo $header;
 ?>
  <section>
    <div id="info">
      <div id="teacher"><p class="side">Become A</p><p class="main"> Teacher</p></div>
      <br>
      <ul id="benefits">
        <li>Our platform is free.</li>
        <li>Gain new students.</li>
        <li>Manage your students effectively.</li>
        <li>Adevertise yourself.</li>
        <li>Communicate with your student.</li>
      </ul>
      <input class="checkbox" type="checkbox" name="pp" value="PrivacyPolicy"><a href="#" id="check">Privacy & Policy</a>
    </div>
<form  method="post" action="data.php" name="form" enctype="multipart/form-data">
  <div class="form">
  <p class="error">Invalid First Name</p>
  <input class="input" type="text" name="fname" placeholder="First Name" required>
  <p class="error">Invalid Last Number</p>
  <input class="input" type="text" name="lname" placeholder="Last Name" required>
  <p class="error">Invalid Number</p>
  <input class="input" type="text" name="nom" placeholder="Mobile Number Ex: 09*********" required>
<p class="error">Invalid Email</p>
  <input class="input" type="text" name="email" placeholder="Email" required>
  <p class="error">Invalid Password</p>
  <input class="input" type="text" name="pass" placeholder="Password" required>
<div id="submit" onclick="next(0)">Next</div>
  <div class="form">
<p class="error">Invalid Bio</p>
<input class="input" type="text" name="bio" placeholder="Bio" required>
<p class="error">Invalid Subjects</p>
<input class="input" type="text" name="sub" placeholder="Subjects" required>
<p class="error">Invalid Quallification</p>
<input class="input" type="text" name="qual" placeholder="Qualification" required>
<p class="error">Invalid Price</p>
<input class="input" type="text" name="price" placeholder="Tutoring Price" required>
<p class="error">Invalid Availabilty</p>
<input class="input" type="text" name="avail" placeholder="Availability Ex: Sunday, Monday" required>
<div id="submit" onclick="next(1)">Next</div>
</div>
  <div class="form">
    <div class="che">
    <p>Primary Subject</p>
    <p class="error">Invalid Primary Subjects</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="English"><p id="check-form">English</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="Math"><p id="check-form">Math</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="Science"><p id="check-form">Science</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="French"><p id="check-form">French</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="Arabic"><p id="check-form">Arabic</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="Sports"><p id="check-form">Sports</p>
    <input class="checkbox-form" type="checkbox" name="prime[]" value="Music"><p id="check-form">Music</p>
</div>
    <div class="che">
      <p>Grades</p>
<p class="error">Invalid Grade</p>
<input class="checkbox-form" type="checkbox" name="grade[]" value="Kindergarden"><p id="check-form">Kindergarden</p>
<input class="checkbox-form" type="checkbox" name="grade[]" value="Elementary"><p id="check-form">Elementary grade 1-5</p>
<input class="checkbox-form" type="checkbox" name="grade[]" value="Middle"><p id="check-form">Middle School grade 6-8</p>
<input class="checkbox-form" type="checkbox" name="grade[]" value="High"><p id="check-form">High School grade 9-12</p>
<button id="submit" type="submit">Welcome</button>
</div>
</div>
</div>
</form>
<span class="level"></span>
<span class="level"></span>
<span class="level"></span>
<script type="text/javascript" src="Js/form.js"></script>
  </section>
  <?php
  include 'Navigation/nav.php';
  echo $footer;
   ?>
</body>
</html>
