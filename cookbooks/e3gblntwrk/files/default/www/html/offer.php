<?php
error_reporting(0);

$codeDB = 56565;
$_SESSION['seCureCon66235s2s']= $codeDB;
include "config_cA_soft_9564.php";



function executesql($sql,$link){
		
				if (!mysql_query($sql,$link))
				  {
				  die('Error: ' . mysql_error());
				  exit(0);
				  }
}





$salt="2565656DSDSdsdsD";
function decryptlink($text,$salt)
    {
        return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256,
												  md5($salt),
												  base64_decode($text),
												  MCRYPT_MODE_CBC,
												  md5(md5($salt))
												  ),
												"\0");
    }


if(isset($_GET['offerid'])){

$encrcode = $_GET['offerid'];
	 	 $dirty = array("+", "/", "="," ","0");
		$clean = array("_PLUS_", "_SLASH_", "_EQUALS_","_SPACE_","_ZERO_");
     $encrcode=str_replace($clean, $dirty, $encrcode);








$shortcode = decryptlink($encrcode,$salt);


$shortcode = explode("||",$shortcode);

$emailid = $shortcode[0];
$userid = $shortcode[1];
$offerid = $shortcode[2];
$isp = $shortcode[3];
$listname = $shortcode[4];
$type = $shortcode[5];

				

				$sqlqry4="SELECT * FROM offers WHERE offerid='$offerid'";
				$result4=mysql_query($sqlqry4);
				$num_results4 = mysql_num_rows($result4);
				$datarow = mysql_fetch_array($result4);
				$clik1=$datarow['clicks'];
				$opens1=$datarow['opens'];

				if($type == 'r'){
						$finallink = $datarow['rlink'];
				}
				else if($type == 'o'){
						$finallink = $datarow['olink'];
				}
				else{
						$finallink = $datarow['ulink'];
				}
				

if(sizeof($shortcode) == 6 && $num_results4 == 1 && $type == 'r' && $emailid!="00000000" && $isp != "testemail" && $listname != "testemail"){
				
						$date=date('d_m_Y');
						$file="reports/clicker_".$date.".txt";


						if (!file_exists($file)){

							$clickerfile = fopen($file, "w");
							fclose($clickerfile);

							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid."|".$isp."|".$listname.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						else{
							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid."|".$isp."|".$listname.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						$clik1++;
						$sqltr="UPDATE offers SET clicks=$clik1 WHERE offerid='$offerid'";
						executesql($sqltr,$link);

					header("location:$finallink");
				}
				else if(sizeof($shortcode) == 6 && $num_results4 == 1 && $type == 'o' && $emailid!="00000000" && $isp != "testemail" && $listname != "testemail"){
				
						$date=date('d_m_Y');
						$file="reports/optout_".$date.".txt";


						if (!file_exists($file)){

							$clickerfile = fopen($file, "w");
							fclose($clickerfile);

							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						else{
							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						

					header("location:$finallink");
				}
				else if(sizeof($shortcode) == 6 && $num_results4 == 1 && $type == 'u' && $emailid!="00000000" && $isp != "testemail" && $listname != "testemail"){
				
						$date=date('d_m_Y');
						$file="reports/unsubscribe_".$date.".txt";


						if (!file_exists($file)){

							$clickerfile = fopen($file, "w");
							fclose($clickerfile);

							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						else{
							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						

					header("location:$finallink");
				}
				else if(sizeof($shortcode) == 6 && $num_results4 == 1 && $type == 'i' && $emailid!="00000000" && $isp != "testemail" && $listname != "testemail"){
				
						$date=date('d_m_Y');
						$file="reports/impression_".$date.".txt";


						if (!file_exists($file)){

							$clickerfile = fopen($file, "w");
							fclose($clickerfile);

							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}
						else{
							$placedata = fopen($file, "a");
							$txt=$emailid."|".$offerid.PHP_EOL;
							fwrite($placedata, $txt);
							fclose($placedata);

						}

						$opens1++;
						$sqltr="UPDATE offers SET opens=$opens1 WHERE offerid='$offerid'";
						executesql($sqltr,$link);
						

				}
				else if($emailid=="00000000" && $isp == "testemail" && $listname == "testemail" && $type == 'r'){
					
						$clik1++;
						$sqltr="UPDATE offers SET clicks=$clik1 WHERE offerid='$offerid'";
						executesql($sqltr,$link);


					header("location:$finallink");
				}
				else if($emailid=="00000000" && $isp == "testemail" && $listname == "testemail" && $type == 'o'){
					header("location:$finallink");
				}
				else if($emailid=="00000000" && $isp == "testemail" && $listname == "testemail" && $type == 'u'){
					header("location:$finallink");
				}
				else if($emailid=="00000000" && $isp == "testemail" && $listname == "testemail" && $type == 'i'){

						$opens1++;
						$sqltr="UPDATE offers SET opens=$opens1 WHERE offerid='$offerid'";
						executesql($sqltr,$link);

					header("location:$finallink");
				}

				else{
					echo "invalid Parameters";
					exit(0);
				}





}

?>
