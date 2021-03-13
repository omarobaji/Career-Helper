<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
  $db=mysqli_connect("localhost","root","");
    $er=mysqli_select_db($db,"webproject");
    $query="SELECT Major  FROM usersignup ";
   if (isset($_POST['EmailSignIn'])) {
   	$PrintEmail=$_POST['EmailSignIn'];
   	echo $PrintEmail;
   }
   if (isset($_POST['FullNameSignUp'])) {
   	$PrintName=$_POST['FullNameSignUp'];
   	echo $PrintName;
   }

?>

</body>
</html>