<?php
error_reporting(E_ERROR);
include 'db.php';
session_start(); // Starting Session

$status = ''; 
$sql='';
$sqlupdate = '';

$uid = $_SESSION['s_uid'];
$pid = $_POST['pid'];
 
$mat = 		$_POST['mat']; 		
$bat_ing = 	$_POST['bat_ing']; 		
$balls = 	$_POST['balls']; 		
$runs = 	$_POST['runs']; 		
$nos = 		$_POST['nos']; 		
$fif = 		$_POST['fif']; 		
$hun = 		$_POST['hun']; 		
$bat_bst = 	$_POST['bat_bst']; 		
$bow_ing = 	$_POST['bow_ing']; 		
$ovrs = 	$_POST['ovrs']; 		
$wik = 		$_POST['wik']; 		
$tw = 		$_POST['tw']; 		
$fw=		$_POST['fw'];		
$bow_bst = 	$_POST['bow_bst']; 	
$bow_runs = $_POST['bow_runs'];
$mtype = 	$_POST['mtype']; 		


//============================ F.C COMPAIR ====================
 if((strcmp($mtype,"fc"))==0){	
	
	//====================== START CODE ================================
	 
	$sql = "select * from vs_fc s where s.uid=$uid and s.play_id=$pid";
	echo '<h2> F.C : '.$sql.'</h2>';
	$result = mysqli_query ( $conn, $sql );	 
	if (mysqli_num_rows ( $result ) > 0) {
	$row = mysqli_fetch_assoc($result);
	

	
$mat 		=$mat+$row["mat"];
$bat_ing	=$bat_ing+$row["bat_inngs"];
$nos 		=$nos+$row["nos"];
$balls 		=$balls+$row["balls"];
$runs 		=$runs+$row["runs"];
$fif 		=$fif+$row["fifty"];
$hun 		=$hun+$row["hundrd"];

$old_best = $row["hs"];
$new_best = $bat_bst;
$c_old_best = (int)(str_replace("*","","".$row["hs"]));
$c_new_best =(int)(str_replace("*","","".$bat_bst));
if($c_old_best>$c_new_best)
{
	$bat_bst = $old_best;
}
$bat_avg    =round(($runs/($bat_ing-$nos)),2);
$strate		=round(($runs/$balls)*100,2);

$bow_ing 	=$bow_ing+$row["bow_inngs"];	
$bow_runs	=$bow_runs+$row["bow_runs"];
$ovrs 		=$ovrs+$row["overs"];
$wik 		=$wik+$row["wik"];
$tw 		=$tw+$row["3w"];
$fw 		=$fw+$row["5w"];

$old_best = $row["best"];
$new_best = $bow_bst;

$c_old_best = (int)(str_replace("-","","".$row["best"]));
$c_new_best =(int)(str_replace("-","","".$bow_bst));
if($c_old_best>$c_new_best)
{
	$bow_bst = $old_best;
} 
$bow_avg	=round(($bow_runs/$wik),2);
$econ 		=round(($bow_runs/($ovrs*6))*6,2);





$sqlupdate = "UPDATE vs_fc SET 
mat ='$mat',	
bat_inngs ='$bat_ing',	
nos ='$nos',	
balls ='$balls', 	
runs ='$runs',	
fifty ='$fif',	
hundrd ='$hun',	
hs ='$bat_bst',	
bat_avg ='$bat_avg', 	
strate ='$strate', 	
bow_inngs ='$bow_ing',	
bow_runs = '$bow_runs',
overs ='$ovrs',	
wik ='$wik',	
3w ='$tw',	
5w ='$fw', 	
best ='$bow_bst',	
bow_avg ='$bow_avg',
econ ='$econ'
WHERE  `play_id`=$pid  and uid=$uid 
";

	$sqlupdateresult = mysqli_query ( $conn, $sqlupdate );	 
	if ( $sqlupdateresult  > 0) {
		$status = "Data Saved";
} else {
$status = "Data NOT Saved";
}
	}
	
 //========================== END CODE ==================================

}//Main if end

