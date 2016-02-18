<?php
ob_start();
session_start();
ini_set('max_execution_time',0);
ini_set("memory_limit","3200M");
//error_reporting(0);

$codeDB = 56565;
$_SESSION['seCureCon66235s2s']= $codeDB;
include "../check-authentication-or-session.php";
include "../config_cA_soft_9564.php";
include "../function_common_58462554.php";
include "functions/encrypt-decrypt88549352.php";
include "functions/findcoderobot.php";




$file = fopen('status/total.txt', "w");
fwrite($file,"");
fclose($file);
$file = fopen('status/sent.txt', "w");
fwrite($file,"0");
fclose($file);
$file = fopen('status/error.txt', "w");
fwrite($file,"0");
fclose($file);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sending...</title>
</head>

<body>
<?php

$ip = $_POST['ipaddress'];
$returnpath = $_POST['returnpath'];

$subject=$_POST['esubject'];
$from=$_POST['efrom'];
$testmail=$_POST['etest'];
$testmail = explode(",",$testmail);


$count=$_POST['ecount'];
$period=$_POST['tcount'];
$iterate=$_POST['iterat'];
$wait=$_POST['waitp'];


$domainsentered = $_POST['domainsen'];
$domainsentered = explode(",",$domainsentered);

$headersentered = $_POST['headerstext'];

$headersentered = explode(PHP_EOL,$headersentered);
$headerstoreplace = "";
for($i=0; $i<count($headersentered); $i++){
$headerstoreplace.=$headersentered[$i];
}


if(empty($period) || !isset($period) || $period==NULL || $period==""){
	$period=$count;
}

$body=$_POST['htmlcode'];
$datafile=$_POST['datafile'];
$offerid=$_POST['offerid'];
$userid=$_SESSION['allow'];



/* data post end here------------------------------------------------------------------*/

$sql23="select * from offers where id='$offerid'";
$res23=mysql_query($sql23);
$row23=mysql_fetch_array($res23);
$offerid=$row23['offerid'];

$totemls=count($ip)*$count;
$totmails = fopen('status/total.txt', "w");
fwrite($totmails, $totemls);


				$dataurl="../datafile/".$datafile;
				$dataoffile= file_get_contents($dataurl);
				$datalines = explode(PHP_EOL,$dataoffile);

				$errcount=0;
				$sentcount=0;
				$periodsflag=0;
				
				



				$domainflagmain="data present";
				while($domainflagmain != ""){


							$domainflagmain = findcode($body,'[*','*]');

							if($domainflagmain == ""){
								break;
							}

							$domainflag = explode("==",$domainflagmain);
							$domain = $domainflag[0];
							$linktype = $domainflag[1];		

							if($domain == 'domain'){
								$targeturl=$_SERVER['SERVER_NAME']."/offer.php?offerid=[[$linktype]]";
							}
							else{
								$targeturl=$domain."/offer.php?offerid=[[$linktype]]";
							}
						$shortcode="[*".$domainflagmain."*]";
						$body = str_replace($shortcode,$targeturl,$body);

				}



$body1 = $body;
$domaintoreplace = "[domain]";

if(count($domainsentered)>0 && $domainsentered[0]!=''){


		foreach ($ip as $ipaddressall){
				$ipaddressall1 = explode("|",$ipaddressall);
				$ipaddress = $ipaddressall1[0];
				$hostnameofip = $ipaddressall1[1];

			for($j=1; $j<=$count; $j++){
				for($k=0; $k<count($domainsentered); $k++){
					$domaintoreplace = $domainsentered[$k];
					include "functions/sendmailsall.php";
				}
		}// for loop of count end here
	}// for loop of ip end here		
}// if loop end here
else{


		foreach ($ip as $ipaddressall){
				$ipaddressall1 = explode("|",$ipaddressall);
				$ipaddress = $ipaddressall1[0];
				$hostnameofip = $ipaddressall1[1];

			for($j=1; $j<=$count; $j++){

			
			
					include "functions/sendmailsall.php";
						
		}// for loop of count end here
	}// for loop of ip end here
}// else loop end here





