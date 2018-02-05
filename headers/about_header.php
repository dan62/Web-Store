<?php
session_start();
if(isset($_SESSION["uid"])){
	$cart = "Cart";
	$cart_link = "cart.php";
	$user = "Hi,".$_SESSION["name"];
	$user_link ="#";
}else {
	$cart = "Sign Up";
	$cart_link = "sign-up.html";
	$user = "Login";
	$user_link ="login.php";
}
?>