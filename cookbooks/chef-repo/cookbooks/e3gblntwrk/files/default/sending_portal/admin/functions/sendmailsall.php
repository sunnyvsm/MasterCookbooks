<?php
$periodsflag++;
if($count!=1){
						$email = explode('|',$datalines[$periodsflag-1]);

							$address = $email[1];
							$emailid = $email[0];
							$isp = $email[3];
							$listname = $email[2];

							$idbunch_r=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||r";
							$idbunch_o=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||o";
							$idbunch_u=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||u";
							$idbunch_i=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||i";


							$idbunch4r=encryptlink($idbunch_r,$salt);
							$idbunch4o=encryptlink($idbunch_o,$salt);
							$idbunch4u=encryptlink($idbunch_u,$salt);
							$idbunch4i=encryptlink($idbunch_i,$salt);
							
							 $dirty = array("+", "/", "="," ","0");
							 $clean = array("_PLUS_", "_SLASH_", "_EQUALS_","_SPACE_","_ZERO_");

								
								$idbunch4r=str_replace($dirty, $clean, $idbunch4r);
								$idbunch4o=str_replace($dirty, $clean, $idbunch4o);
								$idbunch4u=str_replace($dirty, $clean, $idbunch4u);
								$idbunch4i=str_replace($dirty, $clean, $idbunch4i);


							$body = str_replace('[[r]]',$idbunch4r,$body1);
							$body = str_replace('[[o]]',$idbunch4o,$body);
							$body = str_replace('[[u]]',$idbunch4u,$body);
							$body = str_replace('[[i]]',$idbunch4i,$body);

		$stst1=sendemails($address,$from,$ipaddress,$subject,$body,$headerstoreplace,$hostnameofip,$domaintoreplace,$returnpath);
							if($stst1==1){
								$sentcount++;
								$placedata = fopen('status/sent.txt', "w");
								fwrite($placedata, $sentcount);
							}
							else{
								$errcount++;
								$placedata = fopen('status/error.txt', "w");
								fwrite($placedata, $errcount);
							}							
}

					if($periodsflag%$period==0){
							
							
								foreach($testmail as $test){
							
										$emailid = "00000000";
										$isp = "testemail";
										$listname = "testemail";
								
										

										$idbunch_r=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||r";
										$idbunch_o=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||o";
										$idbunch_u=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||u";
										$idbunch_i=$emailid."||".$userid."||".$offerid."||".$isp."||".$listname."||i";


										$idbunch4r=encryptlink($idbunch_r,$salt);
										$idbunch4o=encryptlink($idbunch_o,$salt);
										$idbunch4u=encryptlink($idbunch_u,$salt);
										$idbunch4i=encryptlink($idbunch_i,$salt);
										
										 $dirty = array("+", "/", "="," ","0");
										 $clean = array("_PLUS_", "_SLASH_", "_EQUALS_","_SPACE_","_ZERO_");

											
											$idbunch4r=str_replace($dirty, $clean, $idbunch4r);
											$idbunch4o=str_replace($dirty, $clean, $idbunch4o);
											$idbunch4u=str_replace($dirty, $clean, $idbunch4u);
											$idbunch4i=str_replace($dirty, $clean, $idbunch4i);


										$body = str_replace('[[r]]',$idbunch4r,$body1);
										$body = str_replace('[[o]]',$idbunch4o,$body);
										$body = str_replace('[[u]]',$idbunch4u,$body);
										$body = str_replace('[[i]]',$idbunch4i,$body);

				$stst1=sendemails($test,$from,$ipaddress,$subject,$body,$headerstoreplace,$hostnameofip,$domaintoreplace,$returnpath);
								


								}
							}

							

if($periodsflag%$iterate==0){
	sleep($wait);
}

?>