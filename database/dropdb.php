<?php
/*

*	File:		dropdb.php
*	By:			Anniessa Antar
*	Date:		2023-05-15
*
*	This script drops the alphacrm database*
*
*
*=====================================
*/

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "alphacrm";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }


{ // Connect and Test MySQL and specific DB (return $dbSuccess = T/F)

//	 Execute code ONLY if connections were successful 	
if (OpenCon()) {
    $dbName = "alphacrm";
    $drop_SQL = "DROP DATABASE ".$dbName;
    
    if (mysql_query($drop_SQL))  {	
        echo "'DROP DATABASE ".$dbName."' -  Successful.";
    } else {
        echo "'DROP DATABASE ".$dbName."' - Failed.";
    }
    
}
}



?>