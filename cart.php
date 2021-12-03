<?php
include("include/header.php");
include("config.php");
?>
<?php		
				if(isset($_POST["btncart"]))
				{
					if(!isset($_SESSION["shopping_cart"]))
					{
						$_SESSION["shopping_cart"] =  array();
					}
					$productid = $_POST["p_id"];
					$productname = $_POST["p_name"];
					$productdesc = $_POST["p_des"];
					$price = $_POST["p_price"];
					$image = $_POST["p_image"];
					$quantity = $_POST["p_quantity"];
				
						$count = count($_SESSION["shopping_cart"]);
						$IsExist = false;
						if($count>0)
						{
							for($i=0;$i<$count;$i++)
							{
								if($_SESSION["shopping_cart"][$i]['productid'] == $productid)
								{
									$_SESSION["shopping_cart"][$i]['quantity']=$_SESSION["shopping_cart"][$i]['quantity']	+ $quantity;
									$IsExist = true;
								}
							}
						}
						if(!$IsExist)
						{
									array_push($_SESSION["shopping_cart"],
												array('productid'=>$productid,
													  'name' => $productname, 
													  'description'=>$productdesc,	
													  'price' => $price, 'image'=>$image,
													  'quantity' => $quantity));	
						}					
						echo '<script>window.location="cart.php"</script>';
						ob_end_flush();
				}
				?>

<section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                     <?php
							if(!empty($_SESSION["shopping_cart"]))
							{
								$total=0;
								$count = count($_SESSION["shopping_cart"]);
							?>
                     <form method="post">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>REMOVE</th>
                                </tr>
                            </thead>
                            <tbody>
                           <?php
										if(isset($_POST["btnUpdate"]))
										{											
											for($i=0;$i<$count;$i++)
											{
												$_SESSION["shopping_cart"][$i]["quantity"] = $_POST["txtQuantity_".$i];
											}
										}
										$total = 0;
                                    	for($i=0;$i<$count;$i++)
										{
											$total += ($_SESSION["shopping_cart"][$i]["quantity"] * $_SESSION["shopping_cart"][$i]["price"]);
									
								
							?>
                                <tr>
                                
                                    <td class="cart-pic first-row">
                                    <img src="Admin/images/<?php echo $_SESSION["shopping_cart"][$i]["image"] ?>" alt="" width="150" height="150"></td>
                                    <td class="cart-title first-row">
                                        <h5><?php echo $_SESSION["shopping_cart"][$i]["name"] ?></h5>
                                    </td>
                                    <td class="total-price first-row">
									<?php echo number_format($_SESSION["shopping_cart"][$i]["price"],2) ?></td>
                                    <td>
                                       <div class="quantity">
                                                <input  type="number" value="<?php echo $_SESSION["shopping_cart"][$i]["quantity"]?>" 
                                                name="txtQuantity_<?php echo $i;?>" min="1">
                                        </div>
                                          
                                    </td>
                                      
                                    <td class="total-price first-row">
									<?php echo number_format(($_SESSION["shopping_cart"][$i]["price"] *$_SESSION["shopping_cart"][$i]["quantity"]),2) ?></td>
                                    <td class="close-td first-row">
                                    <a  href="removecart.php?index=<?php echo $i;?>">
                                   <img src="assets/img/cross.png">
                                    </a>
                                    </td>
                                </tr>
                                <?php
								
								$tax= $total *12/100;
								}
								?>
                                
                            </tbody>
                        </table>
                      
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="cart-buttons">
                               <a href="index.php" class="primary-btn continue-shop">Continue shopping</a>
                              <input type="submit" class="btn btn-lg btn-dark" value="Update Shopping Cart" name="btnUpdate" />
                               
                            </div>
                          
                        </div></form>
                        <div class="col-lg-4 offset-lg-4">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Subtotal <span><?php  echo number_format(@$total,2)?></span></li>
                                    <li class="subtotal">Tax(12%) <span><?php  echo number_format(@$tax,2)?></span></li>
                                    <li class="cart-total">Total <span>Rs.	<?php  echo number_format((@$total+@$tax),2)?></span></li>
                                </ul>
                                <a href="checkout.php" class="proceed-btn">PROCEED TO CHECK OUT</a>
                            </div>
                        </div>
                    </div>
                    
                     <?php
						} 
						else {
							?>
							<div class="no-records"><h1>Your Cart is Empty</h1></div>
							<?php 
							}
							?>
                </div>
            </div>
        </div>
    </section>

<?php
include("include/footer.php")
?>