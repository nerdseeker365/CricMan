<?php
error_reporting(E_ERROR);
include 'db.php';
session_start(); // Starting Session

//======================= SOLO FC VARIABELS START ============================
global $solo_fc_uid,
 $solo_fc_play_id,
 $solo_fc_play_name,
 $solo_fc_play_age,
 $solo_fc_mat,
 $solo_fc_bat_inngs,
 $solo_fc_nos,
 $solo_fc_balls,
 $solo_fc_runs,
 $solo_fc_fifty,
 $solo_fc_hundrd,
 $solo_fc_hs,
 $solo_fc_bat_avg,
 $solo_fc_strate,
 $solo_fc_bow_inngs,
 $solo_fc_overs,
 $solo_fc_wik,
 $solo_fc_3w,
 $solo_fc_5w,
 $solo_fc_best,
 $solo_fc_bow_avg,
 $solo_fc_econ,
//=======================SOLO-FC-VARIABELSEND============================




//=======================SOLO-TEST-VARIABELSSTART============================
 $solo_test_uid,
 $solo_test_play_id,
 $solo_test_play_name,
 $solo_test_play_age,
 $solo_test_mat,
 $solo_test_bat_inngs,
 $solo_test_nos,
 $solo_test_balls,
 $solo_test_runs,
 $solo_test_fifty,
 $solo_test_hundrd,
 $solo_test_hs,
 $solo_test_bat_avg,
 $solo_test_strate,
 $solo_test_bow_inngs,
 $solo_test_overs,
 $solo_test_wik,
 $solo_test_3w,
 $solo_test_5w,
 $solo_test_best,
 $solo_test_bow_avg,
 $solo_test_econ,
//=======================SOLO-TEST-VARIABELSEND============================




//=======================SOLO-ODI-VARIABELSSTART============================
 $solo_odi_uid,
 $solo_odi_play_id,
 $solo_odi_play_name,
 $solo_odi_play_age,
 $solo_odi_mat,
 $solo_odi_bat_inngs,
 $solo_odi_nos,
 $solo_odi_balls,
 $solo_odi_runs,
 $solo_odi_fifty,
 $solo_odi_hundrd,
 $solo_odi_hs,
 $solo_odi_bat_avg,
 $solo_odi_strate,
 $solo_odi_bow_inngs,
 $solo_odi_overs,
 $solo_odi_wik,
 $solo_odi_3w,
 $solo_odi_5w,
 $solo_odi_best,
 $solo_odi_bow_avg,
 $solo_odi_econ,
//=======================SOLO-ODIVARIABELSEND============================



//=======================SOLO-T20VARIABELSSTART============================
 $solo_tt_uid,
 $solo_tt_play_id,
 $solo_tt_play_name,
 $solo_tt_play_age,
 $solo_tt_mat,
 $solo_tt_bat_inngs,
 $solo_tt_nos,
 $solo_tt_balls,
 $solo_tt_runs,
 $solo_tt_fifty,
 $solo_tt_hundrd,
 $solo_tt_hs,
 $solo_tt_bat_avg,
 $solo_tt_strate,
 $solo_tt_bow_inngs,
 $solo_tt_overs,
 $solo_tt_wik,
 $solo_tt_3w,
 $solo_tt_5w,
 $solo_tt_best,
 $solo_tt_bow_avg,
 $solo_tt_econ;
//=======================SOLOT20VARIABELSEND============================
$pid=$_GET['pid'];
$uid=$_GET['uid'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter


// ========================== FC DATA GETTING START ==============================
 $sql = "select * from solo_fc s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$solo_fc_uid       = $row["uid"];
$solo_fc_play_id   = $row["play_id"];
$solo_fc_play_name = $row["play_name"];
$solo_fc_play_age  = $row["play_age"];
$solo_fc_mat       = $row["mat"];
$solo_fc_bat_inngs = $row["bat_inngs"];
$solo_fc_nos       = $row["nos"];
$solo_fc_balls     = $row["balls"];
$solo_fc_runs      = $row["runs"];
$solo_fc_fifty     = $row["fifty"];
$solo_fc_hundrd    = $row["hundrd"];
$solo_fc_hs        = $row["hs"];
$solo_fc_bat_avg   = $row["bat_avg"];
$solo_fc_strate    = $row["strate"];
$solo_fc_bow_inngs = $row["bow_inngs"];
$solo_fc_overs     = $row["overs"];
$solo_fc_wik       = $row["wik"];
$solo_fc_3w        = $row["3w"];
$solo_fc_5w        = $row["5w"];
$solo_fc_best      = $row["best"];
$solo_fc_bow_avg   = $row["bow_avg"];
$solo_fc_econ   = $row["econ"];
 }
// ========================== FC DATA GETTING END ==============================



// ========================== TEST DATA GETTING START ==============================
 $sql = "select * from solo_test s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$solo_test_uid       = $row["uid"];
