<?php
include("include/header.php");
include("../config.php");
?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Product Add Page</h2>   
                     
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
    <?php
	if(isset($_POST["btn"]))
	{
		$p_name=$_POST["pname"];
		$p_descrip=$_POST["pdes"];
		$p_price=$_POST["pprice"];
		$filename=$_FILES["pimage"]["name"];
		$tempname=$_FILES["pimage"]["tmp_name"];
		$location = "images/";
		$cat_name=$_POST["catname"];
		$subcat_name=$_POST["subcatname"];
		
		if(move_uploaded_file($tempname,$location.$filename))
		{
			$query =mysqli_query($connect,"insert into prod_tbl (p_name,p_des,p_price,p_image,catid_fk,subcatid_fk) 
						values ('".$p_name."','".$p_descrip."','".$p_price."','".$filename."','".$cat_name."','".$subcat_name."')");
			if($query)
			{
					$message= "Insert product Successfully :-)";
			}
			else
			{
				//$message= "Insert product UnSuccessfully :-(";
				$message=mysqli_error($connect);
			}	
		}	
	}
	?>
               <div class="row">
              
                <div class="col-md-12">
 					<div class="alert alert-primary" role="alert">
 							<?php echo @$message?>
						</div>
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Add Product
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input class="form-control" name="pname" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Product Description</label>
                                           <textarea rows="5" class="form-control" name="pdes"></textarea>
                                        </div>
                                        
                                         <div class="form-group">
                                            <label>Product Price</label>
                                            <input class="form-control" name="pprice" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input class="form-control" type="file" name="pimage" />
                                        </div>
                                        <div class="form-group">
                                          <label>Category Name</label>
                                              <select class="form-control" name="catname">
                                              	<option>Select Category</option>
                                                <?php   
												
												$q1 =mysqli_query($connect,"select * from category_tbl");
												$count =mysqli_num_rows($q1);
												if($count >0)
												{
													while($row=mysqli_fetch_array($q1))
													{
													 echo "<option value=".$row["cat_id"].">".$row["cat_name"]."</option>";	
														
													}
												}
												
												?>
                                                </select>
                                                
                                                
                                             
                                        </div>
                                        <div class="form-group">
                                          <label>SubCategory Name</label>
                                              <select class="form-control" name="subcatname">
                                              	<option>Select Category</option>
                                                <?php   
												
												$q1 =mysqli_query($connect,"select * from subcat_tbl");
												$count =mysqli_num_rows($q1);
												if($count >0)
												{
													while($row=mysqli_fetch_array($q1))
													{
													 echo "<option value=".$row["subcat_id"].">".$row["subcat_name"]."</option>";	
														
													}
												}
												
												?>
                                                </select>
                                                
                                                
                                             
                                        </div>
                             <input type="submit" class="btn btn-block btn-info" value="Add Product" name="btn"/>
                                     

                                    </form>            
    							</div>                         
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
    </div>   
            </div>

<?php
include("include/footer.php");
?>