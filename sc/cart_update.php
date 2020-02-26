<?php
session_start();
include_once("conman.php");

//empty cart by distroying current session
if(isset($_GET["emptycart"]) && $_GET["emptycart"]==1)
{
	$return_url = base64_decode($_GET["return_url"]); //return url
	unset($_SESSION['meals']);
	header('Location:'.$return_url);
}

//add item in shopping cart
if(isset($_POST["type"]) && $_POST["type"]=='add')
{
	$code 	= filter_var($_POST["code"], FILTER_SANITIZE_STRING); //Meal code
	$meal_qty 	= filter_var($_POST["meal_qty"], FILTER_SANITIZE_NUMBER_INT);
	$return_url 	= base64_decode($_POST["return_url"]); //return url


	//MySqli query - get details of item from db using meal code
	$results = $mysqli->query("SELECT * FROM `rest` WHERE code='$code' LIMIT 1");
	$obj = $results->fetch_object();
	
	if ($results) { //we have the meal info 
		
		//prepare array for the session variable
		$new_meal = array(array('name'=>$obj->name, 'code'=>$code, 'qty'=>$meal_qty, 'price'=>$obj->price, 'image'=>$obj->image, 'sp'=>$obj->sp, 'sp_price'=>$obj->sp_price));
		
		if(isset($_SESSION["meals"])) //if we have the session
		{
			$found = false; //set found item to false
			
			foreach ($_SESSION["meals"] as $cart_itm) //loop through session array
			{
				if($cart_itm["code"] == $code)
				{ 
					//the item exist in array
					$meal[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$meal_qty, 'price'=>$cart_itm["price"], 'image'=>$cart_itm["image"], 'sp'=>$cart_itm["sp"], 'sp_price'=>$cart_itm["sp_price"]);
					$found = true;
				}else{
					//item doesn't exist in the list, just retrive old info and prepare array for session var
					$meal[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"], 'image'=>$cart_itm["image"], 'sp'=>$cart_itm["sp"], 'sp_price'=>$cart_itm["sp_price"]);
				}
			}
			
			if($found == false) //we didn't find item in array
			{
				//add new user item in array
				$_SESSION["meals"] = array_merge($meal, $new_meal);
			}else{
				//found user item in array list, and increased the quantity
				$_SESSION["meals"] = $meal;
			}
			
		}else{
		
			//create a new session var if does not exist
			$_SESSION["meals"] = $new_meal;
		}
		
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}

//remove item from shopping cart
if(isset($_GET["removep"]) && isset($_GET["return_url"]) && isset($_SESSION["meals"]))
{
	$code 	= $_GET["removep"]; //get the meal code to remove
	$return_url 	= base64_decode($_GET["return_url"]); //get return url

	
	foreach ($_SESSION["meals"] as $cart_itm) //loop through session array var
	{
		if($cart_itm["code"]!=$code)
		{ //item doesn't exist in the list
			$meal[] = array('name'=>$cart_itm["name"], 'code'=>$cart_itm["code"], 'qty'=>$cart_itm["qty"], 'price'=>$cart_itm["price"], 'image'=>$cart_itm["image"], 'sp'=>$cart_itm["sp"], 'sp_price'=>$cart_itm["sp_price"]);
		}
		
		//create a new meal list for cart
		$_SESSION["meals"] = $meal;
	}
	
	//redirect back to original page
	header('Location:'.$return_url);
}
?>