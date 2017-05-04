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
				 <div class="directory-info-row">
              <div class="row">
              <div class="col-md-3 col-sm-3">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="media">
                              <a class="pull-left" href="solomode.php">
                                  <img class="thumb media-object" src="pic/solo.png" alt="">
                              </a>
							   
                          </div><footer class="cd-pricing-footer"><a class="cd-select" href="solomode.php">SOLO Mode</a></footer>
						   
                      </div>
                  </div>
              </div>

              <div class="col-md-3 col-sm-3">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="media">
                              <a class="pull-left" href="vsmode.php">
                                  <img class="thumb media-object" src="pic/vs.png" alt="">
                              </a>
								 
                          </div>
						  <footer class="cd-pricing-footer"><a class="cd-select" href="vsmode.php">V/S Mode</a></h3></button>
                      </div>
                  </div>
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
