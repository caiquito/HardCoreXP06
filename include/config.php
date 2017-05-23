<?php
  
function Connect()
{
$dbhost = "localhost";
 $dbuser = "manif699_gestaom";
 $dbpass = "C*p1Aa1_%S";
 $dbname = "manif699_gestaomelhor";
 
 // Create connection
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
 mysqli_set_charset($conn,'utf8');
    
 return $conn;
}
 
?>
