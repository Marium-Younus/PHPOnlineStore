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
                include("Mail.php");
if(isset($_POST['mail']))
{
$from="aptechphp5@gmail.com";
$pass="aptech2330@M";
$sub="MShop team services";
$to=$_POST['to'];
$body=$_POST['body'];
$host="smtp.gmail.com";
$port=587;
$header = array("to"=>$to,"from"=>$from,"subject"=>$sub);
$mail=Mail::factory("smtp",array("host"=>$host,"port"=>$port,"auth"=>true,"username"=>$from,"password"=>$pass));
$send=$mail->send($to,$header,$body);
	if(PEAR::IsError($send))
	{
		$message=$send->getMessage();
	}
	else
	{
		$message="Mail sent Successfully";
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
                                            <label>To </label>
                                            <input class="form-control" name="to" value="<?php echo @$_GET["e"]?>" />
                                        </div>
                                         <div class="form-group">
                                            <label>Message </label>
                                            <textarea  class="form-control" name="body" cols="45" rows="5" placeholder="Message"></textarea>
                                        </div>
                             
                             			<input type="submit" class="btn btn-block btn-success" value="Send" name="mail"/>
                                     

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