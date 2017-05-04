

<?php
/**
* Multi file upload example
* @author Resalat Haque
* @link http://www.w3bees.com/2013/02/multiple-file-upload-with-php.html
**/
 
include 'db.php';
error_reporting(E_ERROR);
session_start(); 


$uid =  $_SESSION['s_uid'];
$pname = $_GET['name'];
$page = $_GET['age'];
$ptype = $_GET['ptype'];

?>

<?php include('css.php');  ?> 
       
    </head>
<body class="page-header-fixed">
	<div class="overlay"></div>



	<!-- Search Form -->
	<main class="page-content content-wrap">        
       		<?php include('navbar.php');  ?> 
           <div class="page-sidebar sidebar">
              <?php include('sidemenu.php');  ?> 
                <!-- Page Sidebar Inner -->
	</div>
	<!-- Page Sidebar -->
<div class="page-inner">
                    <div id="main-wrapper">
					
                        <div class="panel panel-white">

                            <div class="panel-body">
					
 

<?php

$pid=1; 
$sql = "select max(play_id) AS max from solo_fc";
$result = mysqli_query ( $conn, $sql );	 
$row = mysqli_fetch_assoc($result);
$temp = $row['max'];
 

echo "temp  : ".$temp;

if($temp==NULL)
{
	 
	$pid=1;
}else{

	$pid = ++$temp;
}

echo "USER ID : ".$pid;

if($ptype=='SOLO')
{

		$sql1 = "INSERT INTO `solo_fc` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";	
		$sql2 = "INSERT INTO `solo_odi` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";		
		$sql3 = "INSERT INTO `solo_tt` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";		
		$sql4 = "INSERT INTO `solo_test` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";		
		
		//echo $sql1;				
		
		$t = mysqli_query ( $conn, $sql1 );
		$t = mysqli_query ( $conn, $sql2 );
		$t = mysqli_query ( $conn, $sql3 );
		$t = mysqli_query ( $conn, $sql4 );
		//echo $t;
		if ($t) {
			echo '<h1>'.$table.'    DATA INSTRED<h1>';
			
		} else {
			echo 'ERROR : ';
			echo mysql_error();
		}
}



if($ptype=='VS')
{
	
		$sql1 = "INSERT INTO `vs_fc` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";	
		$sql2 = "INSERT INTO `vs_gully` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";		
		$sql3 = "INSERT INTO `vs_int` (`uid`, `play_id`, `play_name`, `play_age`) VALUES ($uid, $pid, '$pname', $page);";		
	 	
		
		//echo $sql1;				
		
		$t = mysqli_query ( $conn, $sql1 );
		$t = mysqli_query ( $conn, $sql2 );
		$t = mysqli_query ( $conn, $sql3 );
		 
		//echo $t;
		if ($t) {
			echo '<h1>'.$table.'    DATA INSTRED<h1>';
			
		} else {
			echo 'ERROR : ';
			echo mysql_error();
		}
	
}
 
?>
</div>
					</div>
					</div>
					</div>