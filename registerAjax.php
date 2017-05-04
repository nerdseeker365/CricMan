<?php
include 'db.php';

$username = $_POST ["username"];
$password = $_POST ["password"];
$email = $_POST ["email"]; 
$msg='';
$status=0;
$link = "";
 


if (! empty ( $_POST ["username"] ) && ! empty ( $_POST ["password"] ) && ! empty ( $_POST ["email"] )) {
	
	// Regisred Checking
	
	$sql = "select * from cric_user a where a.email = '$email'";	
	$result = mysqli_query ( $conn, $sql );
	
	if (mysqli_num_rows ( $result ) > 0) {
		$msg= "<h1>$email</h1>  already in use. Try to Login .If not Verify, Verify the email now ";
		//echo 'Im in AALreday Exixt';
	}
	
	
	else{
		global $status;
		$status = 20;
		$sql1 = "INSERT INTO cric_user (username, password, email,pic) VALUES ('$username', '$password', '$email','pic/u1.jpg')";
		$t = mysqli_query ( $conn, $sql1 );
		//echo $t;
		if ($t) {
			//$msg= "<h2>Hi ".$username." ,<br/><br/>  Please check ".$email." and Verify  Email Address by clicking the Link</h2>";
			$msg= "<h2>Hi ".$username." ,<br/><br/>  Signup Successfull, Please Login!!</h2>";
		} else {
			$msg= "Something wrong";
		}
		
		
	}
} else {
	
	$msg=  "<h1>Please Enter all the Deatails</h1>";
	
	
}


$arr = array('msg' => $msg, 'status' => $status, 'link' => $link);
echo json_encode($arr);



?>
