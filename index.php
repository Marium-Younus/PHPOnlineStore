<?php
include("config.php");
include("include/header.php");
include("include/slider.php");

?>

<!-- Start Categories of The Month -->
    <section class="container py-5">
        <div class="row text-center pt-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Categories of The Month</h1>
                <p>
                   The major <?php echo @$count ?> main types of cosmetic products are
                   
                </p>
            </div>
        </div>
        <div class="row">
        <?php 
				$query=mysqli_query($connect,"SELECT * FROM category_tbl LIMIT 3  ");
					$count= mysqli_num_rows($query);
						
						if($count>0)
						{
							while($row=mysqli_fetch_array($query))
							{ 
								
						?> 
                       
            <div class="col-12 col-md-4 p-5 mt-3">
                <a href="#"><img src="Admin/images/<?php echo $row["cat_image"]?>" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3"><?php echo $row["cat_name"]?></h5>
                <p class="text-center"><a class="btn btn-success" href="shop.php?cat=<?php echo $row["cat_name"]?>&cat_id=<?php echo $row["cat_id"]?>">Go Shop</a></p>
            </div>
            <?php
							}}
			?>
            
        </div>
    </section>
    <!-- End Categories of The Month -->


    <!-- Start Featured Product -->
    <section class="bg-light">
        <div class="container py-5">
            <div class="row text-center py-3">
                <div class="col-lg-6 m-auto">
                    <h1 class="h1">Featured Product</h1>
                    <p>
                        MShop Cosmetics is a newly launched company that represents 
                        the needs and points of view of different generations
                    </p>
                </div>
            </div>
            <div class="row">
            	<?php 
				$query=mysqli_query($connect,"SELECT * FROM prod_tbl LIMIT 3  ");
					$count= mysqli_num_rows($query);
						
						if($count>0)
						{
							while($row=mysqli_fetch_array($query))
							{
						?> 
                <div class="col-12 col-md-4 mb-4">
                    <div class="card h-100">
                        <a href="shop_single.php?sid=<?php echo $row["subcatid_fk"]?>&pid=<?php echo $row["p_id"]?>">
                            <img src="Admin/images/<?php echo $row["p_image"]?>" class="card-img-top" alt="..." class="bg-dark">
                        </a>
                        <div class="card-body bg-dark">
                            <ul class="list-unstyled d-flex justify-content-between ">
                            	<li></li>
                                <li class="text-muted text-right text-light"><b>PKR <?php echo number_format($row["p_price"],2)?></b></li>
                            </ul>
                            <a  class="h2 text-decoration-none text-light"><?php echo $row["p_name"]?></a>
                            <p class="card-text text-light">
                                <?php echo $row["p_des"] ?>
                            </p>
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
    <!-- End Featured Product -->



<?php
include("include/footer.php")
?>