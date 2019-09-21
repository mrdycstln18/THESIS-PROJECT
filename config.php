<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$database = "thesis_db";
 
/* Attempt to connect to MySQL database */
$conn = mysqli_connect($servername, $username, $password, $database);
 
// Check connection
if(!$conn){
	die("Database connection failed".mysql_connect_error());
}
?>