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
	if(isset($_POST["btnban"]))
	{
		$b_name=$_POST["bname"];
		$b_title=$_POST["btitle"];
		$b_descrip=$_POST["bdes"];
		$filename=$_FILES["bimage"]["name"];
		$tempname=$_FILES["bimage"]["tmp_name"];
		$location = "images/";	
		if(move_uploaded_file($tempname,$location.$filename))
		{
			$query =mysqli_query($connect,"insert into banner_tbl (b_name,b_title,b_des,b_image) 
values ('".$b_name."','".$b_title."','".$b_descrip."','".$filename."')");
			if($query)
			{
					$message= "Insert Banner Successfully :-)";
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
                                            <label>Banner Name</label>
                                            <input class="form-control" name="bname" />
                                        </div>
                                        <div class="form-group">
                                            <label>Banner Title</label>
                                            <input class="form-control" name="btitle" />
                                        </div>
                                        <div class="form-group">
                                            <label>Banner Description</label>
                                           <textarea rows="5" class="form-control" name="bdes"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Product Image</label>
                                            <input class="form-control" type="file" name="bimage" />
                                        </div>
                                        
                                        
                             <input type="submit" class="btn btn-block btn-info" value="Add Product" name="btnban"/>
                                     

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