//---- function send emails ---------------------------------------------------------------------------------

function sendemails($to,$from,$host,$subject,$message1,$headers,$hostnameofip,$domaintoreplace,$returnpath)
{

$to = trim($to);
$from = trim($from);
$host = trim($host);
$subject = trim($subject);
$message1 = trim($message1);
//$domaintoreplace = trim($domaintoreplace);
$returnpath = trim($returnpath);
$hostnameofip = trim($hostnameofip);

	$hname = gethostbyaddr($host);  //here is your hostname use $hname 

if($returnpath=="" || $returnpath==NULL || empty($returnpath)){
$returnpath = "contact@".$hostnameofip;
}
//returnpath variable transplant---------------------------------------------------------------
$returnpath =str_replace("__domain",$domaintoreplace,$returnpath);
$returnpath =str_replace("__host",$hostnameofip,$returnpath);

//---------------------------------------------------------------------------------------------

//headers transplant---------------------------------------------------------------------------

$headers=str_replace("__from",$from,$headers);
$headers=str_replace("__to",$to,$headers);
$headers=str_replace("__subject",$subject,$headers);
$headers=str_replace("__domain",$domaintoreplace,$headers);
$headers=str_replace("__ip",$host,$headers);
$headers=str_replace("__host",$hostnameofip,$headers);

//--------------------------------------------------------------------------------------------

			/*$headers  = "MIME-Version: 1.0\r\n";
			$headers .= "X-Mailer: null\r\n";
			$headers .= "From: $from\r\n";
			$headers .= "To: $to\r\n"; 
			$headers .= $headerstoreplace;
			//$headers .= "Subject: $subject\r\n";
			//$headers .= "Message-Id: <dsf43456-12/31/2050.dskjafh4ty3i8gsrihfER@$hname>\r\n";
			//$headers .= "Content-Type: multipart/alternative;\r\n";


			//$headers .= "Content-type: text/plain; charset=\"ISO-8859-1\"\r\n";
			//$headers .= "Precedence: bulk\r\n";
			$headers .= "Content-type: text/HTML; charset=\"ISO-8859-1\"\r\n";
			$headers .= "Content-Transfer-Encoding: 7bit\r\n";*/

			/*$htmlcode = "<!DOCTYPE html>";
			$htmlcode .= "<html lang=\"en\">";
			$htmlcode .= "<head>";
			$htmlcode .= "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
			$htmlcode .= "<meta charset=\"utf-8\">";
			$htmlcode .= "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
			//$htmlcode .= "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
			$htmlcode .= "<title>Index</title>";
			$htmlcode .= "</head>";
			$htmlcode .= "<body>";

			$htmlcode2 = "</body>";
			$htmlcode2 .= "</html>";*/

			//$message = $htmlcode;
			$message = $message1;
			//$message .= $htmlcode2;




			if($smtp = fsockopen("127.0.0.1",2525))
			{
					fputs($smtp,"hello \r\n");
					$line = fgets($smtp, 1024);
					fputs($smtp,"mail from: $returnpath\r\n"); //return path if blank contact@__hostname
					$line = fgets($smtp, 1024);
					fputs($smtp,"rcpt to: $to\r\n");
					$line = fgets($smtp, 1024);
					fputs($smtp,"data\r\n");
					$line = fgets($smtp, 1024);

					fputs($smtp,"X-virtual-MTA: vmta_$host\r\n");
					fputs($smtp,"$headers\r\n");
					fputs($smtp,"$message\r\n");
					fputs($smtp,".\r\n");
					$line = fgets($smtp, 1024);
					fputs($smtp, "QUIT\r\n");
					fclose($smtp);

					return 1;
			}
			else{
					//echo "!! Error, can't connect to the server $host";
					//$errcount++;
					return 0;
				}
				

}

//------- function ends here--------------------------------------------------------------------------------------	

$file = fopen('status/total.txt', "w");
fwrite($file,"");
fclose($file);
$file = fopen('status/sent.txt', "w");
fwrite($file,"0");
fclose($file);
$file = fopen('status/error.txt', "w");
fwrite($file,"0");
fclose($file);

?>




</body>
</html>