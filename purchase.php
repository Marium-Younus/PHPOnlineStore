<?php
include("config.php");
session_start();

?>

<?php
if(isset($_POST["btnpurchase"]))
{
	$query1= "insert into order_manager (Fullname,PhoneNo,Address,Pay_Mode) values 
				('".$_POST["fullname"]."','".$_POST["phone"]."','".$_POST["address"]."','".$_POST["pay_mode"]."')";
	
	if(mysqli_query($connect,$query1))
	{
		$Order_id = mysqli_insert_id($connect);
		$query2= "insert into  user_order (order_id,item_name,item_price,item_quantity) values (?,?,?,?)";
		$stmt=mysqli_prepare($connect,$query2);
		if($stmt)
		{
			mysqli_stmt_bind_param($stmt,"isii",$Order_id,$item_name,$item_price,$item_quantity);
				$count = count($_SESSION["shopping_cart"]);
				for($i=0;$i<$count;$i++)
				{
				$item_name =  $_SESSION["shopping_cart"][$i]["name"];
				$item_price = $_SESSION["shopping_cart"][$i]["price"];
				$item_quantity = $_SESSION["shopping_cart"][$i]["quantity"];
				mysqli_stmt_execute($stmt);
		
				}
			unset($_SESSION["shopping_cart"]);
			echo "<script>alert('Order Placed');window.location='cart.php'</script>";
		}
		else
		{
			echo "<script>alert('".mysqli_error($connect)."')</script>";
		}
	}
	else
	{
			
		echo "<script>alert('".mysqli_error($connect)."')</script>";
	}
}

?>