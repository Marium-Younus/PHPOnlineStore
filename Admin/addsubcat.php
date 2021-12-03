<?php
include("include/header.php");
include("../config.php");

?>
<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Category Add Page</h2>   
                     
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <?php
				 	if(isset($_POST["btn"]))
					{
						$subcatname = $_POST["subcname"];
						$catname = $_POST["catname"];
		$exe = mysqli_query($connect,"insert into subcat_tbl (subcat_name,catid_fk )values ('".$subcatname."','".$catname."')");
		if($exe)
		{
			$message= "Insert Category Successfully :-)";
		}
		else
		{
			$message= "Insert Category UnSuccessfully :-(";
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
                            Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Enter Sub Category</label>
                                            <input class="form-control" name="subcname" />
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
                             <input type="submit" class="btn btn-block btn-info" value="Add Category" name="btn"/>
                                     

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