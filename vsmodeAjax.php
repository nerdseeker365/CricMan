<?php
error_reporting(E_ERROR);
include 'db.php';
session_start(); // Starting Session

//======================= vs FC VARIABELS START ============================
global $vs_fc_uid,
 $vs_fc_play_id,
 $vs_fc_play_name,
 $vs_fc_play_age,
 $vs_fc_mat,
 $vs_fc_bat_inngs,
 $vs_fc_nos,
 $vs_fc_balls,
 $vs_fc_runs,
 $vs_fc_fifty,
 $vs_fc_hundrd,
 $vs_fc_hs,
 $vs_fc_bat_avg,
 $vs_fc_strate,
 $vs_fc_bow_inngs,
 $vs_fc_overs,
 $vs_fc_wik,
 $vs_fc_3w,
 $vs_fc_5w,
 $vs_fc_best,
 $vs_fc_bow_avg,
 $vs_fc_econ,
//=======================vs-FC-VARIABELSEND============================




//=======================vs-TEST-VARIABELSSTART============================
 $vs_gully_uid,
 $vs_gully_play_id,
 $vs_gully_play_name,
 $vs_gully_play_age,
 $vs_gully_mat,
 $vs_gully_bat_inngs,
 $vs_gully_nos,
 $vs_gully_balls,
 $vs_gully_runs,
 $vs_gully_fifty,
 $vs_gully_hundrd,
 $vs_gully_hs,
 $vs_gully_bat_avg,
 $vs_gully_strate,
 $vs_gully_bow_inngs,
 $vs_gully_overs,
 $vs_gully_wik,
 $vs_gully_3w,
 $vs_gully_5w,
 $vs_gully_best,
 $vs_gully_bow_avg,
 $vs_gully_econ,
//=======================vs-TEST-VARIABELSEND============================




//=======================vs-ODI-VARIABELSSTART============================
 $vs_int_uid,
 $vs_int_play_id,
 $vs_int_play_name,
 $vs_int_play_age,
 $vs_int_mat,
 $vs_int_bat_inngs,
 $vs_int_nos,
 $vs_int_balls,
 $vs_int_runs,
 $vs_int_fifty,
 $vs_int_hundrd,
 $vs_int_hs,
 $vs_int_bat_avg,
 $vs_int_strate,
 $vs_int_bow_inngs,
 $vs_int_overs,
 $vs_int_wik,
 $vs_int_3w,
 $vs_int_5w,
 $vs_int_best,
 $vs_int_bow_avg,
 $vs_int_econ;
//=======================vs-ODIVARIABELSEND============================

$pid=$_GET['pid'];
$uid=$_GET['uid'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter


// ========================== FC DATA GETTING START ==============================
 $sql = "select * from vs_fc s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$vs_fc_uid       = $row["uid"];
$vs_fc_play_id   = $row["play_id"];
$vs_fc_play_name = $row["play_name"];
$vs_fc_play_age  = $row["play_age"];
$vs_fc_mat       = $row["mat"];
$vs_fc_bat_inngs = $row["bat_inngs"];
$vs_fc_nos       = $row["nos"];
$vs_fc_balls     = $row["balls"];
$vs_fc_runs      = $row["runs"];
$vs_fc_fifty     = $row["fifty"];
$vs_fc_hundrd    = $row["hundrd"];
$vs_fc_hs        = $row["hs"];
$vs_fc_bat_avg   = $row["bat_avg"];
$vs_fc_strate    = $row["strate"];
$vs_fc_bow_inngs = $row["bow_inngs"];
$vs_fc_overs     = $row["overs"];
$vs_fc_wik       = $row["wik"];
$vs_fc_3w        = $row["3w"];
$vs_fc_5w        = $row["5w"];
$vs_fc_best      = $row["best"];
$vs_fc_bow_avg   = $row["bow_avg"];
$vs_fc_econ   = $row["econ"];
 }
// ========================== FC DATA GETTING END ==============================



// ========================== TEST DATA GETTING START ==============================
 $sql = "select * from vs_gully s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$vs_gully_uid       = $row["uid"];
$vs_gully_play_id   = $row["play_id"];
$vs_gully_play_name = $row["play_name"];
$vs_gully_play_age  = $row["play_age"];
$vs_gully_mat       = $row["mat"];
$vs_gully_bat_inngs = $row["bat_inngs"];
$vs_gully_nos       = $row["nos"];
$vs_gully_balls     = $row["balls"];
$vs_gully_runs      = $row["runs"];
$vs_gully_fifty     = $row["fifty"];
$vs_gully_hundrd    = $row["hundrd"];
$vs_gully_hs        = $row["hs"];
$vs_gully_bat_avg   = $row["bat_avg"];
$vs_gully_strate    = $row["strate"];
$vs_gully_bow_inngs = $row["bow_inngs"];
$vs_gully_overs     = $row["overs"];
$vs_gully_wik       = $row["wik"];
$vs_gully_3w        = $row["3w"];
$vs_gully_5w        = $row["5w"];
$vs_gully_best      = $row["best"];
$vs_gully_bow_avg   = $row["bow_avg"];
$vs_gully_econ   = $row["econ"];
 }
// ========================== TEST DATA GETTING END ==============================



// ========================== ODI DATA GETTING START ==============================
 $sql = "select * from vs_int s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$vs_int_uid       = $row["uid"];
