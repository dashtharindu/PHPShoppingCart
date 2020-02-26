<!--Tharindu-D Shopping cart-->

<!--
<?php
session_start();

if(!isset($_SESSION['log']))
{
	$un = "Login" ;
}
else
{
	$un = $_SESSION['log'] ;
}

//nav bar sessions
if(isset($_GET['user']))
{
	unset($_SESSION['reg']);
	unset($_SESSION['alert']);
	header('Location:profile.php');
}
if(isset($_GET['home']))
{
	unset($_SESSION['reg']);
	unset($_SESSION['alert']);
	header('Location:../index.php');
}
if(isset($_GET['l-out']))
{
	session_destroy();
	header('Location:login.php');
}
if(isset($_GET['c-out']))
{
	unset($_SESSION['reg']);
	unset($_SESSION['alert']);
	header('Location:../c-out.php');
}

//if press submit button
if(isset($_POST['sub']))
{	
	unset($_SESSION['reg']);
	unset($_SESSION['alert']);
	
	include('conman.php');
	$un = mysql_real_escape_string($_POST['email']);	
	$pw = mysql_real_escape_string($_POST['pass']);
	$pwE = md5($pw);
	$sql = mysql_query("SELECT * FROM log WHERE username='$un' AND pass='$pwE'") or die("Query Error : ".mysql_error());
	
	if(mysql_num_rows($sql)==1)
	{
		$_SESSION['log'] = $un;
		header('Location:../index.php');
	}
	else
	{
		$_SESSION['alert'] = "Incorrect username or password!";
	}
}
?> 
-->

<!DOCTYPE html>
<!--Created by Tharindu-D -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="../icon/icon.ico" type="image/x-icon" />
<title>Shopping Cart</title>
<link rel="stylesheet" href="../style/main.css" type="text/css">
<link rel="stylesheet" href="css/users.css" type="text/css" />
</head>

<body>
<nav class="nav">
<table>
<tr>
<td><div id="btn"><form method='get'><input type='submit' name="user" value='<?php echo $un ; ?>'></form></div></td>
<td><div id="btn"><form method='get'><input type='submit' name="home" value='Home'></form></div></td>
<?php 
if(isset($_SESSION['log']))
{
echo '<td><div id="btn"><form method="get"><input type="submit" name="l-out" value="Log-Out"></form></div></td>'; 
}
?>
<td><div id="btn"><form method='get'><input type='submit' name="c-out" value='Check-Out'></form></div></td>
<td><small>&copy;&nbsp;Tharindu-D | All rights reserved.</small></td>
</tr>
</table>
</nav>

<div id="bg1">

		<div id="flashContent">
		<!--Tharindu-D logo-->
			<object width="128" height="86" align="middle">
				<param name="movie" value="../icon/logo.swf" />
				<param name="quality" value="best" />
				<param name="bgcolor" value="#ffffff" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="transparent" />
				<param name="scale" value="showall" />
				<param name="menu" value="false" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--[if !IE]>-->
				<!--Created by Tharindu-D -->
				<object type="application/x-shockwave-flash" data="../icon/logo.swf" width="128" height="86">
					<param name="movie" value="icon/logo.swf" />
					<param name="quality" value="best" />
					<param name="bgcolor" value="#ffffff" />
					<param name="play" value="true" />
					<param name="loop" value="true" />
					<param name="wmode" value="transparent" />
					<param name="scale" value="showall" />
					<param name="menu" value="false" />
					<param name="devicefont" value="false" />
					<param name="salign" value="" />
					<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="../icon/logo.png" alt="Get Adobe Flash player" width="128" height="86"/>
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>
		
	<div id="banner" >	
	<img src="../icon/banner.jpg" alt="banner" ><br/>
	</div>

&nbsp;&nbsp;&nbsp;&nbsp;<font color="red"><big><b>Login to Tharindu-D....</b></big></font>
<form action="" method='post' id='contact_form'>
<table cellspacing="20" >
    <tr>
        <td colspan="2">
        <?php
        if(isset($_SESSION['reg']))
        {
            echo ("<div id='banner1'><strong>Thank you!</strong><br /><br /><i>Hello ".$_SESSION['reg']." ,<br />You are registered successfully.<br />Please login now....</i></div>");
        }
        ?>
        <?php 
        if(isset($_SESSION['alert']))
        {
            echo "<div id='banner1' align='center'>".$_SESSION['alert']."</div>";
        } ?>
        </td>
    </tr>
    <tr>
		<td>Username(E-mail):</td>
		<td><div id="btni"><input type='text' name='email' id='name'></div></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><div id="btni"><input type='password' name='pass' id='name'></div></td>
	</tr>
	<tr>
		<td><div id="btnl"><input type='submit' name="sub" value='Submit'></div></td>
		<td><div id="btnl"><input type='reset' value='Clear all'></div></td>
	</tr>
	<tr>
	<td colspan = "2"><a href="reg.php"><small><b>Not yet registered?</b></small></a></td>
	</tr>
</table>
</form>

	
</div>



</body>
</html>