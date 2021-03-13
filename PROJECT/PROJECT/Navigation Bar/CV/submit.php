<?php

$exp=$_POST["exp"];

$des=$_POST["des"]; 

$exp1=$_POST["exp1"]; 

$des1=$_POST["des1"];

$exp2=$_POST["exp2"];

$des2=$_POST["ds2"];

$skl=$_POST["skill"];

$rate=$_POST["Rating"];

$skl1=$_POST["skill1"];

$rate1=$_POST["Rating1"];


$skl2=$_POST["skill2"];

$rate2=$_POST["Rating2"];

  
$name = $_POST["full_name"];
$experience = $_POST["experience"];
$faculty = $_POST["faculty"];
$major = $_POST["major"];
$city = $_POST["city"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$school_name =$_POST["school_name"];
$degree = $_POST["degree"];
$grad = $_POST["graduation_date"];

 


//connect to mysq

$db = mysqli_connect("localhost","root","");

if(!$db){echo("Not connected to db");
exit;}

//select my database
$er = mysqli_select_db($db , "webproject");
if(!$er){echo("Not Connected");
exit;}


header("location.href:step two.php");

$query  = "  INSERT INTO cvdb (experience, full_name,faculty ,major, city, phone, email , school_name, degree, graduation_date, exp ,exp1,exp2,des,des1,des2,skill,skill1,skill2,Rating,Rating1,Rating2) VALUES('$experience' , '$name' , '$faculty' ,'$major' , '$city' , '$phone' , '$email'  , '$school_name' , '$degree' , '$grad', '$exp' ,'$exp1','$exp2','$des', '$des1'  , '$des2' , '$skl' , '$skl1' , '$skl2' , '$rate' , '$rate1' , '$rate2')";


$result = mysqli_query($db,$query) or die("NO");

header("location:http://localhost/project/Navigation Bar/LookingForEmployee.php")



?>