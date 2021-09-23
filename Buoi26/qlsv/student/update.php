<?php 
require "../config.php";
require "../connectDB.php";

$id 		= $_POST['id'];
$name 		= $_POST['name'];
$birthday 	= $_POST['birthday'];
$gender 	= $_POST['gender'];
 
 

$sql = "UPDATE student SET name = '$name', birthday = '$birthday', gender = '$gender'
		WHERE id = '$id'";
 
session_start();
if ($conn->query($sql) === TRUE) {
	$_SESSION['success'] = "Đã sửa thành công sinh viên";
	 
    
} else {
   	$_SESSION['error'] =  "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list.php");

 ?>