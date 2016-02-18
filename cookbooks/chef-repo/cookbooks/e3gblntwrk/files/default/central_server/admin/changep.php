<?php
ob_start();
session_start();
$codeDB = 56565;
$_SESSION['seCureCon54684s2s']= $codeDB;

include "../check-authentication-or-session.php";
include "../config_cA_soft_9564.php";
include "../function_common_58462554.php";

function clean($str) {
	
		$str = preg_replace('/[^A-Za-z0-9]/','',$str);
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		
		$str = filter_var( $str, FILTER_SANITIZE_STRING);
		$str=htmlentities($str);
		
		return mysql_real_escape_string($str);
	}
$set=0;

if(isset($_POST['changep'])){
	$password=$_POST['password'];
	
	
	$password=cleaninput($password);
	$password=clean($password);
	$salt8955 = '5dG2T8564F556csf5df9eAsd454fR54d';
	$encrypted05pass = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,
                                              md5($salt8955),
                                              $password,
                                              MCRYPT_MODE_CBC,
                                              md5(md5($salt8955))
                                             )
                              );


	$sql="UPDATE userids845 SET Pwd5='$encrypted05pass' WHERE Pid5=1";
	executesql($sql,$link);
	$set=1;
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
<link rel="icon" type="image/png" href="../favicon.jpg">
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
                                    <h2>Change Password <small></small></h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    
                                    
<form id="changep" data-parsley-validate class="form-horizontal form-label-left" action="changep.php" method="post">

                                        <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12 newstitlelabel" for="newstitle1">Password <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
  <input type="text" id="password" required class="form-control col-md-7 col-xs-12" placeholder="Enter New Password" maxlength="30"  name="password">

<?php
if($set==1){
  echo "<p>Password Changed Successfully</p>";
}
  ?>
                                            </div>
                                        </div>
                                        
                                       
                                       
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success" name="changep">Submit</button>
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
	
	
$('#password').keyup(function(e) {
				   
					
					var texts= $(this).val();
					var pattrn =  new RegExp(/^[A-Za-z0-9]+$/i);
					if(!pattrn.test(texts)){
						$(this).css("border","2px solid #d43f3a");
						$('.hintforpsd').css("color","#F00");
						errorslist1 = 1;
					}
					else{
						$(this).css("border","1px solid #DDE2E8");
						$('.hintforpsd').css("color","#000");
						errorslist1 = 0;
					}
					});
					
					
$.validator.addMethod("usrpsd", function (value, element) {
    return this.optional(element) || /^[A-Za-z0-9]+$/.test(value);
}, 'Please enter alphanumeric Username.');
$.validator.addMethod("usrpsd1", function (value, element) {
    return this.optional(element) || /^[A-Za-z0-9]+$/.test(value);
}, 'Please enter alphanumeric Password.');	
	
	$(function() {
  
    // Setup form validation on the #register-form element
    $("#changep").validate({
    
        // Specify the validation rules
        rules: {
          
			password:{
					required: true,
					minlength: 8,
					usrpsd1:true
				}
        },
        
        // Specify the validation error messages
        messages: {
			
				password:{
					required:"Please Set Password",
					minlength:"Minimum 8 character Long"
				}
         
        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

  });
  
	
	
	
	</script>
</body>
</html>