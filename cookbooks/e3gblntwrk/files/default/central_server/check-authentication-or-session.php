<?php

if(!isset($_SESSION['personid253']) || !isset($_SESSION['persontype546']) || !isset($_SESSION['personusername458']))
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if($_SESSION['personid253']=="" || $_SESSION['persontype546']=="" || $_SESSION['personusername458']=="")
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if($_SESSION['personid253']==NULL || $_SESSION['persontype546']==NULL || $_SESSION['personusername458']==NULL)
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if(empty($_SESSION['personid253']) || empty($_SESSION['persontype546']) || empty($_SESSION['personusername458']))
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if($_SESSION['persontype546'] != 'admin'){
	header("Location:../login/");
}


?>