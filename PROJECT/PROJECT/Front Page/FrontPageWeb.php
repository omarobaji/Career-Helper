
<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Career Helper</title>
	<link rel="stylesheet" type="text/css" href="FrontPageWeb.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
	<script type="text/javascript" src="FrontPageWeb.js"></script>
</head>
<body class="grad">
	<?php

	$db=mysqli_connect("localhost","root","");
	if(!$db){
		print "Error - Couldnt connect to MYSQL";
	}
	$er=mysqli_select_db($db,"webproject");
	if(!$er){
		print "Error - couldnt select DB";
	}


	if(isset($_POST['register'])) {
		$FullName="";
		$Email="";
		$Options="";
		$Password="";
		$ConfirmPass="";
		if(isset($_POST['FullNameSignUp'])){
			$FullName=$_POST['FullNameSignUp'];
		}
		if (isset($_POST['EmailSignUp'])) {
			$Email=$_POST['EmailSignUp'];
		}
		if (isset($_POST['RadioGroup'])) {
			$Options=$_POST['RadioGroup'];
		}
		if (isset($_POST['PassSignUp'])) {
	# code...
			$Password=$_POST['PassSignUp'];
		}
		if (isset($_POST['ConfirmPass'])) {
	# code...
			$ConfirmPass=$_POST['ConfirmPass'];
		}
		$query="INSERT INTO usersignup (FullName,Email,Choices,Password,ConfirmPassword) VALUES('$FullName','$Email','$Options','$Password','$ConfirmPass')";
		$result =mysqli_query($db,$query) or die("Couldnt execute Query.");

	}

	?>




	<div class="auth-container">
		<div class="box box__login">
			<h1>Log in </h1>

			<form method="Post" action="ProfilePage.php">
				<input type="Email" placeholder="Email" name="EmailSignIn" required="required" id="Email?">
				<input type="Password" placeholder="Password" name="PasswordLogIn" required="required" id="PassCheck?">
				<br>
				<input type="Submit" value="LOG IN" name="login">
			</form>
			
		<?php

	if(isset($_POST['login'])) {
		$EmailLogin="";
		$PasswordLogIn="";
		if(isset($_POST['EmailSignIn']) && isset($_POST['PasswordLogIn'])){
			$EmailLogin=$_POST['EmailSignIn'];
			$PasswordLogIn=$_POST['PasswordLogIn'];
		}

		$r=mysqli_query($db,"SELECT * FROM usersignup where Email ='$EmailLogin' and Password = '$PasswordLogIn'");

		$count=mysqli_num_rows($r);
		if($count!='0'){
         header("location:ProfilePage.php");
		}else if($count=='0'){
        echo "<h3 style='color:#007bff; font-family: sans-serif; padding:10px;font-size:1.3rem;font-weight:600; height:75px;'>The Credentials you entered are incorrect, Please Enter correct Credentials.</h3>";
		}
	}



	?>
			<div class="bottom-text" style="text-align:left;">
			</div>
		</div>

		<div class="box box__signup">
			<h1>Dont have an account?</h1>

			<form action="FrontPageWeb.php" method="Post"> 
				<input type="text" placeholder="Full Name (First and Last)" name="FullNameSignUp" required="required">
				<input type="Email" placeholder="Email" name="EmailSignUp" required="required">
				<input type="radio" id="test1" name="RadioGroup"  value="Employer">
				<label for="test1">Looking for an Employee?</label>
				<br><br>
				<input type="radio" id="test2" name="RadioGroup" value="Employee">
				<label for="test2">Looking for a job?</label>

				<input type="Password" placeholder="Password" id="initial" name="PassSignUp" required="required">
				<input type="Password" placeholder="Confirm Password" id="second" name="ConfirmPass" required="required">
				<input value="CONFIRM" type="submit" name="register">
			</form>
			<script type="text/javascript">
				document.getElementById("second").onblur = chkPasswords; 
			</script>

		</div>
	</div>
	


</body>
</html>