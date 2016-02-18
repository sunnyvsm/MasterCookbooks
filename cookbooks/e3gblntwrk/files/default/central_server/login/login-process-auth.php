<?php
ob_start();
session_start();

$codeDB = 6498325464565623255996;
$_SESSION['seCureCon66235s2s']= $codeDB;




include "../config_cA_soft_9564.php";





function clean($str) {
	
		$str = preg_replace('/[^A-Za-z0-9]/','',$str);
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		
		$str = filter_var( $str, FILTER_SANITIZE_STRING);
		$str=htmlentities($str);
		$str=htmlspecialchars($str);
		
		return mysql_real_escape_string($str);
	}

if(isset($_POST['loginAuthentication'])){
	
	$username45=$_POST['UserName'];
	$password45=$_POST['PassWord'];
		
		
	$username45=clean($username45);
	$password45=clean($password45);
	
	if(isset($_POST["captcha"]) && $_POST["captcha"]!="" && $_SESSION["code"]==$_POST["captcha"])
		{
			
			$salt8955 = '5dG2T8564F556csf5df9eAsd454fR54d';
			$encrypted55user = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,
                                              md5($salt8955),
                                              $username45,
                                              MCRYPT_MODE_CBC,
                                              md5(md5($salt8955))
                                             )
                              );
			
			$encrypted05pass = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256,
                                              md5($salt8955),
                                              $password45,
                                              MCRYPT_MODE_CBC,
                                              md5(md5($salt8955))
                                             )
                              );
			
		$sqlQuery2 = "SELECT Pid5,Tpe5 FROM userids845 WHERE Usr5='$encrypted55user' and Pwd5='$encrypted05pass'";
		
		$sqlresult2=mysql_query($sqlQuery2);
		$numresults=mysql_num_rows($sqlresult2);
		
				if(($numresults == 0) || ($numresults >1)){
					header("Location:../login/");
				}
				else{
					$data=mysql_fetch_array($sqlresult2);
					
					$userid=$data['Pid5'];
					$usertype=$data['Tpe5'];
					$username = $username45;
					
					
					session_regenerate_id();
					$_SESSION['personid253']=$userid;
					$_SESSION['persontype546']=$usertype;
					$_SESSION['personusername458']=$username;
					session_write_close();
			
							if($_SESSION['persontype546'] == 'admin'){
								header("Location:../admin/");
							}
							else{
								header("Location:../login/");
							}
					
					
				}
		
			
		}
		else
		{
			
			header("Location:../login/");
		}

	
	
	
	
	
}















?>
<html>
<body>
<?php
?>
</body>

</html>