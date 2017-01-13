<?php


//THIS FILE IS FOR DROPING THE DATABASE


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
	echo "MYSQL connect ok<br />";
	
	//if(!$dbconnected){
		//echo "DB connected <br />";
	//}
	//	else{
	//		echo "DB connection failed<br />";
	//		$dbsuccess=false;
	//		}
}
	else{
		echo "MYSQL connection FAILED<br />";
		$dbsuccess=false;
		}
//execute only if connection were successful
		if ($dbsuccess) {
			# code...
			$dbName="mydb";
			$delete_SQL="DROP DATABASE  ".$dbName;

			if (mysql_query($delete_SQL)) {
				# code...
				echo "'DROP database".$dbName."' - successful.";
			}
			else
			{
				echo "'DROP database".$dbName."' - failed.";
			}
		}


?>
