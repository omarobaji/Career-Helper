<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
require "search.php";

	?>
	<?php
	   $db=mysqli_connect("localhost","root","");
     $er=mysqli_select_db($db,"webproject");
	$Majors=mysqli_real_escape_string($db,$_GET['major']);
	$FullNames=mysqli_real_escape_string($db,$_GET['full_name']);
	$slqs="SELECT * FROM cvdb WHERE Major='$Majors' AND FullName='$FullNames'";
	$db=mysqli_connect("localhost","root","");
	$er=mysqli_select_db($db,"webproject");
	$query1="SELECT * FROM employeetab";
	$result1= mysqli_query($db,$query1);
	$queryResults = mysqli_num_rows($result1);
	if ($queryResults > 0) {
		while ($rows  = mysqli_fetch_assoc($result1)) {
			echo $rows['major']." ".$rows['full_name'];
		}
	}
	?>
</body>
</html>