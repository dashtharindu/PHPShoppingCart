<?php 
session_start();
	if(isset($_POST['submit']))
	{
	$fname = mysql_real_escape_string($_POST['f_name']);
	$lname = mysql_real_escape_string($_POST['l_name']);
	$email = mysql_real_escape_string($_POST['email']);
	$pw = mysql_real_escape_string($_POST['pass']);
	$pw1 = mysql_real_escape_string($_POST['pass1']);
	$bday = mysql_real_escape_string($_POST['b_day']);
	$sex = mysql_real_escape_string($_POST['sex']);
	
		if(strlen($fname)!=0 && strlen($lname)!=0 && strlen($pw)!=0 && $pw==$pw1 && strlen($bday)==10 && strlen($sex)!=0 )
		{
			if(filter_var($email,FILTER_VALIDATE_EMAIL))
			{
			include('conman.php');
			$check = mysql_query("SELECT * FROM log WHERE username='$email'") or die("Checking Error : ".mysql_error());
			 if(mysql_num_rows($check)==0)
			 {
			 include('conman.php');
			 $pwEn = md5($pw);
			 $sql = mysql_query("INSERT INTO log VALUES ('$email','$pwEn','$fname','$lname','$bday','$sex')")
			 or die ("Registration Error : ".mysql_error());
			 $_SESSION['reg'] = $fname;
			 header('Location:login.php');
			 }
			 else
			 {
			 $_SESSION['reg'] = "Opzz! Your Email address is alredy exist.";
			 header('Location:reg.php');
			 }
			}
			else
			{
			$_SESSION['reg'] = "Email Error ! : Please Enter Valid Email";
			header('Location:reg.php');
			}
		}
		else{
		$_SESSION['reg'] = "Data Error ! : Please re-register";
		header('Location:reg.php');
		}
	}
			

?>