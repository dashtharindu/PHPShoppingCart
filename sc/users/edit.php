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

//nav bar sessions
if(isset($_GET['user']))
{
	unset($_SESSION['edit']);
	header('Location:profile.php');
}
if(isset($_GET['home']))
{
	unset($_SESSION['edit']);
	header('Location:../index.php');
}
if(isset($_GET['l-out']))
{
	session_destroy();
	header('Location:login.php');
}
if(isset($_GET['c-out']))
{
	unset($_SESSION['edit']);
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

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/mail.js"></script>
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
<td colspan="3"><font color="red"><big><b>Edit your informations....</b></big></font></td>
</tr>
</table>

<div id="btni" width="100%" >
<form action="db_update.php" method='post' onSubmit="return edit();" >
<table cellspacing="20" >
    <tr>
    <td colspan="2">
    <?php 
    if(isset($_SESSION['edit']))
    {
        echo "<div id='banner1' align='center'>".$_SESSION['edit']."</div>";
    } ?>
    </td>
	</tr>
	<tr>
		<td>First Name:</td>
		<td><?php echo "<input type='text' name='f_name' id='name1' value='".$fname."'>" ?><br />
        <div id='name1_error' class='error'>
    	Please insert your first name!
    	</div></td>
	</tr>
	<tr>
		<td>Last Name:</td>
		<td><?php echo "<input type='text' name='l_name' id='name2' value='".$lname."'>" ?><br />
        <div id='name2_error' class='error'>
    	Please insert your last name!
    	</div></td>
	</tr>
	<tr>
		<td>E-mail Address:<br />(Username)</td>
		<td><?php echo "<input type='text' name='email' id='email' value='".$un."'>" ?><br />
        <div id='email_error' class='error'>
    	Invalid E-mail!
    	</div></td>
	</tr>
	<tr>
		<td>Date of birth:</td>
		<td><?php echo "<input type='text' name='b_day' id='bday' value='".$bday."'>" ?><br />
        <div id='bday_error' class='error'>
    	Invalid Birthday!
    	</div></td>
	</tr>
	<tr>
		<td>Gender:</td>
		<td><select name='sex' id='sex'>
        <option <?php if($sex=="Female"){echo "selected";} ?> value="Female">Female</option>
        <option <?php if($sex=="Male"){echo "selected";} ?> value="Male">Male</option>
        </select><br /></td>
	</tr>
	<tr>
		<td></td>
		<td><div id="btnl"><input type='submit' id='submit' name='submit' value='Save'></div></td>
	</tr>
</table>
</form>
</div>




</div>
</body>
</html>