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
						$catname = $_POST["cname"];
						$filename=$_FILES["cimage"]["name"];
						$tempname=$_FILES["cimage"]["tmp_name"];
						$location = "images/";	
						if(move_uploaded_file($tempname,$location.$filename))
						{
						$exe = mysqli_query($connect,"insert into  category_tbl (cat_name,cat_image) 
						values ('".$catname."','".$filename."')");
							if($exe)
							{
								$message= "Insert Category Successfully :-)";
							}
							else
							{
								$message= "Insert Category UnSuccessfully :-(";
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
                            Add Category
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Enter Category</label>
                                            <input class="form-control" name="cname" />
                                        </div>
                                        <div class="form-group">
                                            <label>Category Image</label>
                                            <input class="form-control" type="file" name="cimage" />
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