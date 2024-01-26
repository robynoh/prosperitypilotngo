<?php session_start();

require_once("scripts/config.php"); ?>
<?php require_once("scripts/functions.php"); 
?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
	 <style>
  #container2{
	 background:#fff ;
	 margin-top:-40px;
	 padding:10px;
	 height:100px
	  
  }
  .logo_student_account{
	  float:left;
	  width:120px;
	  
	  
  }
  .tag-message{
	  padding-top:40px;
	  font-weight:bold;
	  color:#33416E;
	  font-size:23px
	  
	  
  }
  </style>
        <title> Information Management System| Dashboard </title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body>
        <?php  include("tools/admin_header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                
                <?php  include("tools/leftbar.php");?>
                <!--/span-->
				
				
				<div class="span9" id="content">
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            
                            <div class="block-content collapse in">
                                <div class="span12"><img src="images/dashboard_img.png" />
								</div>
								</div>
								</div>
				</div>
				</div>
				
				
				
               </div>
            </div>
            <hr>
			<?php include('includes/footer.php'); ?>
            
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>