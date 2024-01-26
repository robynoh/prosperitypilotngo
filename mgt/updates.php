<?php 
ob_start();
session_start ();
require_once("scripts/config.php"); 
require_once("scripts/functions.php");
require_once('classes/class.php');

$msg="";
$connect =new connection();
$news =new news();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
	
	$result  =  ExecuteQuery("SELECT * FROM `projects`");

 ?>



<?php  
if(isset($_POST['activate'])){
	
	if(empty($_POST['news'])){
		
		$msg=errorMsg("Please select a News to activate.");
	
	}
		else{
			foreach($_POST['news'] as  $key => $val){
		
		ExecuteQuery("update projects set status=1 where project_id='".$_POST['news'][$key]."'");
		header('location: updates');
		}
		}
	
	
	}
	
	if(isset($_POST['de-activate'])){
	
	if(empty($_POST['news'])){
		
		$msg=errorMsg("Please select a News to de-activate.");
	
	}
		else{
			foreach($_POST['news'] as  $key => $val){
		
		ExecuteQuery("update projects set status=0 where project_id='".$_POST['news'][$key]."'");
		header('location: updates');
		}
		}
	
	
	}
	
	
	
	
 ?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Projects</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body style="font-size:12px">
        <div class="navbar navbar-fixed-top">
               <?php  include("tools/admin_header.php");?>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
              
                      <?php  include("tools/leftbar.php");?>
                
                <!--/span-->
                <div class="span9" id="content" style="width:80%">

                    
                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>

                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>

                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>
                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>

                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <div class="row-fluid"><?php echo $msg;?>
                        <!-- block --><form method="post" action="">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="font-weight:bold;color:#000;font-size:14px"> All Projects</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <div class="btn-group">
                                         
                                       <a href="add_projects"  class="btn " >Add Projects </a><i class="icon-plus icon-white"></i>
                                      </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
									  <button name="de-activate" class="btn"> De-activate</button>
									  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn " name="activate"> Activate</button>
                                      <div class="btn-group pull-right"> 
                                         <button data-toggle="dropdown" class="btn dropdown-toggle">Tools <span class="caret"></span></button>
                                         <ul class="dropdown-menu">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                         </ul>
                                      </div>
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                            <th></th>
                                                <th>Updates</th>
                                                <th>Date Published</th>
												
                                                <th>Status</th>
                                             
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php  
								while($rows=SqlArray($result)){?>
                                 
                                 <tr class="gradeU">
                                            <td><input name="news[]" type="checkbox" value="<?php echo $rows['project_id'];?>"></td>
                                                <td><b><?php echo ucwords($rows['title']);?></b><br/>
                                               <?php echo strip_tags( substr( $rows['content'],0,170)) ;?>...</td>
                                                <td><?php echo $rows['time_update'];?></td>
												
                                                <td><?php if($rows['status']==0){?><span class="badge badge-warning pull-right">De-activated</em></span><?php }else{?><span class="badge badge-success pull-right">Activated</span><?php }?></td>
                                                 
                                                <td class="center"><div class="btn-group"><a class="btn btn-primary"  style="color:#fff" href="edit_projects?news_id=<?php echo ucwords($rows['project_id']);?>"><i class="icon-pencil icon-white"></i> Edit</a></div></td>
                                                <td class="center"><div class="btn-group"><a href="delete?news_id=<?php echo $rows['project_id'];?>" class="btn btn-danger" style="color:#fff"><i class="icon-remove icon-white"></i> Delete</a></button></div></td>
                                            </tr>
									 
								<?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block --></form>
                    </div>
                </div>
            </div>
            <hr>
             <?php include('includes/footer.php');?>
        </div>
        <!--/.fluid-container-->
        
         <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
       <!-- <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
-->
	<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
		
		
		function link(){
			
			window.location="http://newgate_new/sims/admin/addNews";
			
		}
        </script>
        

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
       
    </body>

</html>