<?php
$userInfo=[$_POST['fname'],$_POST['lname'],$_POST['nom'],$_POST['email'],$_POST['bio'],$_POST['sub'],$_POST['qual'],$_POST['price']];
$dbCol=['Fname','Lname','Nom','Email','Bio','Subject','Qualification','Pricing','PrimarySubject','Grades','PasswordHash'];
$grades="";
$primary="";
$host="localhost";
$user="root";
$passhash= hash('sha256',''.$_POST['pass'].'',true);
try{
$db=new PDO("mysql:host=$host;3306",$user,$pass);

$db->exec("use test");
foreach($_POST['grade'] as $grade){
  $grades=$grades." ".$grade;
}
foreach($_POST['prime'] as $prime){
  $primary=$prime." ".$primary;
}
$db->exec("insert into user_info (".$dbCol[0].",".$dbCol[1].",".$dbCol[2].",".$dbCol[3].",".$dbCol[4].",".$dbCol[5].",".$dbCol[6].",".$dbCol[7].",".$dbCol[8].",".$dbCol[9].",".$dbCol[10].")".
"values ('".$userInfo[0]."','".$userInfo[0]."',".$userInfo[2].",'".$userInfo[3]."','".$userInfo[4]."','".$userInfo[5]."','".$userInfo[6]."','".$userInfo[7]."','".$primary."','".$grades."','".$passhash."')");
}catch(PDOException $e){
  echo $e->getMessage();
}
 ?>