$solo_test_play_id   = $row["play_id"];
$solo_test_play_name = $row["play_name"];
$solo_test_play_age  = $row["play_age"];
$solo_test_mat       = $row["mat"];
$solo_test_bat_inngs = $row["bat_inngs"];
$solo_test_nos       = $row["nos"];
$solo_test_balls     = $row["balls"];
$solo_test_runs      = $row["runs"];
$solo_test_fifty     = $row["fifty"];
$solo_test_hundrd    = $row["hundrd"];
$solo_test_hs        = $row["hs"];
$solo_test_bat_avg   = $row["bat_avg"];
$solo_test_strate    = $row["strate"];
$solo_test_bow_inngs = $row["bow_inngs"];
$solo_test_overs     = $row["overs"];
$solo_test_wik       = $row["wik"];
$solo_test_3w        = $row["3w"];
$solo_test_5w        = $row["5w"];
$solo_test_best      = $row["best"];
$solo_test_bow_avg   = $row["bow_avg"];
$solo_test_econ   = $row["econ"];
 }
// ========================== TEST DATA GETTING END ==============================



// ========================== ODI DATA GETTING START ==============================
 $sql = "select * from solo_odi s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$solo_odi_uid       = $row["uid"];
$solo_odi_play_id   = $row["play_id"];
$solo_odi_play_name = $row["play_name"];
$solo_odi_play_age  = $row["play_age"];
$solo_odi_mat       = $row["mat"];
$solo_odi_bat_inngs = $row["bat_inngs"];
$solo_odi_nos       = $row["nos"];
$solo_odi_balls     = $row["balls"];
$solo_odi_runs      = $row["runs"];
$solo_odi_fifty     = $row["fifty"];
$solo_odi_hundrd    = $row["hundrd"];
$solo_odi_hs        = $row["hs"];
$solo_odi_bat_avg   = $row["bat_avg"];
$solo_odi_strate    = $row["strate"];
$solo_odi_bow_inngs = $row["bow_inngs"];
$solo_odi_overs     = $row["overs"];
$solo_odi_wik       = $row["wik"];
$solo_odi_3w        = $row["3w"];
$solo_odi_5w        = $row["5w"];
$solo_odi_best      = $row["best"];
$solo_odi_bow_avg   = $row["bow_avg"];
$solo_odi_econ   = $row["econ"];
 }
// ========================== ODI DATA GETTING END ==============================


// ========================== T20 DATA GETTING START ==============================
 $sql = "select * from solo_tt s where s.play_id=".$pid." and s.uid =".$uid;
 //echo $sql;
 $result = mysqli_query ( $conn, $sql ); 
 if (mysqli_num_rows ( $result ) > 0) {
 $row = mysqli_fetch_assoc($result);

$solo_tt_uid       = $row["uid"];
$solo_tt_play_id   = $row["play_id"];
$solo_tt_play_name = $row["play_name"];
$solo_tt_play_age  = $row["play_age"];
$solo_tt_mat       = $row["mat"];
$solo_tt_bat_inngs = $row["bat_inngs"];
$solo_tt_nos       = $row["nos"];
$solo_tt_balls     = $row["balls"];
$solo_tt_runs      = $row["runs"];
$solo_tt_fifty     = $row["fifty"];
$solo_tt_hundrd    = $row["hundrd"];
$solo_tt_hs        = $row["hs"];
$solo_tt_bat_avg   = $row["bat_avg"];
$solo_tt_strate    = $row["strate"];
$solo_tt_bow_inngs = $row["bow_inngs"];
$solo_tt_overs     = $row["overs"];
$solo_tt_wik       = $row["wik"];
$solo_tt_3w        = $row["3w"];
$solo_tt_5w        = $row["5w"];
$solo_tt_best      = $row["best"];
$solo_tt_bow_avg   = $row["bow_avg"];
$solo_tt_econ   = $row["econ"];
 }
// ========================== T20 DATA GETTING END ==============================







 //echo $sql;
 //echo "a :  ".$a1." b:  ".$b1."  c: ".$c1;
  

  
 

mysql_close($conn); // Closing Connection