else if(strcmp($mtype,"gl")==0){
	
		 
	$sql = "select * from vs_gully s where s.uid=$uid and s.play_id=$pid";
	echo '<h2>TEST : '.$sql.'</h2>';
	$result = mysqli_query ( $conn, $sql );	 
	if (mysqli_num_rows ( $result ) > 0) {
	$row = mysqli_fetch_assoc($result);
	
	
	
$mat 		=$mat+$row["mat"];
$bat_ing	=$bat_ing+$row["bat_inngs"];
$nos 		=$nos+$row["nos"];
$balls 		=$balls+$row["balls"];
$runs 		=$runs+$row["runs"];
$fif 		=$fif+$row["fifty"];
$hun 		=$hun+$row["hundrd"];

$old_best = $row["hs"];
$new_best = $bat_bst;
$c_old_best = (int)(str_replace("*","","".$row["hs"]));
$c_new_best =(int)(str_replace("*","","".$bat_bst));
if($c_old_best>$c_new_best)
{
	$bat_bst = $old_best;
}
$bat_avg    =round(($runs/($bat_ing-$nos)),2);
$strate		=round(($runs/$balls)*100,2);

$bow_ing 	=$bow_ing+$row["bow_inngs"];	
$bow_runs	=$bow_runs+$row["bow_runs"];
$ovrs 		=$ovrs+$row["overs"];
$wik 		=$wik+$row["wik"];
$tw 		=$tw+$row["3w"];
$fw 		=$fw+$row["5w"];

$old_best = $row["best"];
$new_best = $bow_bst;

$c_old_best = (int)(str_replace("-","","".$row["best"]));
$c_new_best =(int)(str_replace("-","","".$bow_bst));
if($c_old_best>$c_new_best)
{
	$bow_bst = $old_best;
} 
$bow_avg	=round(($bow_runs/$wik),2);
$econ 		=round(($bow_runs/($ovrs*6))*6,2);





$sqlupdate = "UPDATE vs_gully SET 
mat ='$mat',	
bat_inngs ='$bat_ing',	
nos ='$nos',	
balls ='$balls', 	
runs ='$runs',	
fifty ='$fif',	
hundrd ='$hun',	
hs ='$bat_bst',	
bat_avg ='$bat_avg', 	
strate ='$strate', 	
bow_inngs ='$bow_ing',	
bow_runs = '$bow_runs',
overs ='$ovrs',	
wik ='$wik',	
3w ='$tw',	
5w ='$fw', 	
best ='$bow_bst',	
bow_avg ='$bow_avg' ,
econ ='$econ'	
WHERE  `play_id`=$pid  and uid=$uid 
";

	$sqlupdateresult = mysqli_query ( $conn, $sqlupdate );	 
	if ( $sqlupdateresult  > 0) {
		$status = "Data Saved";
} else {
$status = "Data NOT Saved";
}
	}
	
 //========================== END CODE ==================================
	
	
}else if(strcmp($mtype,"int")==0){
	
		$sql = "select * from vs_int s where s.uid=$uid and s.play_id=$pid";
	echo '<h2>int : '.$sql.'</h2>';
	$result = mysqli_query ( $conn, $sql );	 
	if (mysqli_num_rows ( $result ) > 0) {
	$row = mysqli_fetch_assoc($result);
	

	
$mat 		=$mat+$row["mat"];
$bat_ing	=$bat_ing+$row["bat_inngs"];
$nos 		=$nos+$row["nos"];
$balls 		=$balls+$row["balls"];
$runs 		=$runs+$row["runs"];
$fif 		=$fif+$row["fifty"];
$hun 		=$hun+$row["hundrd"];

$old_best = $row["hs"];
$new_best = $bat_bst;
$c_old_best = (int)(str_replace("*","","".$row["hs"]));
$c_new_best =(int)(str_replace("*","","".$bat_bst));
if($c_old_best>$c_new_best)
{
	$bat_bst = $old_best;
}
$bat_avg    =round(($runs/($bat_ing-$nos)),2);
$strate		=round(($runs/$balls)*100,2);

$bow_ing 	=$bow_ing+$row["bow_inngs"];	
$bow_runs	=$bow_runs+$row["bow_runs"];
$ovrs 		=$ovrs+$row["overs"];
$wik 		=$wik+$row["wik"];
$tw 		=$tw+$row["3w"];
$fw 		=$fw+$row["5w"];

$old_best = $row["best"];
$new_best = $bow_bst;

$c_old_best = (int)(str_replace("-","","".$row["best"]));
$c_new_best =(int)(str_replace("-","","".$bow_bst));
if($c_old_best>$c_new_best)
{
	$bow_bst = $old_best;
} 
$bow_avg	=round(($bow_runs/$wik),2);
$econ 		=round(($bow_runs/($ovrs*6))*6,2);



$sqlupdate = "UPDATE vs_int SET 
mat ='$mat',	
bat_inngs ='$bat_ing',	
nos ='$nos',	
balls ='$balls', 	
runs ='$runs',	
fifty ='$fif',	
hundrd ='$hun',	
hs ='$bat_bst',	
bat_avg ='$bat_avg', 	
strate ='$strate', 	
bow_inngs ='$bow_ing',	
bow_runs = '$bow_runs',
overs ='$ovrs',	
wik ='$wik',	
3w ='$tw',	
5w ='$fw', 	
best ='$bow_bst',	
bow_avg ='$bow_avg',
econ ='$econ' 	
WHERE  `play_id`=$pid  and uid=$uid 
";

	$sqlupdateresult = mysqli_query ( $conn, $sqlupdate );	 
	if ( $sqlupdateresult  > 0) {
		$status = "Data Saved";
} else {
$status = "Data NOT Saved";
}
	}
	
 //========================== END CODE ==================================
}else{
		echo '<h2>ELSE : '.$sql.'</h2>';
$status = "Iam From ELSE: ".$mtype;
}
			
 			
 
 
 


 
mysql_close($conn); // Closing Connection
 
$arr = array('st' => $status,'sql' =>'SQL IS '.$sql, 'sqlupdate' =>'sqlupdate IS '.$sqlupdate);
echo json_encode($arr);
?>