<?php
$hostname="localhost";
$username="root";
$password="";

$databasename="mydb";
$dbconnected=mysql_connect($hostname,$username,$password);
$dbselected=mysql_select_db($databasename,$dbconnected);

$dbsuccess=true;

//or die("could not connect to db" mydb);
//connection of db 
if ($dbconnected)
{
	//echo "MYSQL connect ok<br />";
	
	if(!$dbconnected){
		//echo "DB connected <br />";
	//}
	//	else{
			echo "DB connection failed<br />";
			$dbsuccess=false;
			}
}
	else{
		echo "MYSQL connection FAILED<br />";
		$dbsuccess=false;
		}


?>
