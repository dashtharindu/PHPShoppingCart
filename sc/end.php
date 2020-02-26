<!--Tharindu-D Shopping cart POWERED by PHP[v5]/OOP | Copyrights Tharindu-D | All rights reserved-->

<!--
<?php
session_start();
include_once("conman.php");
session_destroy();
$un = "Login";

//nav bar sessions
if(isset($_GET['user']))
{
	header('Location:users/profile.php');
}
if(isset($_GET['home']))
{
	unset($_SESSION['special']);
	header('Location:index.php');
}
if(isset($_GET['l-out']))
{
	session_destroy();
	header('Location:users/login.php');
}
if(isset($_GET['c-out']))
{
	header('Location:c-out.php');
}

//if press "back to Cart"
if(isset($_POST['back']))
{
header('Location:sup_cart.php');
}

?>
-->

<!DOCTYPE html>
<!--Created by Tharindu-D -->
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="SHORTCUT ICON" href="icon/icon.ico" type="image/x-icon" />
<title>Shopping Cart</title>
<link href="style/main.css" rel="stylesheet" type="text/css">
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
				<!--[if !IE]>-->
				<!--Created by Tharindu-D -->
				<object type="application/x-shockwave-flash" data="icon/logo.swf" width="128" height="86">
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
						<img src="icon/logo.png" alt="Get Adobe Flash player" width="128" height="86"/>
					</a>
				<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
		</div>

<table id="add_cart" style="margin-top : 140px ; margin-left : 25% ; margin-right : 25% ;" width="50%" >
<tr>
<td colspan="2"><font color="red"><b><big>Thank you for shopping with us...!<br /></big></b></font></td>
</tr>
<tr>
<td><br /><div id="a_btn" style="width : 160px !important ; "><a href="index.php" >Shopping again :)</a></div></td>
<td></td>
</tr>
</table>

</div>
</body>
</html>