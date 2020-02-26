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

//if press "back to special"
if(isset($_POST['back']))
{
header('Location:sp_cart.php');
}

if(isset($_POST['c-out']))
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

<table id="cart" style="padding-top : 100px ;">
<!--Created by Tharindu-D -->
<tr>
<td colspan="3"><font color="red"><big><b>Full menu (<?php echo $sp ; ?> specials)....</b></big></font></td>
</tr>
<tr>
<td colspan="3">
	<table id="tb_back">
	<tr><td colspan = '2'>&nbsp;</td></tr><tr><td colspan = '2'>&nbsp;</td></tr>
	<tr>
	<td><div id="btn_back"><form method='post'><input type='submit' name="back" value='<< Back'></form></div><br/>&nbsp;</td>
    <td><div id="btn_back"><form method='post'><input type='submit' name="c-out" value='Go to Check-Out >>'></form></div><br/>&nbsp;</td>
	</tr>
	</table>
</td>
</tr>
</table>

<div width="100%" >
<div style="float : left ; width : 67% ;">

    <?php
    //current URL of the Page cart_update.php redirects back to this URL
	$current_url = base64_encode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    
	$results = $mysqli->query("SELECT * FROM `rest` ORDER BY id ASC");

        //fetch results set as object and output HTML
        while($obj = $results->fetch_object())
        {
		echo '<div class="food">';
		echo '<form method="post" action="cart_update.php">';
		echo '<img src="foods/'.$obj->image.'" alt="Daily Special" width="200px" height="150px"><br />';
		echo '<strong>'.$obj->name.'</strong><br />';
		if($sp==$obj->sp)
		{
		echo '<strike>Rs.'.$obj->price.'</strike> &nbsp;&nbsp;&nbsp;&nbsp; ';
		echo '<font color="red">Rs.'.$obj->sp_price.'</font> <br />';
		}else
		{
		echo 'Rs.'.$obj->price.'<br />';
		}
		
		echo '<input type="text" name="meal_qty" value="1" size="2" />';
		echo '<div id="c_btn"><input type="submit" value="Add to cart"/></div>';
		
        echo '<input type="hidden" name="code" value="'.$obj->code.'" />';
        echo '<input type="hidden" name="type" value="add" />';
		echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
        echo '</form>';
        echo '</div>';
        }

    ?> 
</div>

<div style="float : left ;">

<table id="add_cart" width="100%" cellspacing="10">
<?php
if(isset($_SESSION["meals"]))
{
    $total = 0;
	
echo "	
		<tr>
		<th colspan = '2'>
		<p><big>Your cart....</big></p>
		</th>
		</tr>
	 ";
		
    foreach ($_SESSION["meals"] as $cart_itm)
	{
		echo '<tr><td rowspan = "3"><img src="foods/'.$cart_itm["image"].'" height="90px"></td>' ;
		echo '<td><small>'.$cart_itm["name"].'</small></td></tr>';
		echo '<tr><td><small>Qty:'.$cart_itm["qty"].'</small></td></tr>';
		if($sp==$cart_itm["sp"])
		{
		echo '<tr><td><hr><small><font color="red">Rs.'.$cart_itm["sp_price"].'</font></small></td></tr>';
		}else
		{
		echo '<tr><td><hr><small>Rs.'.$cart_itm["price"].'</small></td></tr>';
		}		
		echo '<tr><td colspan="2">';
		echo '<div id="b_btn"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">Remove Item</a></div><br/><hr />';
		echo '</tr></td>';
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
		echo '<strong>Total:</strong> Rs.'.$total.'/=';
		echo '</tr></td>';

		echo '<tr><td colspan="2"><div id="a_btn"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></div></td></tr></table>';
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
</div>




</div>
</body>
</html>