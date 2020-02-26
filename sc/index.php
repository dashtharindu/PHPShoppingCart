<!--Tharindu-D Shopping cart-->

<!--
<?php
session_start();

//if not login user redirect to login page
if(!isset($_SESSION['log']))
{
	$un = Login ;
}else
{
	$un = $_SESSION['log'] ;
}

//set session to specified special
if(isset($_POST['Daily_s']))
{
	$_SESSION['special'] = "Daily";
	header('Location:sp_cart.php');
}
if(isset($_POST['Weekly_s']))
{
	$_SESSION['special'] = "Weekly";
	header('Location:sp_cart.php');
}
if(isset($_POST['Monthly_s']))
{
	$_SESSION['special'] = "Monthly";
	header('Location:sp_cart.php');
}

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

<div id="bg1">

		<div id="flashContent">
		<!--Tharindu-D logo-->
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
		
	<div id="banner" >	
	<img src="icon/banner.jpg" alt="banner" ><br/>
	</div>


<table id="cart">
<!--Created by Tharindu-D -->
<tr>
<td colspan="3"><font color="red"><big><b>Pick-up your specials....</b></big></font><br/>&nbsp;</td>
</tr>
<tr>	
<td><img src="foods/burger.jpg" alt="Daily Special" width="200px" height="150px"><br />
<div id="btn"><form method='post'><input type='submit' name="Daily_s" value='Daily Special'></form></div></td>
<td><img src="foods/cheese-pizza.jpg" alt="Weekly Special" width="200px" height="150px"><br />
<div id="btn"><form method='post'><input type='submit' name="Weekly_s" value='Weekly Special'></form></div></td>
<td><img src="foods/hotdog.jpg" alt="Monthly Special" width="200px" height="150px"><br />
<div id="btn"><form method='post'><input type='submit' name="Monthly_s" value='Monthly Special'></form></div></td>
</tr>
</table>
	
</div>



</body>
</html>