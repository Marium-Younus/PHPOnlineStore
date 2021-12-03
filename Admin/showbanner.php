<?php
include("include/header.php");
include("../config.php");
?>

<div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Show Product</h2>   
                  </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
         
                <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <b>Record Show</b>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                             
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
                                    $query = mysqli_query($connect,"select * from banner_tbl");
									$count =mysqli_num_rows($query);
									
									if($count>0)
									{
									while($row =mysqli_fetch_array($query))
                                    {
                                    ?>
                                        <tr>
                                            <td><?php echo $row["b_id"]?></td>
                                            <td><?php echo $row["b_name"]?></td>
                                          	<td><?php echo $row["b_title"]?></td>
                                            <td><?php echo $row["b_des"]?></td>
                                            <td><img src="images/<?php echo $row["b_image"] ?>" width="100" height="100"/></td>
                                           
                                        </tr>
                                      <?php
									}
									}
									  ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                
            </div>
             
        </div>
               
    </div>


<?php
include("include/footer.php");
?>