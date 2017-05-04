<?php
error_reporting(E_ERROR);
include 'db.php';
session_start(); // Starting Session

$status = '';
$error=''; // Variable To Store Error Message
//echo "Ajax Strat";
/* 
$_POST['username'] = 's@s.com';
$_POST['password']= 's'; */


if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Login ID or Password is invalid";
//echo  $error;
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter


// SQL query to fetch information of registerd users and finds user match.
	$sql = "select * from cric_user a where a.username = '$username' and a.password ='$password'";
	//echo '<h2>'.$sql.'</h2>';
	$result = mysqli_query ( $conn, $sql );	 
	if (mysqli_num_rows ( $result ) > 0) {
	$row = mysqli_fetch_assoc($result);
	
	$_SESSION["s_uid"] = $row["uid"];	
	$_SESSION["s_username"] = $row["username"];
	$_SESSION["s_email"] = $row["email"];
	$_SESSION['s_pic'] = $row["pic"];
	
	
	
	$status='active';
	
	if($status=='active')
	{	
	//header("location: userdashboard.php"); // Redirecting To Other Page
	$error = "Login Success";
	}else{
		$error = "Your Account is Pending, Please check your mail and Click Link to Activate";
	}
	
} else {
$error = "User Not Found <a href='register.php'><h2>Signup Here</h2></a>";
}
 
mysql_close($conn); // Closing Connection
}
$arr = array('st' => $status, 'e' => $error, 'sql' =>'SQL IS '.$sql);
echo json_encode($arr);
?>