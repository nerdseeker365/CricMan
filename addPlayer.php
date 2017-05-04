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
				  <div class="col-md-6">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Actor Data</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="addPlayerAjax.php" method="get" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                                        </div>
                                        
                                        
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Age</label>
                                            <input type="number" class="form-control" id="age" value="17" name="age"  placeholder="Age">
                                        </div>
                                       
                                       <div class="form-group">
                                            <label for="exampleInputPassword2">Type</label>
                                                 
                                       
									  
                                      <select class="form-control" id="ptype" value="SOLO" name="ptype" tabindex="-1" aria-hidden="true" id="ptype">
                                          <option value="SOLO">SOLO Mode</option>                                         
                                          <option value="VS">V/S Mode</option>
                                      </select>
									  
                                  </div>
								  
                                        </div>
                                       
                                       
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
				 
				 
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

 <?php include('js.php');  ?> 


</body>

</html> <?php mysql_close($conn);?>
