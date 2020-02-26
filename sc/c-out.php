<!--Tharindu-D Shopping cart POWERED by PHP[v5]/OOP | Copyrights Tharindu-D | All rights reserved-->

<!--
<?php
session_start();
include_once("conman.php");

if(!isset($_SESSION['log']))
{
	header('Location:users/login.php');
}
	$un = $_SESSION['log'] ;

if(!isset($_SESSION['special']))
{
	header('Location:index.php');
}
$sp = $_SESSION['special'];

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
<?php
    //current URL of the Page cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

if(isset($_SESSION["meals"]))
{
    $total = 0;
	
echo "	
		<tr>
		<th colspan = '2'>
		<p><big>Your cart....</big></p>
		</th>
		</tr>
		<tr>
		<td>
		<div id='btn_back'><form method='post'><input type='submit' name='back' value='<< Back to Cart'></form></div><br/>&nbsp;</td><td></td>
		</tr>
	 ";
		
    foreach ($_SESSION["meals"] as $cart_itm)
	{
		echo '<tr><td rowspan = "3">
		<br/><div id="b_btn" style="width:40px !important ;"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&nbsp;X</a></div>
		<img src="foods/'.$cart_itm["image"].'"></td>' ;
		echo '<td><br>'.$cart_itm["name"].'</td></tr>';
		echo '<tr><td><small>Qty:'.$cart_itm["qty"].'</small></td></tr>';
		if($sp==$cart_itm["sp"])
		{
		echo '<tr><td><hr><font color="red">Rs.'.$cart_itm["sp_price"].'</font></td></tr>';
		}else
		{
		echo '<tr><td><hr>Rs.'.$cart_itm["price"].'</td></tr>';
		echo '<tr><td colspan = "2"><hr /></td></tr>';
		}		
		
		if($sp==$cart_itm["sp"])
		{
        $subtotal = ($cart_itm["sp_price"]*$cart_itm["qty"]);
		}else
		{
		$subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
		}
        $total = ($total + $subtotal);
    }
		echo '<tr><td colspan="2">';
		echo '<strong>Sub Total:</strong> Rs.'.$total.'/=';
		echo '</tr></td>';

		echo '<tr><td colspan="2"><div id="a_btn"><a href="end.php" >Order now</a></div></td></tr></table>';
}else
{
echo "	
		<tr>
		<th colspan = '2' width='200px'>
		<p><font color='red'>Your cart is Empty !</font></p>
		</th>
		</tr>
		</table>
		";
}

?>

</div>
</body>
</html>