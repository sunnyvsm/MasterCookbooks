<?php

if(!isset($_SESSION['allow']))
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if($_SESSION['allow']=="" )
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if($_SESSION['allow']==NULL )
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}
if(empty($_SESSION['allow']))
{
	mysql_close();
	header("Location:../login/index.php");
	exit(0);
}



?>