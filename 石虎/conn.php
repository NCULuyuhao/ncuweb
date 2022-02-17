<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","","ncuweb");
mysqli_query($conn,"SET CHARACTER SET UTF8");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
    define('DB_HOST', 'localhost');  
    define('DB_USER', 'root');  
    define('DB_PWD', '');  
    define('DB_CHARSET', 'UTF8');  
    define('DB_DBNAME', 'ncuweb'); 
?>