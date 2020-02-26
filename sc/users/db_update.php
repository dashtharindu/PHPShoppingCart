<?php 
session_start();
	if(isset($_POST['submit']))
	{
	$luser = $_SESSION['log'];
	$fname = mysql_real_escape_string($_POST['f_name']);
	$lname = mysql_real_escape_string($_POST['l_name']);
	$email = mysql_real_escape_string($_POST['email']);
	$bday = mysql_real_escape_string($_POST['b_day']);
	$sex = mysql_real_escape_string($_POST['sex']);
	
		if(strlen($fname)!=0 && strlen($lname)!=0 && strlen($bday)==10 && strlen($sex)!=0 )
		{
			if(filter_var($email,FILTER_VALIDATE_EMAIL))
			{
			include('conman.php');
			 $sql = mysql_query("UPDATE log SET username='$email', f_name='$fname', l_name='$lname', b_day='$bday', sex='$sex' WHERE username='$luser'")
			 or die ("Registration Error : ".mysql_error());
			 unset($_SESSION['edit']);
			 $_SESSION['profile'] = "Your profile was successfully updated.";
			 header('Location:profile.php');
			}
			else{
			$_SESSION['edit'] = "Email Error ! : Please Enter Valid Email";
			header('Location:edit.php');
			}
		}
		else{
		$_SESSION['edit'] = "Data Error ! : Please re-registe";
		header('Location:edit.php');
		}
	}
			


?>

<body>
</body>
</html>