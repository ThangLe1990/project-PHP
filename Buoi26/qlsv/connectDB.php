<?php 
// Create connection
// $servername = "localhost";
// $username= "root";
// $password = "";
// $dbname = "qlsv_k38";
$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8");


 ?>