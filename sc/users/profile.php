<!--Tharindu-D Shopping cart POWERED by PHP[v5]/OOP | Copyrights Tharindu-D | All rights reserved-->

<!--
<?php
session_start();

if(!isset($_SESSION['log']))
{
	$un = "Login" ;
	header('Location:login.php');
}
else{
$un = $_SESSION['log'];
include('conman.php');

$sql = mysql_query("select * FROM log WHERE username='$un'") or die ("Data Reading Error: ".mysql_error());

	while($row = mysql_fetch_array($sql))
	{
		$fname = $row['f_name'];
		$lname = $row['l_name'];
		$bday = $row['b_day'];
		$sex = $row['sex'];
	}
}
if(isset($_POST['edit']))
{
	unset($_SESSION['profile']);
	header('Location:edit.php');
}
if(isset($_POST['pw']))
{
	unset($_SESSION['profile']);
	header('Location:pw.php');
}

//nav bar sessions
if(isset($_GET['user']))
{
	unset($_SESSION['profile']);
	header('Location:profile.php');
}
if(isset($_GET['home']))
{
	unset($_SESSION['profile']);
	header('Location:../index.php');
}
if(isset($_GET['l-out']))
{
	session_destroy();
	header('Location:login.php');
}
if(isset($_GET['c-out']))
{
	unset($_SESSION['profile']);
	header('Location:../c-out.php');
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

<div id="bg">

		<!--Tharindu-D logo-->
		<div id="flashContent">
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
				<object type="application/x-shockwave-flash" data="icon/logo.swf" width="128" height="86">
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
				<!--<![endif]-->
					<a href="http://www.adobe.com/go/getflash">
						<img src="../icon/logo.png" alt="Get Adobe Flash player" width="128" height="86"/>
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>

		
<table id="cart" style="padding-top : 100px ;">
<!--Created by Tharindu-D -->
<tr>
<td colspan="3"><font color="red"><big><b>Your registration details....</b></big></font></td>
</tr>
</table>

<div id="btni" width="100%" >
<form method="post" >
<table cellspacing="20" >
    <tr>
    <td colspan="2">
    <?php 
    if(isset($_SESSION['profile']))
    {
        echo "<div id='banner1' align='center'>".$_SESSION['profile']."</div>";
    } ?>
    </td>
	</tr>
	<tr>
		<td width="180">Full Name:</td>
		<td width="200"><?php echo $fname." ".$lname; ?></td>
	</tr>
	<tr>
		<td>Birth Day:</td>
		<td><?php echo $bday; ?></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td><?php echo $sex; ?></td>
	</tr>
	<tr>
		<td><div id="btnl" width="180"><input type="submit" name="pw" value="Change Password"></div></td>
		<td><div id="btnl"><input type="submit" name="edit" value="Edit your info."></div></td>
	</tr>
</table>
</form>
</div>




</div>
</body>
</html>