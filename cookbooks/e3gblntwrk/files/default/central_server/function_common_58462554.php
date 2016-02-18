<?php

function cleaninput($str) {
	

		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		$str=htmlentities($str);
		return mysql_real_escape_string($str);
	}

function executesql($sql,$link){
		
				if (!mysql_query($sql,$link))
				  {
				  die('Error: ' . mysql_error());
				  exit(0);
				  }
}
?>