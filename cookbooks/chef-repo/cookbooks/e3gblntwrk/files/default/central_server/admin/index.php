<?php
ob_start();
session_start();
$codeDB = 56565;
$_SESSION['seCureCon66235s2s']= $codeDB;

include "../check-authentication-or-session.php";
include "../config_cA_soft_9564.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email Marketing</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>

    <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

    <div class="container body">
	<div class="main_container">


<!--- MEnuPArt ------>
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                  <!----sidebar --->
					<?php
					 include "header_sidebar_navi_845.php";
					?>
                   
                </div>
            </div>

            <!-- top navigation -->
        			<?php
					 include "header_navigation_864.php";
					?>

<!-- End Menu Part  --------------->





            <!-- page content -->
            <div class="right_col" role="main">

                <br />
                <div class="">

                    <div class="row top_tiles">
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                                </div>
                                <div class="count">
								<?php 
								$sql="SELECT * FROM offers";
								$result=mysql_query($sql);
								$num=mysql_num_rows($result);
								echo $num;
								?>
								
								</div>

                                <h3>Offers Added</h3>
                            </div>
                        </div>
                        <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="tile-stats">
                                <div class="icon"><i class="fa fa-comments-o"></i>
                                </div>
                                <div class="count"><?php 
								$sql="SELECT * FROM userids845 WHERE Tpe5='user'";
								$result=mysql_query($sql);
								$num=mysql_num_rows($result);
								echo $num;
								?></div>

                                <h3>Users Added</h3>
                            </div>
                        </div>
                      
                        
                    </div>




                    <div class="row">
                        <div class="col-md-12">
                        
                        
                        
                      	</div>
                   </div>

                                  

          
					</div>
            </div>


            <!-- /page content end -->
            
            
            
</div>
</div>



    <script src="js/bootstrap.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="js/progressbar/bootstrap-progressbar.min.js"></script>
    <script type="text/javascript" src="js/moment.min2.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>