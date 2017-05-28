<?php

$connection=mysql_connect("localhost","root","");
if(!$connection){
	die('problem establishing connection<br/>'.mysql_error());
}
$db_select=mysql_select_db("internshala");
if(!$db_select){
	die('problem selecting database<br/> '.mysql_error());
}



?>