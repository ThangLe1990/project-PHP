<button><a href="login.php"> Click to Login</a></button><br>

<?php 
include ("connectDB.php");

if ( isset($_POST['submit']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['re_password'])){
	$username 		= $_POST['username'];
	$password 		= $_POST['password'];
	$re_password 	= $_POST['re_password'];
	$level   		= 0;
	
	if( $password != $re_password ){
		header("location: register.php");
		echo "Pass is not match";
	}

	$sql_1 	= " SELECT * FROM user_table WHERE username = '$username' ";
	//$result = $conn->query($sql_1);

	// if ($result -> num_rows > 0) {
	// 	header("location: register.php");
	// }else {
	// 	$sql =  "INSERT INTO user_table (username,password,level) VALUES 
 	//          								('$username', '$password','$level')"; 
 	//        	mysqli_query($conn,$sql);
	 //       		echo "Register successfully";
	// }

	$result = mysqli_query($conn,$sql_1);
	

	if (mysqli_num_rows($result) > 0 ) {
		header("location: register.php");
	} else {
		$sql =  "INSERT INTO user_table (username,password,level) VALUES 
        								('$username', '$password','$level')"; 
       	mysqli_query($conn,$sql);
       	echo "Register successfully";

	}


} 
else{
	header("location: register.php");
}




 ?>