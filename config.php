<?php
  
function Connect()
{
 $dbhost = "localhost";
 $dbuser = "blog";
 $dbpass = "C*p1Aa1_%S";
 $dbname = "blog";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 
 return $conn;
}
 
?>
