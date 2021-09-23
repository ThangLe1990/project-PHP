<?php 
require "../config.php";
require "../connectDB.php";

$id 		= $_GET['id'];


$sql = "DELETE FROM student WHERE id = '$id'";
 
session_start();
if ($conn->query($sql) === TRUE) {
	$_SESSION['success'] = "Đã xóa thành công sinh viên";
	 
    
} else {
   	$_SESSION['error'] =  "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header("location: list.php");

 ?>