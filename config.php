<?php
// /* Database credentials. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "thesis_db";
 
//  Attempt to connect to MySQL database 
// $conn = mysqli_connect($servername, $username, $password, $database);
 
// // Check connection
// if(!$conn){
// 	die("Database connection failed".mysql_connect_error());
// }
// else{
// 	//echo "connected!!!";
// }
$connections = mysqli_connect("localhost","root","","thesis_db");
if (mysqli_connect_errno()){
	echo "Failed to Connect to MySQL: " . mysqli_connect_error();
}
else{
	echo "";
}

?>