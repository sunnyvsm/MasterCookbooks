<?php
ob_start();
session_start();
$codeDB = 56565;
$_SESSION['seCureCon66235s2s']= $codeDB;

include "../check-authentication-or-session.php";
include "../config_cA_soft_9564.php";
include "../function_common_58462554.php";



$dir    = '../datafile/';
$files1 = scandir($dir);
sort($files1);
$allowedExts = "txt"; 




$ip= file_get_contents('../ip/ip.txt');
$ip = explode(PHP_EOL,$ip);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Email Marketing Software</title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  	<link href="css/icheck/flat/green.css" rel="stylesheet">
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


<body class="nav-md" style="background:#fff;">

    
    <div class="container body" >
	<div class="main_container" >

				






            <!-- page content -->
            <div class="right_col" role="main" style="width:100%;margin:0;">
<form id="sendmails" data-parsley-validate class="form-horizontal form-label-left" action="" method="post">
                <br />
              



                     <div class="row">
                     
                        
                        
                        <div class="col-md-3 col-sm-5 col-xs-12 ">
                            <div class="x_panel">
                            
                                <div class="x_title">
                                    <h2>IP Addresses</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                
                                <div class="x_content ipaddr">
                                    <br />

                                        <div class="form-group">
                                       		
                                            <?php
										
											foreach ($ip as $ips){
												$ipnames = explode("|",$ips);
												$ipnm=$ipnames[0];
												?>
                                            	 <div class="checkbox">
                                                    <label>
         <input type="checkbox" class="flat" name="ipaddress[]" value="<?php echo $ips; ?>"> &nbsp;<strong style="color:#000;"><?php echo $ipnm; ?></strong>
                                                    </label>
                                                </div>
                                                <?php
											}
											?>
                                        
                                        </div>
    
                                </div>
                                
                                
                            </div>

							
								
								
								<div class="x_panel">
                            
                                <div class="x_title">
                                    <h2>SHORTCODES</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
								 <div class="x_content">

								 <h4 style="color:#222;">R link : [*domain==r*]</h4>
								 <h4 style="color:#222;">O link : [*domain==o*]</h4>
								 <h4 style="color:#222;">U link : [*domain==u*]</h4>
								 <h4 style="color:#222;">I link : [*domain==i*]</h4>
								 <h4 style="color:#222;">Domain link : __domain</h4>
								 <h4 style="color:#222;">Ip : __ip</h4>
								 <h4 style="color:#222;">Hostname : __host</h4>
								 <h4 style="color:#222;">From : __from</h4>
								 <h4 style="color:#222;">To : __to</h4>
								 <h4 style="color:#222;">Subject : __subject</h4>
								</div>
								</div>


                        </div>
                        
                        
                        
                        
                        <div class="col-md-9 col-sm-7 col-xs-12">
                            <div class="x_panel">
                            
                                <div class="x_title">
                                    <h2 id="impidshow">Details</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                
                                <div class="x_content">
                                    <br />
                                    



                                        <div class="form-group">
      <label class="control-label col-md-2 col-sm-4 col-xs-12" >SUBJECT
                                            </label>
                                            <div class="col-md-10 col-sm-8 col-xs-12">
      <input type="text" id="esubject" required class="form-control col-md-7 col-xs-12" placeholder="Enter Subject Of Email" name="esubject">
                                            </div>
                                        </div>
                                        
                                      
                                      
                                      
                                      
                                       <div class="form-group">
                                       
      <label class="control-label col-md-2 col-sm-4 col-xs-12" >FROM EMAIL
                                            </label>
                                            
                                            <div class="col-md-5 col-sm-8 col-xs-12">
      <input type="text" id="efrom" required class="form-control col-md-7 col-xs-12" placeholder="Sender Email" name="efrom">
                                            </div>
                                          
                                        </div>
                                        
                                         <div class="form-group">
                                       
      <label class="control-label col-md-2 col-sm-4 col-xs-12" >RETURN PATH
                                            </label>
                                            
                                            <div class="col-md-5 col-sm-8 col-xs-12">
      <input type="text" id="efrom" class="form-control col-md-7 col-xs-12" placeholder="Return Path" name="returnpath">
                                            </div>
                                          
                                        </div>
                                        
                                        
                                       
                                        
                                        
                                        
                                         <div class="form-group">
                                       
      <label class="control-label col-md-2 col-sm-4 col-xs-12">TEST EMAILS
                                            </label>
                                            
                                            <div class="col-md-10 col-sm-8 col-xs-12">
      <input type="text" id="etest" required class="form-control col-md-7 col-xs-12" placeholder="Test Emails Separated By comaa" name="etest">
                                            </div>
                                            
                                            
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                       
      <label class="control-label col-md-2 col-sm-4 col-xs-12">OFFER ID
                                            </label>
                                            
                                            <div class="col-md-6 col-sm-8 col-xs-12">
                                            
     <select id="offerid" required class="form-control col-md-6 col-xs-12"  name="offerid">
      <?php
	  									$sqlqry="SELECT * FROM offers ORDER BY id desc";
											$result=mysql_query($sqlqry);
											$num_results = mysql_num_rows($result);
											for ($i=0; $i<$num_results; $i++)
											{
													$row = mysql_fetch_array($result);
													
													?>
                                                    
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['offerid']; ?></option>
                                                    <?php
													
													
											}
      
      ?>
      </select>
      </div>
       </div>
                                        
        
		
		<div class="form-group">
        <label class="control-label col-md-2 col-sm-4 col-xs-12">DATA FILE</label>
        <div class="col-md-6 col-sm-8 col-xs-12">
   
       <select id="datafile" required class="form-control col-md-6 col-xs-12"  name="datafile">
      <?php
	  								foreach($files1 as $name){
	
											$extension = end(explode(".",$name));
											if($extension == $allowedExts){
											echo "<option value=\"".$name."\">".$name."</option>";
											}
										}
      
      ?>
      </select>
	   
	   </div>
		</div>
                                        
                                        
                                        
 <div class="form-group">
     
	 <label class="control-label col-md-2 col-sm-4 col-xs-12">COUNT</label>
       <div class="col-md-3 col-sm-8 col-xs-12">
      <input type="text" id="ecount" required class="form-control col-md-7 col-xs-12" placeholder="Count" name="ecount" value="1">
        
	</div>

	<label class="control-label col-md-2 col-sm-4 col-xs-12">TEST PERIOD</label>
       <div class="col-md-3 col-sm-8 col-xs-12">
      <input type="text" id="tcount" class="form-control col-md-7 col-xs-12" placeholder="Count" name="tcount">
        
	</div>


    </div>

          <div class="form-group">
     
	 <label class="control-label col-md-2 col-sm-4 col-xs-12">ITERATION</label>
       <div class="col-md-3 col-sm-8 col-xs-12">
      <input type="text" id="iterat" class="form-control col-md-7 col-xs-12" placeholder="Iteration" name="iterat">
        
	</div>

	<label class="control-label col-md-2 col-sm-4 col-xs-12">WAIT PERIOD </label>
       <div class="col-md-3 col-sm-8 col-xs-12">
      <input type="text" id="waitp" class="form-control col-md-7 col-xs-12" placeholder="(In sec.)" name="waitp">
        
	</div>


    </div>           
	
	<div class="x_title"></div>
          <div class="form-group">
     
			 <label class="control-label col-md-4 col-sm-8 col-xs-12" >Enter Domains Separated By Comama(,)</label>
			   <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2" style="margin-top:10px">
			  <textarea class="form-control col-md-8 col-xs-12 col-sm-10" placeholder="Enter Domains Separated By Comama" name="domainsen"></textarea>
				
			</div>


    <div class="form-group">
     
			 <label class="control-label col-md-3 col-sm-8 col-xs-12" >Enter Headers each in new line</label>
			   <div class="col-md-10 col-sm-10 col-xs-12 col-md-offset-2" style="margin-top:10px">
			  <textarea class="form-control col-md-8 col-xs-12 col-sm-10" placeholder="Enter Headers one in a line" name="headerstext"></textarea>
				
			</div>


    </div> 
                                        

                                </div>
                                
                                
                            </div>
                            
                            <div class="x_panel">
                            
                                <div class="x_title">
                                    <h2>HTML Code</h2>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                
                                
                                <div class="x_content">
                                    <br />

                                        <div class="form-group">
                                       		 
                                            
                                            <div class="col-md-12 col-sm-12 col-xs-12">
      <textarea id="htmlcode" required class="form-control col-md-7 col-xs-12" placeholder="HTML Code" name="htmlcode"></textarea>
                                            </div>
                                            
                            
                                            <div class="" style="margin-top:20px; clear:both;"></div>
                                        
                                            <div class="col-md-6 col-sm-6 col-xs-12">
          <button id="sendmailsbutton" class="btn btn-success" name="sendemails">SEND</button>
                                            </div>
                                
                                       </div>
                                   
                                </div>
                                
                                
                            </div>

                            
                            
                            
                            

                        </div>
                    </div>
              
              
              
              
              
              
              </form>
            </div>


            <!-- /page content end -->
            
            
            
</div>
</div>

<div class="overlay">
<div class="results1">
<center><h5>Processing.....</h5></center>

<p>Total Emails: <span id="totalemails2">0</span></p>
<p>Sent Emails: <span id="sentemails2">0</span></p>
<p>Erros: <span id="toterrors2">0</span></p>

</div>
</div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/icheck/icheck.min.js"></script>
    <script>
					$('#sendmailsbutton').click(function(){
						$('.overlay').show(0);
						var id=setInterval(function() {
												$('#totalemails2').load('status/total.txt');
												$('#sentemails2').load('status/sent.txt');
												$('#toterrors2').load('status/error.txt');
											},1000);
									$.ajax({
										type: 'POST',
										url: 'sendemails.php', 
										data: $('#sendmails').serialize(),
										success:function(){
										}
									})
									.done(function(){
										$('.overlay').hide(0);
									})
									.fail(function() {
										alert("Posting failed.");
									});	

									return false;
					});
</script>

</body>
</html>