<!DOCTYPE html>
<html>

<head>
<?php
include 'sessionCheck.php'; 
include 'db.php';
session_start();
error_reporting(E_ERROR);
$uid = $_SESSION['s_uid'];

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
                                                    		 
                                                    			$sql = "select t.play_id, t.play_name from vs_fc t";
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
                                  <th>INT</th>
                                  <th>GLY</th>
                                  <th>F.C</th>
								  
                              </tr>
                              </thead>
                              
							  
							  
							  <tbody>
                             

							 <tr>
                                  <th scope="row">MAT</th>
                                  <td id="in_mat"></td>
                                  <td id="gl_mat"></td>
                                  <td id="fc_mat"></td>
                                  
                              </tr>                              
                     
							 <tr>
                                  <th scope="row">ING</th>
								  <td id="in_ing"></td>
                                  <td id="gl_ing"></td>
                                  <td id="fc_ing"></td>
                                  
                             </tr>    


							 <tr>
                                  <th scope="row">RUNS</th>
                                  <td id="in_run"></td>
                                  <td id="gl_run"></td>
                                  <td id="fc_run"></td>
                                  
                              </tr>                              
                     							 
                              
							  
							 <tr>
                                  <th scope="row">25</th>
                              	  <td id="in_fif"></td>
                                  <td id="gl_fif"></td>
                                  <td id="fc_fif"></td>
                                 
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">50</th>
								  <td id="in_hud"></td>
                                  <td id="gl_hud"></td>
                                  <td id="fc_hud"></td>
                                  
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">H/S</th>
								  <td id="in_hs"></td>
                                  <td id="gl_hs"></td>
                                  <td id="fc_hs"></td>
                                 
                              </tr>   
							  
							  <tr>
                                  <th scope="row">AVG</th>
								  <td id="in_bt_avg"></td>
                                  <td id="gl_bt_avg"></td>
                                  <td id="fc_bt_avg"></td>
                                 
                              </tr>   
							  
							  
							  <tr>
                                  <th scope="row">NO'S</th>
								  <td id="in_nos"></td>
                                  <td id="gl_nos"></td>
                                  <td id="fc_nos"></td>
                                  
                              </tr>   
							  
							  <tr>
                                  <th scope="row">STR</th>
								  <td id="in_str"></td>
                                  <td id="gl_str"></td>
                                  <td id="fc_str"></td>
                                 
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
                                   <th>INT</th>
                                  <th>GLY</th>
                                  <th>F.C</th>
                              </tr>
                              </thead>
                              
							  
							  
							  <tbody>
                             

							 <tr>
                                  <th scope="row">MAT</th>
                                  <td id="in_bmat"></td>
                                  <td id="gl_bmat"></td>
                                  <td id="fc_bmat"></td>
                                  
                              </tr>                              
                     
							 <tr>
                                  <th scope="row">ING</th>
								  <td id="in_bw_ing"></td>
                                  <td id="gl_bw_ing"></td>
                                  <td id="fc_bw_ing"></td>
                                  
                             </tr>    


							 <tr>
                                  <th scope="row">OVR</th>
								  <td id="in_ovrs"></td>
                                  <td id="gl_ovrs"></td>
                                  <td id="fc_ovrs"></td>
                                  
                              </tr>                              
                     							 
                              
							  
							 <tr>
                                  <th scope="row">WIK</th>
								  <td id="in_wik"></td>
                                  <td id="gl_wik"></td>
                                  <td id="fc_wik"></td>
                                  
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">BST</th>
								  <td id="in_bow_best"></td>
                                  <td id="gl_bow_best"></td>
                                  <td id="fc_bow_best"></td>
                                  
                              </tr>                              
                     
							  
							  
							 <tr>
                                  <th scope="row">AVG</th>
								  <td id="in_bow_avg"></td>
                                  <td id="gl_bow_avg"></td>
                                  <td id="fc_bow_avg"></td>
                                 
                              </tr>                              
                     
							   <tr>
                                  <th scope="row">ECON</th>
								  <td id="in_econ"></td>
                                  <td id="gl_econ"></td>
                                  <td id="fc_econ"></td>
                                
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
 
  var sjlink = "vsmodeAllAjax.php?pid="+pid;
					 $("#curr").text(sjlink);
                    $.ajax({
                        type: "GET",
                         url: sjlink,                         
                            success: function( data ) {
                           var obj = jQuery.parseJSON(data);
                            //alert(data)    
						  //$('#in_mat').html(obj.vs_fc_mat);	
                          //var _c = obj.c;
 	                //============================fc data start ====================
				$('#fc_mat').html(obj.vs_fc_mat);				
				$('#fc_bmat').html(obj.vs_fc_mat);
				$('#fc_ing').html(obj.vs_fc_bat_inngs);
				$('#fc_nos').html(obj.vs_fc_nos);
				$('#fc_run').html(obj.vs_fc_runs);
				$('#fc_fif').html(obj.vs_fc_fifty);
				$('#fc_hud').html(obj.vs_fc_hundrd);
				$('#fc_hs').html(obj.vs_fc_hs);
				$('#fc_bt_avg').html(obj.vs_fc_bat_avg);
				$('#fc_str').html(obj.vs_fc_strate);
				$('#fc_bw_ing').html(obj.vs_fc_bow_inngs);
				$('#fc_ovrs').html(obj.vs_fc_overs);
				$('#fc_wik').html(obj.vs_fc_wik);
				$('#fc_bow_best').html(obj.vs_fc_best);
				$('#fc_bow_avg').html(obj.vs_fc_bow_avg);
				$('#fc_econ').html(obj.vs_fc_econ);					
					//======================= fc data end ============================
					
					
					//================= TEST VALUES START ================================				
				$('#gl_mat').html(obj.vs_gully_mat);				
				$('#gl_bmat').html(obj.vs_gully_mat);
				$('#gl_ing').html(obj.vs_gully_bat_inngs);
				$('#gl_nos').html(obj.vs_gully_nos);
				$('#gl_run').html(obj.vs_gully_runs);
				$('#gl_fif').html(obj.vs_gully_fifty);
				$('#gl_hud').html(obj.vs_gully_hundrd);
				$('#gl_hs').html(obj.vs_gully_hs);
				$('#gl_bt_avg').html(obj.vs_gully_bat_avg);
				$('#gl_str').html(obj.vs_gully_strate);
				$('#gl_bw_ing').html(obj.vs_gully_bow_inngs);
				$('#gl_ovrs').html(obj.vs_gully_overs);
				$('#gl_wik').html(obj.vs_gully_wik);
				$('#gl_bow_best').html(obj.vs_gully_best);
				$('#gl_bow_avg').html(obj.vs_gully_bow_avg);
				$('#gl_econ').html(obj.vs_gully_econ);						
				//================= TEST VALUES eEND ================================
				
							
				
				
				//================= odi VALUES START ================================				
				$('#in_mat').html(obj.vs_int_mat);				
				$('#in_bmat').html(obj.vs_int_mat);
				$('#in_ing').html(obj.vs_int_bat_inngs);
				$('#in_nos').html(obj.vs_int_nos);
				$('#in_run').html(obj.vs_int_runs);
				$('#in_fif').html(obj.vs_int_fifty);
				$('#in_hud').html(obj.vs_int_hundrd);
				$('#in_hs').html(obj.vs_int_hs);
				$('#in_bt_avg').html(obj.vs_int_bat_avg);
				$('#in_str').html(obj.vs_int_strate);
				$('#in_bw_ing').html(obj.vs_int_bow_inngs);
				$('#in_ovrs').html(obj.vs_int_overs);
				$('#in_wik').html(obj.vs_int_wik);
				$('#in_bow_best').html(obj.vs_int_best);
				$('#in_bow_avg').html(obj.vs_int_bow_avg);	
				$('#in_econ').html(obj.vs_int_econ);					
				//================= iodi VALUES eEND ================================
				
								
				
				
			 
	
                             },         
                             error: function( xhr, status, errorThrown ) {
                           
                              toastr.error( "In error" );             
                             }
                       })
	
	
}

</script>
</body>

</html> <?php mysql_close($conn);?>
