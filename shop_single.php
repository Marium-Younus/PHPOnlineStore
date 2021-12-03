<?php
include("include/header.php");
include("config.php");
?>
 <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
              <?php
					
					$query=mysqli_query($connect,"select * from prod_tbl where p_id = '".@$_GET["pid"]."'");
					$row = mysqli_fetch_array($query);
					
                    
                    ?>
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="Admin/images/<?php echo $row["p_image"] ?>" alt="Card image cap" id="product-detail">
                    </div>
                    
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2"><?php echo $row["p_name"] ?></h1>
                            <p class="h3 py-2">Rs. <?php echo number_format($row["p_price"],2)?></p>
                            <p class="py-2"> </p>

                            <h6>Description:</h6>
                            <p><?php echo $row["p_des"] ?></p>
                            
                            <form action="cart.php" method="post">
                              	<input type="hidden" name="p_id" value="<?php echo $row["p_id"] ?>"/>
                                <input type="hidden" name="p_name" value="<?php echo $row["p_name"] ?>"/>
                                <input type="hidden" name="p_image" value="<?php echo $row["p_image"] ?>"/>
                                 <input type="hidden" name="p_price" value="<?php echo $row["p_price"] ?>"/>
                                 <input type="hidden" name="p_des" value="<?php echo $row["p_des"] ?>"/>
                                <div class="row">
                                    
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="p_quantity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-6">
                                    
                                    <div class="col d-grid">
                                        <button type="submit" class="btn btn-success btn-lg" name="btncart" value="addtocard">Add To Cart</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>

            <!--Start Carousel Wrapper-->
            <div id="carousel-related-product">
			<?php
			
			$query=mysqli_query($connect,"select * from prod_tbl where subcatid_fk ='".@$_GET["sid"]."'");
						$count= mysqli_num_rows($query);
						
						if($count>0)
						{
							while($row=mysqli_fetch_array($query))
							{
			
			
			?>
                <div class="p-2 pb-3">
                    <div class="product-wap card rounded-0">
                        <div class="card rounded-0">
                            <img class="card-img rounded-0 img-fluid" src="Admin/images/<?php echo $row["p_image"]?>">
                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                <ul class="list-unstyled">
                                      <li>
                                        <a class="btn btn-success text-white mt-2" href="shop_single.php?pid=<?php echo $row["p_id"]?>">
                                        <i class="far fa-eye"></i>
                                        </a>
                                        </li>
                                        <li>
                                        <a class="btn btn-success text-white mt-2" href="shop_single.php?pid=<?php echo $row["p_id"]?>">
                                        <i class="fas fa-cart-plus"></i></a>
                                     </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $row["p_name"]?></a>
                            
                            
                            <p class="text-center mb-0"><b>PKR <?php echo number_format($row["p_price"],2)?></b></p>
                        </div>
                    </div>
                </div>

                <?php
					
					}
					}
				
				?>


            </div>


        </div>
    </section>

<?php
include("include/footer.php")
?>
  