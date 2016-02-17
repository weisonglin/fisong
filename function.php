<?php



function static getconnection()
{
	$connection=mysql_connect("db4free.net","weisong","victor1234") or die("host connection error");
	mysql_select_db("fisonguser",$connection) or die("database error");
}












?>