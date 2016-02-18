<?php
ob_start();
session_start();
$codeDB = 56565;
$_SESSION['seCureCon54684s2s']= $codeDB;

include "../check-authentication-or-session.php";
include "../config_cA_soft_9564.php";
include "../function_common_58462554.php";



if(isset($_POST['addoffer'])){
	
	$offerid=$_POST['offerid'];
	$rlink=$_POST['rlink'];
	$olink=$_POST['olink'];
	$ulink=$_POST['ulink'];
	$mailserver=$_POST['mailserver'];

	$offerid=cleaninput($offerid);
#	$rlink=cleaninput($rlink);
#	$olink=cleaninput($olink);
	$ulink=cleaninput($ulink);
	$sponsor=cleaninput($_POST['sponsor']);
	$account=cleaninput($_POST['account']);
	$date=date('d/m/Y');
	

$rlink = str_replace("[ms]",$mailserver,$rlink);
$listnm = '';
	if ( isset( $_POST['listnm'] ) ) {
		foreach ( $_POST['listnm'] as $lst ) {
			$listnm .= ",".$lst;
		}
	}
$listnm = substr($listnm,1);

	$sql="INSERT INTO offers( rlink, olink, ulink, adddate, offerid, clicks, opens,listname,sponsor,account) VALUES ('$rlink','$olink','$ulink','$date','$offerid',0,0,'$listnm','$sponsor','$account')";
	executesql($sql,$link);

header("location:listoffer.php");
}












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
              



                         <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add New Offer <small>Enter All Details For New Offer</small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="addoffer" data-parsley-validate class="form-horizontal form-label-left"  action="offers.php" method="post">



                                        <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Offer Id <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
 <input type="text" id="offerid" required class="form-control col-md-7 col-xs-12" placeholder="Enter Offer Id (Aplha Numeric)" name="offerid">
                                            </div>
                                        </div>

										
                                        <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Select Mail Server <span class="required">*</span>
                                            </label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
		 <select  required class="form-control col-md-3 col-sm-3 col-xs-12"  name="mailserver">
			<option value="u001al">aol</option>
			<option value="u001at">att</option>
			<option value="u001bh">bellsouth</option>
			<option value="u001cr">charter</option>
			<option value="u001ct">comcast</option>
			<option value="u001cx">cox</option>
			<option value="u001ek">earthlink</option>
			<option value="u001gl">gmail</option>
			<option value="u001hl">hotmail</option>
			<option value="u001rr">roadrunner</option>
			<option value="u001sl">sbcglobal</option>
			<option value="u001vn">verizon</option>
			<option value="u001yo">yahoo</option>
			<option value="u001oth">others</option>
		 </select>


											</div>
                                 <div class="col-md-3 col-sm-3 col-xs-12">
									<h4>Shortcode = [ms]</h4>
								</div>
										
										</div>


							<div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="listnm">Select Listname</label>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
	<select id="listnm" required class="form-control col-md-6 col-xs-12"  name="listnm[]" multiple style="height:300px;">
	<option value="all" selected>ALL</option>
      <?php
	  $files1= file_get_contents('textfiles/listnm.txt');
	  $files1 = explode(PHP_EOL,$files1);

	  								foreach($files1 as $listnm){
											echo "<option value=\"".$listnm."\">".$listnm."</option>";
										}
      
      ?>
      </select>
											</div>				
						</div>

						
                                      
                                        
                                       

                                        <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Redirect Link <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
 <input type="text" id="rlink" required class="form-control col-md-7 col-xs-12" placeholder="Redirect Link" name="rlink">
                                            </div>
                                        </div>

										
                                        <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Optout Link  <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
 <input type="text" id="olink" required class="form-control col-md-7 col-xs-12" placeholder="Optout Link" name="olink">
                                            </div>
                                        </div>
                                       

 <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Unsubscribe Link  <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
 <input type="text" id="ulink" required class="form-control col-md-7 col-xs-12" placeholder="Unsubscribe Link" name="ulink">
                                            </div>
                                        </div>



  <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sponsor Name
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
 <input type="text" id="rlink" class="form-control col-md-7 col-xs-12" placeholder="Sponsor Name" name="sponsor">
                                            </div>
                                        </div>


										  <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Account No
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
 <input type="text" id="rlink" class="form-control col-md-7 col-xs-12" placeholder="Account No" name="account">
                                            </div>
                                        </div>





                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success" name="addoffer">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
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
	<script src="js/validator/jquery.validate.min.js" type="text/javascript"></script>
    <script type="text/javascript">
	
	/*var errorslist = 0;
	var errorslist1 = 0;
	$('#offerid').keyup(function(e) {
				   var texts= $(this).val();
					var pattrn =  new RegExp(/^[0-9]+$/i);
					if(!pattrn.test(texts)){
						$(this).css("border","2px solid #d43f3a");
						$('.hintforusr').css("color","#F00");
						 errorslist = 1;
					}
					else{
						$(this).css("border","1px solid #DDE2E8");
						$('.hintforusr').css("color","#000");
						errorslist = 0;
					}
					});
					
					
		
			*/		
					
$.validator.addMethod("usrpsd", function (value, element) {
    return this.optional(element) || /^[A-Za-z0-9]+$/.test(value);
}, 'Please enter alphanumeric Username.');
$.validator.addMethod("usrpsd1", function (value, element) {
    return this.optional(element) || /^[A-Za-z0-9]+$/.test(value);
}, 'Please enter alphanumeric Password.');	
	
	$(function() {
  
    // Setup form validation on the #register-form element
    $("#addoffer").validate({
    
        // Specify the validation rules
        rules: {
            offerid: "required",
				 rlink: "required",
				 ulink: "required",
				 olink: "required"
        },
        
        // Specify the validation error messages
        messages: {
				offerid: "Please enter ",
				rlink: "Please enter ",
					ulink: "Please enter ",
					olink: "Please enter ",
         
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
	
	
	
	</script>
</body>
</html>
