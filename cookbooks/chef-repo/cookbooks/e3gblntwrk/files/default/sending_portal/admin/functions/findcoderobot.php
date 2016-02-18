<?php


function findcode($string,$start,$end){


$string = " ".$string;
$ini = strpos($string,$start);
		if($ini == 0){
			return "";
		}
		else{

		$ini += strlen($start);
		$len = strpos($string,$end,$ini)-$ini;
		return substr($string, $ini, $len);
		}
}

/*
$string="hie swknd jnsdn nkjds [*domain=r*] nsndj jnsjdjsenj";
echo findcode($string,'[*','*]');
*/



?>