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
$pid = $_GET['pid'];
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
			<div class="row">
				 <!-- ********************** CRIC DIV START *************************-->
				  <div class="col-md-12">
				  
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
								 
								  
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  
                                 <div id="battab" class="tab-pane active">
								           <form action=""  name="statsform" id="statsform">   
		  
                                      TYPE<select class="" id="ptype" value="odi" name="mtype" tabindex="-1" aria-hidden="true" id="mtype">
                                          <option value="odi">ODI</option>                                         
                                          <option value="test">TEST</option>
										  <option value="tt">T-20</option>
										  <option value="fc">F.C</option>
                                      </select> 										   
                                            MAT : <input type="number" id="mat" name="mat" value="0"placeholder=""><br/>
											ING : <input type="number" id="bat_ing" name="bat_ing" value="0"placeholder=""><br/>
											BALS : <input type="number" id="balls" name="balls" value="0"placeholder=""><br/>
											RUNS : <input type="number" id="runs" name="runs" value="0"placeholder=""><br/>
											NO : <input type="number" id="nos" name="nos" value="0"placeholder=""><br/>
											50 : <input type="number" id="fif" name="fif" value="0"placeholder=""><br/>
											100 : <input type="number" id="hun" name="hun" value="0"placeholder=""><br/>
											BEST : <input type="text" id="bat_bst" name="bat_bst" value="0"placeholder="">								  
								  </div><!-- Batting Panel End -->
								  
                                  <div id="bowtab" class="tab-pane ">
								  ING : <input type="number" id="bow_ing" name="bow_ing" value="0"placeholder=""><br/>
											OVRS : <input type="number" id="ovrs" name="ovrs" value="0"placeholder=""><br/>
											B.Runs : <input type="number" id="bow_runs" name="bow_runs" value="0"placeholder=""><br/>
											WIK : <input type="number" id="wik" name="wik" value="0"placeholder=""><br/>
											3W : <input type="number" id="tw" name="tw" value="0"placeholder=""><br/>
											5W : <input type="number" id="fw" name="fw" value="0"placeholder=""><br/>
											BEST: <input type="text" id="bow_bst" name="bow_bst" placeholder="3-56"><br/>
											
							
									  PID : <input type="text" id="pid" name="pid" value="<?php echo $pid?>" placeholder="">	
									  
									   <input type="button" name="saveBtn" id="saveBtn"  value="Save" class="btn btn-success btn-block" onclick="addstatsAjax();">
                                    </form>  
								  </div><!-- Bowling Panel End -->
								 
                              </div> 
                          </div>
                      </section>
				  
				 
				<!-- ********************** CRIC DIV END *************************-->
				 

			</div>
		</div>
		<!-- Row -->
 
	</div>
	<!-- Main Wrapper -->
	
	</div>
	<!-- Page Inner --> <!-- Page Inner --> </main>
	<!-- Page Content -->

	<div class="cd-overlay"></div>
	
	 <script>	
	//toastr.error("Select Section", "Error Info");
	//toastr.success("SOk"," Ok "); 
	toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": false,
  "positionClass": "toast-top-full-width",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "1",
  "hideDuration": "5000",
  "timeOut": "10000",
  "extendedTimeOut": "5000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}

 
 
	 
	function addstatsAjax(){
		
		$('#saveBtn').hide();
		   

	       	 var str = $("#statsform").serialize();	
	    	 //alert('---'+str);
	    	 $.ajax({
	   		     type: "POST",
	   		      url: "addsolostatsAjax.php",
	   		      data: str,
	   	          success: function( data ) {
	   	        	 		 
	       			
	       			toastr.success("<h3><b> Data Saved</b></h3>");
	       			//toastr.error("<h3><b>"+e+"</b></h3>"+sl);
	       			             
	   					 
	   	           },	          
	   	           error: function( xhr, status, errorThrown ) {
	   	        	 
	   	        	   toastr.error( "In error" );	              
	   	           }
	   		    })

 
	        
		 
		}

//----------------------------------------------------
	</script>
	
	
	
	
	
	
	
	
	
	
	

 <?php include('js.php');  ?> 


</body>

</html> <?php mysql_close($conn);?>
