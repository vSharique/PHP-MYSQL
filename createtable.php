<?php

//THIS FILE IS FOR CREATING TBALE IN DATABASE


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
	
	if(!$dbconnected){
	//	echo "DB connected <br />";
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



//execute only is connection were successful
		//sql script creating table Company

	if ($dbsuccess) {
			# code...
		$createCoyTable_SQL = "CREATE TABLE mydb.Company ( ";
		$createCoyTable_SQL .= "ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
		$createCoyTable_SQL .= "preName VARCHAR(50) , ";
		$createCoyTable_SQL .= "Name VARCHAR(50) NOT NULL , ";
		$createCoyTable_SQL .= "RegType VARCHAR(50) NULL, ";
		$createCoyTable_SQL .= "StreetA VARCHAR(50) NULL, ";
		$createCoyTable_SQL .= "StreetB VARCHAR(50) NULL, ";
		$createCoyTable_SQL .= "StreetC VARCHAR(50) NULL, ";
		$createCoyTable_SQL .= "Town VARCHAR(50) NULL, ";
		//$createCoyTable_SQL .="Countryi VARCHAR(50) NULL, ";
		//$createCoyTable_SQL .= "Country VARCHAR(50) NULL, ";
		$createCoyTable_SQL .= "zipcode VARCHAR(50) NULL, ";

		$createCoyTable_SQL .= "COUNTRY VARCHAR(50) NOT NULL ";
		$createCoyTable_SQL .= ")";

		if (mysql_query($createCoyTable_SQL)) {

			# code...
			echo "'Create table Company' - successful.<br />";
		}
			


//sql script create table Person


$createPersonTable_SQL = "CREATE TABLE mydb.Person ( ";
$createPersonTable_SQL .= "ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY, ";
$createPersonTable_SQL .= "Saluatation VARCHAR(20), " ;
$createPersonTable_SQL .= "FirstName VARCHAR(50) , ";
$createPersonTable_SQL .= "LastName VARCHAR(50) , ";
$createPersonTable_SQL .= "CompanyID INT (10) NOT NULL ";
$createPersonTable_SQL .= ")";

if (mysql_query($createPersonTable_SQL)) {
	# code...
	echo "'create table Person'- successful.<br />";
}

}
?>

