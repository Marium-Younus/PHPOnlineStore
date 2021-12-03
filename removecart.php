<?php
session_start();
if(isset($_REQUEST["index"]))
{
	if(isset($_SESSION["shopping_cart"]))	
	{
		unset($_SESSION["shopping_cart"][$_REQUEST["index"]]);
		sort($_SESSION["shopping_cart"]);
		echo '<script>window.location="cart.php"</script>';
	}
}
?>