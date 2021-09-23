<?php 
$servername = "localhost";
$username 	= "root";
$password 	= "123";
$database	= "levisproduct"; 

$conn =  new mysqli ( $servername, $username, $password, $database);
//	------CREATING CONNECTION----  
// if ($conn -> connect_error) {
// 	die( "Connection failed: " . $conn -> connect_error);
// }
// 	echo "Connected successfully";
// 	echo "<br>";
 

//--------CREATE TABLES----------- 
// $sql = "CREATE TABLE user_Table (
 	
//  	ID    		INT(10) AUTO_INCREMENT PRIMARY KEY,
//  	username 	VARCHAR(255), 
//  	password	VARCHAR(255),
//  	level 		INT(10) 

// )";
// if ( $conn->query($sql) === true ) {
// 	echo "Table created successfully";
// }else {
// 	echo "Error creating Table". $conn->error;
// }







 ?>