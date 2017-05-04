<!DOCTYPE html>
<html>

<head>
<?php
include 'sessionCheck.php'; 
include 'db.php';
session_start();
error_reporting(E_ERROR);
$uid = $_SESSION['s_uid'];
$srs = $_SESSION['s_rs']; 
$ply_id =0;
?>
<?php include('css.php');  ?> 

<link rel="stylesheet" type="text/css" href="assets/plugins/switchery/switchery.css" />
 <link rel="stylesheet" type="text/css" href="assets/plugins/select2/css/select2.min.css"/>
       
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
			<div class="row">
			<div class="col-lg-12">
			<!-- ************************* START HERE ***************************** Sidebar -->
				<!-- +++Select Start -->
			

                              <form action="#" class="">
                                 
                                      <label class="">Select Player</label>
                                      <select class="form-group" tabindex="-1" aria-hidden="" id="play_sel_box">
									          <?php 
                                                    		 
                                                    			$sql = "select t.play_id, t.play_name from solo_fc t where t.uid=".$uid;
																echo $sql;
                                                    			$result = mysqli_query($conn, $sql);
                                                    			
                                                    			if (mysqli_num_rows($result) > 0) {
                                                    				// output data of each row
                                                    				while($row = mysqli_fetch_assoc($result)) {
                                                    				$ply_id =	$row["play_id"];
                                                    					$row["play_name"];
                                                    					    
                                                    					echo "<option value=\"".$ply_id."\">".$row["play_name"]."</option> ";
                                                    					 
                                                    				
                                                    				}
                                                    			}  
                                                    			  
                                                                ?>
                                        
                                      </select>
                                 
                              </form>
                         
				
				
				
				
				<!-- +++Select End -->
			
			
			
			<!-- +++tab -->
			
			<section class="panel">
                          <header class="panel-heading tab-bg-dark-navy-blue">
                              <ul class="nav nav-tabs">
                                 
                                  <li class="active">
                                      <a data-toggle="tab" href="#battab">
                                          <i class="fa fa-eraser"></i>Bat
                                          
                                      </a>
                                  </li>
                                  <li class="">
                                      <a data-toggle="tab" href="#bowtab">
                                          <i class="fa fa-circle"></i>Bow
                                          
                                      </a>
                                  </li>
								   <li>
                                      <a data-toggle="tab" href="#addplayertab">
                                          <i class="fa fa-plus"></i>
                                      </a>
                                  </li>
								  
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  
                                  <div id="battab" class="tab-pane active">
								  Batting
								  
								  <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                               <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th scope="row">#</th>
                                  <th>ODI</th>
                                  <th>TST</th>
                                  <th>FC</th>
								  <th>T20</th>
                              </tr>
                              </thead>
                              
							  
							  
							  <tbody>
                             

							 <tr>
                                  <th scope="row">MAT</th>
                                  <td id="od_mat"></td>
                                  <td id="ts_mat"></td>
                                  <td id="fc_mat"></td>
                                  <td id="tt_mat"></td>
                              </tr>                              
                     
							 <tr>
                                  <th scope="row">ING</th>
								  <td id="od_ing"></td>
                                  <td id="ts_ing"></td>
                                  <td id="fc_ing"></td>
                                  <td id="tt_ing"></td>
                             </tr>    


							 <tr>
                                  <th scope="row">RUNS</th>
                                  <td id="od_run"></td>
                                  <td id="ts_run"></td>
                                  <td id="fc_run"></td>
                                  <td id="tt_run"></td>
                              </tr>                              
                     							 
                              
							  
							 <tr>
                                  <th scope="row">50</th>
                              	  <td id="od_fif"></td>
                                  <td id="ts_fif"></td>
                                  <td id="fc_fif"></td>
                                  <td id="tt_fif"></td>
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">100</th>
								  <td id="od_hud"></td>
                                  <td id="ts_hud"></td>
                                  <td id="fc_hud"></td>
                                  <td id="tt_hud"></td>
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">H/S</th>
								  <td id="od_hs"></td>
                                  <td id="ts_hs"></td>
                                  <td id="fc_hs"></td>
                                  <td id="tt_hs"></td>
                              </tr>   
							  
							  <tr>
                                  <th scope="row">AVG</th>
								  <td id="od_bt_avg"></td>
                                  <td id="ts_bt_avg"></td>
                                  <td id="fc_bt_avg"></td>
                                  <td id="tt_bt_avg"></td>
                              </tr>   
							  
							  
							  <tr>
                                  <th scope="row">NO'S</th>
								  <td id="od_nos"></td>
                                  <td id="ts_nos"></td>
                                  <td id="fc_nos"></td>
                                  <td id="tt_nos"></td>
                              </tr>   
							  
							  <tr>
                                  <th scope="row">STR</th>
								  <td id="od_str"></td>
                                  <td id="ts_str"></td>
                                  <td id="fc_str"></td>
                                  <td id="tt_str"></td>
                              </tr>   
							  </tbody>
                          </table>
                              </div>
								  
								  
								  
								  </div><!-- Batting Panel End -->
                                  <div id="bowtab" class="tab-pane ">
								  Bowling
								  
								  
								 
                       <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">    
                          <table class="table table-bordered">
                              <thead>
                              <tr>
                                  <th scope="row">#</th>
                                  <th>ODI</th>
                                  <th>TST</th>
                                  <th>FC</th>
								  <th>T20</th>
                              </tr>
                              </thead>
                              
							  
							  
							  <tbody>
                             

							 <tr>
                                  <th scope="row">MAT</th>
                                  <td id="od_bmat"></td>
                                  <td id="ts_bmat"></td>
                                  <td id="fc_bmat"></td>
                                  <td id="tt_bmat"></td>
                              </tr>                              
                     
							 <tr>
                                  <th scope="row">ING</th>
								  <td id="od_bw_ing"></td>
                                  <td id="ts_bw_ing"></td>
                                  <td id="fc_bw_ing"></td>
                                  <td id="tt_bw_ing"></td>
                             </tr>    


							 <tr>
                                  <th scope="row">OVR</th>
								  <td id="od_ovrs"></td>
                                  <td id="ts_ovrs"></td>
                                  <td id="fc_ovrs"></td>
                                  <td id="tt_ovrs"></td>
                              </tr>                              
                     							 
                              
							  
							 <tr>
                                  <th scope="row">WIK</th>
								  <td id="od_wik"></td>
                                  <td id="ts_wik"></td>
                                  <td id="fc_wik"></td>
                                  <td id="tt_wik"></td>
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">BST</th>
								  <td id="od_bow_best"></td>
                                  <td id="ts_bow_best"></td>
                                  <td id="fc_bow_best"></td>
                                  <td id="tt_bow_best"></td>
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">AVG</th>
								  <td id="od_bow_avg"></td>
                                  <td id="ts_bow_avg"></td>
                                  <td id="fc_bow_avg"></td>
                                  <td id="tt_bow_avg"></td>
                              </tr>                              
                     
							   <tr>
                                  <th scope="row">ECON</th>
								  <td id="od_econ"></td>
                                  <td id="ts_econ"></td>
                                  <td id="fc_econ"></td>
                                  <td id="tt_econ"></td>
                              </tr>                              
                     
							  
							  
							  
							  
							  
							  
							  
							  
							  </tbody>
							  
							  
							  
							  
							  
							  
							  
                          </table>
                   </div>
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  </div><!-- Bowling Panel End -->
								  <div id="addplayertab" class="tab-pane ">
                                   Add Stats
								   <a href="" id="adurl" name="adurl" class="btn btn-default btn-block m-t-md">Add Match</a>
                                  </div><!-- AddPlayer Panel End -->
                              </div>
                          </div>
                      </section>
					  
					  <h2>Logs Area</h2>
					  <b id="curr"><?php echo $uid.", Player ID : ".$pid ?></b>
					  
					  
					</div>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
				
			<!-- ************************* END HERE ***************************** Sidebar -->
			
			</div>			
			
		</div>
		<!-- Row -->
		
	</div>
	<!-- Main Wrapper -->
	
	</div>
	<!-- Page Inner --> <!-- Page Inner --> </main>
	<!-- Page Content -->

	<div class="cd-overlay"></div>
	

 <?php include('js.php');  ?> 
   <script type="text/javascript" src="assets/plugins/select2/js/select2.min.js"></script>
 

