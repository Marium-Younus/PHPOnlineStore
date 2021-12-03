<?php
session_start();
$page = $_SERVER['PHP_SELF'];
$sec ="60";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8"  http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Wellcome: Login</h2>
               
               
            </div>
        </div>
        <?php
			if(isset($_POST["btn"]))
			{
				$username=$_POST["un"];
				$pass=$_POST["pwd"];
				if( $username == "admin" && $pass == "admin")
				{
					if(!empty($_POST["remember"]))
					{
						setcookie("cook_name",$_POST["un"],time()+60);
						setcookie("cook_pass",$_POST["pwd"],time()+60);
					}
					
					$_SESSION["un"] = $username; // to share information for multiple pages
				
					header("Location:dashboard.php");
				}
				else
				{
					$message = "Invalid Username and Password";
					
				}
				
			}
		
		
		
		?>
        
        
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Enter Details To Login </strong>  
                            </div>
                            <div class="panel-body">
                               <form role="form" method="post">
                                       <br />
                                 <div class="form-group input-group">
                                       <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                       <input name="un" type="text" class="form-control" placeholder="Your Username " 
                                       value="<?php if(isset($_COOKIE["cook_name"])) echo $_COOKIE["cook_name"]; ?>" />
                                        </div>
                                   <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input name="pwd" type="password" class="form-control"  placeholder="Your Password" 
                                     value="<?php if(isset($_COOKIE["cook_pass"])) echo $_COOKIE["cook_pass"]; ?>" />
                                        </div>
                                    <div class="form-group input-group">
                                    <input  type="checkbox" name="remember"
                                    <?php if(isset($_COOKIE["remember"])) { ?> checked <?php } ?>
                                    />
                                    &nbsp;<label> Remember me</label>
                                    
                                    
                                    </div>
                                     <input type="submit" name="btn" value="Login Now" class="btn btn-block btn-primary "/>
                                    	<hr/>
                                        <p class="text-danger text-center"><?php echo @$message?></p>
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
     <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