$vs_int_play_id   = $row["play_id"];
$vs_int_play_name = $row["play_name"];
$vs_int_play_age  = $row["play_age"];
$vs_int_mat       = $row["mat"];
$vs_int_bat_inngs = $row["bat_inngs"];
$vs_int_nos       = $row["nos"];
$vs_int_balls     = $row["balls"];
$vs_int_runs      = $row["runs"];
$vs_int_fifty     = $row["fifty"];
$vs_int_hundrd    = $row["hundrd"];
$vs_int_hs        = $row["hs"];
$vs_int_bat_avg   = $row["bat_avg"];
$vs_int_strate    = $row["strate"];
$vs_int_bow_inngs = $row["bow_inngs"];
$vs_int_overs     = $row["overs"];
$vs_int_wik       = $row["wik"];
$vs_int_3w        = $row["3w"];
$vs_int_5w        = $row["5w"];
$vs_int_best      = $row["best"];
$vs_int_bow_avg   = $row["bow_avg"];
$vs_int_econ   = $row["econ"];
 }
// ========================== ODI DATA GETTING END ==============================

 





 //echo $sql;
 //echo "a :  ".$a1." b:  ".$b1."  c: ".$c1;
  

  
 

mysql_close($conn); // Closing Connection

$arr = array(
//'a' => $a, 'b' => $b, 'c' => $c
 'vs_fc_uid'=>	$vs_fc_uid,  
'vs_fc_play_id'=>	$vs_fc_play_id,  
'vs_fc_play_name'=>	$vs_fc_play_name ,  
'vs_fc_play_age'=>	$vs_fc_play_age  ,  
'vs_fc_mat'=>	$vs_fc_mat,  
'vs_fc_bat_inngs'=>	$vs_fc_bat_inngs ,  
'vs_fc_nos'=>	$vs_fc_nos,  
'vs_fc_balls'=>	$vs_fc_balls,  
'vs_fc_runs'=>	$vs_fc_runs ,  
'vs_fc_fifty'=>	$vs_fc_fifty,  
'vs_fc_hundrd'=>	$vs_fc_hundrd,  
'vs_fc_hs'=>	$vs_fc_hs ,  
'vs_fc_bat_avg'=>	$vs_fc_bat_avg,  
'vs_fc_strate'=>	$vs_fc_strate,  
'vs_fc_bow_inngs'=>	$vs_fc_bow_inngs ,  
'vs_fc_overs'=>	$vs_fc_overs,  
'vs_fc_wik'=>	$vs_fc_wik,  
'vs_fc_3w'=>	$vs_fc_3w ,  
'vs_fc_5w'=>	$vs_fc_5w ,  
'vs_fc_best'=>	$vs_fc_best ,  
'vs_fc_bow_avg'=>	$vs_fc_bow_avg,  //vs_fc END
'vs_gully_uid'=>	$vs_gully_uid,  
'vs_gully_play_id'=>	$vs_gully_play_id,  
'vs_gully_play_name'=>	$vs_gully_play_name ,  
'vs_gully_play_age'=>	$vs_gully_play_age  ,  
'vs_gully_mat'=>	$vs_gully_mat,  
'vs_gully_bat_inngs'=>	$vs_gully_bat_inngs ,  
'vs_gully_nos'=>	$vs_gully_nos,  
'vs_gully_balls'=>	$vs_gully_balls,  
'vs_gully_runs'=>	$vs_gully_runs ,  
'vs_gully_fifty'=>	$vs_gully_fifty,  
'vs_gully_hundrd'=>	$vs_gully_hundrd,  
'vs_gully_hs'=>	$vs_gully_hs ,  
'vs_gully_bat_avg'=>	$vs_gully_bat_avg,  
'vs_gully_strate'=>	$vs_gully_strate,  
'vs_gully_bow_inngs'=>	$vs_gully_bow_inngs ,  
'vs_gully_overs'=>	$vs_gully_overs,  
'vs_gully_wik'=>	$vs_gully_wik,  
'vs_gully_3w'=>	$vs_gully_3w ,  
'vs_gully_5w'=>	$vs_gully_5w ,  
'vs_gully_best'=>	$vs_gully_best ,  
'vs_gully_bow_avg'=>	$vs_gully_bow_avg,  //vs_gully END
'vs_int_uid'=>	$vs_int_uid,  
'vs_int_play_id'=>	$vs_int_play_id,  
'vs_int_play_name'=>	$vs_int_play_name ,  
'vs_int_play_age'=>	$vs_int_play_age  ,  
'vs_int_mat'=>	$vs_int_mat,  
'vs_int_bat_inngs'=>	$vs_int_bat_inngs ,  
'vs_int_nos'=>	$vs_int_nos,  
'vs_int_balls'=>	$vs_int_balls,  
'vs_int_runs'=>	$vs_int_runs ,  
'vs_int_fifty'=>	$vs_int_fifty,  
'vs_int_hundrd'=>	$vs_int_hundrd,  
'vs_int_hs'=>	$vs_int_hs ,  
'vs_int_bat_avg'=>	$vs_int_bat_avg,  
'vs_int_strate'=>	$vs_int_strate,  
'vs_int_bow_inngs'=>	$vs_int_bow_inngs ,  
'vs_int_overs'=>	$vs_int_overs,  
'vs_int_wik'=>	$vs_int_wik,  
'vs_int_3w'=>	$vs_int_3w ,  
'vs_int_5w'=>	$vs_int_5w ,  
'vs_int_best'=>	$vs_int_best ,  
'vs_int_bow_avg'=>	$vs_int_bow_avg,  //vs_int END
'vs_fc_econ'=>	$vs_fc_econ,  
'vs_gully_econ'=>	$vs_gully_econ,  
'vs_int_econ'=>	$vs_int_econ
);
echo json_encode($arr);
?>