<script> 
ajaxStats();
 
 $('#play_sel_box').on('change', function() {	
 ajaxStats();
})//End of Select Box

function ajaxStats(){
	 var pid= $("#play_sel_box").val();
     //alert('ok'+pid);
  var uid=<?php echo $uid ?>
  
   var adlink = "addsoloStats.php?pid="+pid+"&uid="+uid;
   $("#adurl").attr("href",adlink);

  var sjlink = "solomodeAjax.php?pid="+pid+"&uid="+uid;
					 $("#curr").text(sjlink);
                    $.ajax({
                        type: "GET",
                         url: sjlink,                         
                            success: function( data ) {
                           var obj = jQuery.parseJSON(data);
                            //alert(data)    
						  //$('#od_mat').html(obj.solo_fc_mat);	
                          //var _c = obj.c;
 	                //============================fc data start ====================
				$('#fc_mat').html(obj.solo_fc_mat);				
				$('#fc_bmat').html(obj.solo_fc_mat);
				$('#fc_ing').html(obj.solo_fc_bat_inngs);
				$('#fc_nos').html(obj.solo_fc_nos);
				$('#fc_run').html(obj.solo_fc_runs);
				$('#fc_fif').html(obj.solo_fc_fifty);
				$('#fc_hud').html(obj.solo_fc_hundrd);
				$('#fc_hs').html(obj.solo_fc_hs);
				$('#fc_bt_avg').html(obj.solo_fc_bat_avg);
				$('#fc_str').html(obj.solo_fc_strate);
				$('#fc_bw_ing').html(obj.solo_fc_bow_inngs);
				$('#fc_ovrs').html(obj.solo_fc_overs);
				$('#fc_wik').html(obj.solo_fc_wik);
				$('#fc_bow_best').html(obj.solo_fc_best);
				$('#fc_bow_avg').html(obj.solo_fc_bow_avg);
				$('#fc_econ').html(obj.solo_fc_econ);					
					//======================= fc data end ============================
					
					
					//================= TEST VALUES START ================================				
				$('#ts_mat').html(obj.solo_test_mat);				
				$('#ts_bmat').html(obj.solo_test_mat);
				$('#ts_ing').html(obj.solo_test_bat_inngs);
				$('#ts_nos').html(obj.solo_test_nos);
				$('#ts_run').html(obj.solo_test_runs);
				$('#ts_fif').html(obj.solo_test_fifty);
				$('#ts_hud').html(obj.solo_test_hundrd);
				$('#ts_hs').html(obj.solo_test_hs);
				$('#ts_bt_avg').html(obj.solo_test_bat_avg);
				$('#ts_str').html(obj.solo_test_strate);
				$('#ts_bw_ing').html(obj.solo_test_bow_inngs);
				$('#ts_ovrs').html(obj.solo_test_overs);
				$('#ts_wik').html(obj.solo_test_wik);
				$('#ts_bow_best').html(obj.solo_test_best);
				$('#ts_bow_avg').html(obj.solo_test_bow_avg);
				$('#ts_econ').html(obj.solo_test_econ);						
				//================= TEST VALUES eEND ================================
				
							
				
				
				//================= odi VALUES START ================================				
				$('#od_mat').html(obj.solo_odi_mat);				
				$('#od_bmat').html(obj.solo_odi_mat);
				$('#od_ing').html(obj.solo_odi_bat_inngs);
				$('#od_nos').html(obj.solo_odi_nos);
				$('#od_run').html(obj.solo_odi_runs);
				$('#od_fif').html(obj.solo_odi_fifty);
				$('#od_hud').html(obj.solo_odi_hundrd);
				$('#od_hs').html(obj.solo_odi_hs);
				$('#od_bt_avg').html(obj.solo_odi_bat_avg);
				$('#od_str').html(obj.solo_odi_strate);
				$('#od_bw_ing').html(obj.solo_odi_bow_inngs);
				$('#od_ovrs').html(obj.solo_odi_overs);
				$('#od_wik').html(obj.solo_odi_wik);
				$('#od_bow_best').html(obj.solo_odi_best);
				$('#od_bow_avg').html(obj.solo_odi_bow_avg);	
				$('#od_econ').html(obj.solo_odi_econ);					
				//================= iodi VALUES eEND ================================
				
								
				
				
				
				//================= T20 VALUES START ================================				
				$('#tt_mat').html(obj.solo_tt_mat);				
				$('#tt_bmat').html(obj.solo_tt_mat);
				$('#tt_ing').html(obj.solo_tt_bat_inngs);
				$('#tt_nos').html(obj.solo_tt_nos);
				$('#tt_run').html(obj.solo_tt_runs);
				$('#tt_fif').html(obj.solo_tt_fifty);
				$('#tt_hud').html(obj.solo_tt_hundrd);
				$('#tt_hs').html(obj.solo_tt_hs);
				$('#tt_bt_avg').html(obj.solo_tt_bat_avg);
				$('#tt_str').html(obj.solo_tt_strate);
				$('#tt_bw_ing').html(obj.solo_tt_bow_inngs);
				$('#tt_ovrs').html(obj.solo_tt_overs);
				$('#tt_wik').html(obj.solo_tt_wik);
				$('#tt_bow_best').html(obj.solo_tt_best);
				$('#tt_bow_avg').html(obj.solo_tt_bow_avg);		
				$('#tt_econ').html(obj.solo_tt_econ);				
				//================= T20 VALUES eEND ================================
				
				
	
                             },         
                             error: function( xhr, status, errorThrown ) {
                           
                              toastr.error( "In error" );             
                             }
                       })
	
	
}

</script>
</body>

</html> <?php mysql_close($conn);?>
