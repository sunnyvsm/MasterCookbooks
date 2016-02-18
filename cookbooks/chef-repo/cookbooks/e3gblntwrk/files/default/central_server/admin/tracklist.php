<?php
ob_start();
session_start();
$codeDB = 56565;
$_SESSION['seCureCon54684s2s']= $codeDB;

include "../check-authentication-or-session.php";
include "../config_cA_soft_9564.php";

include "../function_common_58462554.php";




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
              

<!-- actual data -->

                         <div class="row">

 <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>All Offers</h2>
                                  
                                    <div class="clearfix"></div>
                                </div>

                                <div class="x_content">

                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>SR.</th>
                                                <th>Offer ID</th>
                                                <th>Total Clicks</th>
                                                <th>Total Opens</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
										
											$sqlqry="SELECT * FROM offers ORDER BY id desc";
											$result=mysql_query($sqlqry);
											$num_results = mysql_num_rows($result);

											for ($i=0; $i<$num_results; $i++)
											{
													$row = mysql_fetch_array($result);
											

										?>
                                            <tr>
                                                <td><?php echo $i+1; ?></td>
                                                <td><?php echo $row['offerid']; ?></td>

                                                <td><?php echo $row['clicks']; ?></td>
                                                <td><?php echo $row['opens']; ?></td>
                                            </tr>
                                         <?php
											}
										 
                                  		 ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                       
                      
                        
                        
                      	</div>
<!--/ actual data -->
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