<button><a href="ProjectThang/web-ban-hang.html"> Click to Main Page</a></button> <br>

<?php  
include ("connectDB.php");
session_start();
 
if ( isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password'])){
	$username 		= $_POST['username'];
	$password 		= $_POST['password'];


	$sql_2 	= " SELECT * FROM user_table WHERE username = '$username' AND password = '$password' ";
	$result = mysqli_query($conn,$sql_2);

	if( mysqli_num_rows($result) > 0 ){
		$_SESSION['username'] 	= $username;
		$_SESSION['password'] 	= $password;

		echo "Username: " .$_SESSION['username']; 
		echo "<br>";
		echo  "Pass: " .$_SESSION['password'];
		echo "<br>";
		echo "<br>";
		echo "Login successfully! Welcome: " .$_SESSION['username'] ;
	}else {
		echo "Login failed !!!";
	}


} 
	else {
	header("location: login.php");
	}











?>