$arr = array(
//'a' => $a, 'b' => $b, 'c' => $c
 'solo_fc_uid'=>	$solo_fc_uid,  
'solo_fc_play_id'=>	$solo_fc_play_id,  
'solo_fc_play_name'=>	$solo_fc_play_name ,  
'solo_fc_play_age'=>	$solo_fc_play_age  ,  
'solo_fc_mat'=>	$solo_fc_mat,  
'solo_fc_bat_inngs'=>	$solo_fc_bat_inngs ,  
'solo_fc_nos'=>	$solo_fc_nos,  
'solo_fc_balls'=>	$solo_fc_balls,  
'solo_fc_runs'=>	$solo_fc_runs ,  
'solo_fc_fifty'=>	$solo_fc_fifty,  
'solo_fc_hundrd'=>	$solo_fc_hundrd,  
'solo_fc_hs'=>	$solo_fc_hs ,  
'solo_fc_bat_avg'=>	$solo_fc_bat_avg,  
'solo_fc_strate'=>	$solo_fc_strate,  
'solo_fc_bow_inngs'=>	$solo_fc_bow_inngs ,  
'solo_fc_overs'=>	$solo_fc_overs,  
'solo_fc_wik'=>	$solo_fc_wik,  
'solo_fc_3w'=>	$solo_fc_3w ,  
'solo_fc_5w'=>	$solo_fc_5w ,  
'solo_fc_best'=>	$solo_fc_best ,  
'solo_fc_bow_avg'=>	$solo_fc_bow_avg,  //solo_fc END
'solo_test_uid'=>	$solo_test_uid,  
'solo_test_play_id'=>	$solo_test_play_id,  
'solo_test_play_name'=>	$solo_test_play_name ,  
'solo_test_play_age'=>	$solo_test_play_age  ,  
'solo_test_mat'=>	$solo_test_mat,  
'solo_test_bat_inngs'=>	$solo_test_bat_inngs ,  
'solo_test_nos'=>	$solo_test_nos,  
'solo_test_balls'=>	$solo_test_balls,  
'solo_test_runs'=>	$solo_test_runs ,  
'solo_test_fifty'=>	$solo_test_fifty,  
'solo_test_hundrd'=>	$solo_test_hundrd,  
'solo_test_hs'=>	$solo_test_hs ,  
'solo_test_bat_avg'=>	$solo_test_bat_avg,  
'solo_test_strate'=>	$solo_test_strate,  
'solo_test_bow_inngs'=>	$solo_test_bow_inngs ,  
'solo_test_overs'=>	$solo_test_overs,  
'solo_test_wik'=>	$solo_test_wik,  
'solo_test_3w'=>	$solo_test_3w ,  
'solo_test_5w'=>	$solo_test_5w ,  
'solo_test_best'=>	$solo_test_best ,  
'solo_test_bow_avg'=>	$solo_test_bow_avg,  //solo_test END
'solo_odi_uid'=>	$solo_odi_uid,  
'solo_odi_play_id'=>	$solo_odi_play_id,  
'solo_odi_play_name'=>	$solo_odi_play_name ,  
'solo_odi_play_age'=>	$solo_odi_play_age  ,  
'solo_odi_mat'=>	$solo_odi_mat,  
'solo_odi_bat_inngs'=>	$solo_odi_bat_inngs ,  
'solo_odi_nos'=>	$solo_odi_nos,  
'solo_odi_balls'=>	$solo_odi_balls,  
'solo_odi_runs'=>	$solo_odi_runs ,  
'solo_odi_fifty'=>	$solo_odi_fifty,  
'solo_odi_hundrd'=>	$solo_odi_hundrd,  
'solo_odi_hs'=>	$solo_odi_hs ,  
'solo_odi_bat_avg'=>	$solo_odi_bat_avg,  
'solo_odi_strate'=>	$solo_odi_strate,  
'solo_odi_bow_inngs'=>	$solo_odi_bow_inngs ,  
'solo_odi_overs'=>	$solo_odi_overs,  
'solo_odi_wik'=>	$solo_odi_wik,  
'solo_odi_3w'=>	$solo_odi_3w ,  
'solo_odi_5w'=>	$solo_odi_5w ,  
'solo_odi_best'=>	$solo_odi_best ,  
'solo_odi_bow_avg'=>	$solo_odi_bow_avg,  //solo_odi END
'solo_tt_uid'=>	$solo_tt_uid,  
'solo_tt_play_id'=>	$solo_tt_play_id,  
'solo_tt_play_name'=>	$solo_tt_play_name ,  
'solo_tt_play_age'=>	$solo_tt_play_age  ,  
'solo_tt_mat'=>	$solo_tt_mat,  
'solo_tt_bat_inngs'=>	$solo_tt_bat_inngs ,  
'solo_tt_nos'=>	$solo_tt_nos,  
'solo_tt_balls'=>	$solo_tt_balls,  
'solo_tt_runs'=>	$solo_tt_runs ,  
'solo_tt_fifty'=>	$solo_tt_fifty,  
'solo_tt_hundrd'=>	$solo_tt_hundrd,  
'solo_tt_hs'=>	$solo_tt_hs ,  
'solo_tt_bat_avg'=>	$solo_tt_bat_avg,  
'solo_tt_strate'=>	$solo_tt_strate,  
'solo_tt_bow_inngs'=>	$solo_tt_bow_inngs ,  
'solo_tt_overs'=>	$solo_tt_overs,  
'solo_tt_wik'=>	$solo_tt_wik,  
'solo_tt_3w'=>	$solo_tt_3w ,  
'solo_tt_5w'=>	$solo_tt_5w ,  
'solo_tt_best'=>	$solo_tt_best ,  
'solo_tt_bow_avg'=>	$solo_tt_bow_avg,  
'solo_tt_econ'=>	$solo_tt_econ,  
'solo_fc_econ'=>	$solo_fc_econ,  
'solo_test_econ'=>	$solo_test_econ,  
'solo_odi_econ'=>	$solo_odi_econ
);
echo json_encode($arr);
?>
