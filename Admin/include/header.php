<?php
session_start();
if(!isset($_SESSION["un"]))
{
	header("Location:index.php");	
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
  
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="dashboard.php"> <?php echo strtoupper($_SESSION["un"]) ?></a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Current access : <?php echo date("d-M-Y",time());?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Banner<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addbanner.php">Add Banner</a>
                            </li>
                            <li>
                                <a href="showbanner.php">Show Banner</a>
                            </li>
                          
                        </ul>
                      </li>  
	
					                   
                    <li>
                        <a href="#">Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addcat.php">Add Category</a>
                            </li>
                            <li>
                                <a href="showcat.php">Show Category</a>
                            </li>
                          
                        </ul>
                      </li>  
                      <li>
                        <a href="#">Sub Category<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addsubcat.php">Add SubCategory</a>
                            </li>
                            <li>
                                <a href="showsubcat.php">Show SubCategory</a>
                            </li>
                          
                        </ul>
                      </li>  
                 	<li>
                        <a href="#">Product<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addpro.php">Add Product</a>
                            </li>
                            <li>
                                <a href="showpro.php">Show Product</a>
                            </li>
                          
                        </ul>
                      </li>
                      
                      <li>
                        <a href="#">Messages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="replymsg.php">Reply Message</a>
                            </li>
                            <li>
                                <a href="showmessage.php">Show Message</a>
                            </li>
                          
                        </ul>
                      </li>
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->