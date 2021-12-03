
 
 
 <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <?php
			$query=mysqli_query($connect,"SELECT * FROM banner_tbl ");
			$count= mysqli_num_rows($query);
			/*echo "<script>alert('".$count."')</script>";*/
				for(@$i==1;@$i<$count;@$i++)
				{
					 $row=mysqli_fetch_array($query)
		?>
        	<?php
			if(@$i==1)
			{
			?>
            	<div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./Admin/images/<?php echo $row["b_image"]?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><?php echo $row["b_name"]?></h1>
                                <h3 class="h2"><?php echo $row["b_title"]?></h3>
                                <p>
                                   <?php echo $row["b_des"]?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php	
			}
			else
			{
			?>
            		<div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="./Admin/images/<?php echo $row["b_image"]?>" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"><?php echo $row["b_name"]?></h1>
                                <h3 class="h2"><?php echo $row["b_title"]?></h3>
                                <p>
                                     <?php echo $row["b_des"]?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
			<?php	
			}
			?>
        
    	<?php
			}
		?>
        <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    </div>
    <!-- End Banner Hero -->