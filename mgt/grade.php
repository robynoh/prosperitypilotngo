<?php 
session_start();
require_once("../scripts/config.php"); ?>
<?php require_once("../scripts/functions.php"); 
require_once("../classes/class.php"); 
$classdetail=new country_particular();

$result  =  ExecuteQuery("SELECT * FROM `grade`");

?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>SIMS | Subjects</title>
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
    
    <body>
        <div class="navbar navbar-fixed-top">
               <?php  include("tools/admin_header.php");?>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
              
                      <?php  include("tools/leftbar.php");?>
                
                <!--/span-->
                <div class="span9" id="content">

                    
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

                     <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><b style="font-size:18px; color:#000">Grade Point(s)</b></div>
                            </div>
                            <div class="block-content collapse in"><div class="span12">
                                   <div class="table-toolbar">
                                     <a href="add_grade"><button class="btn"><i class="icon-plus"></i> Add Grade point</button></a>
                                
                                      
                                   </div>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                                <th width="17%">Name</th>
												<th width="17%">From</th>
												<th width="17%">to</th>
                                                <th width="25%">Grade Point</th>
												<th width="25%">View</th>
                                                <th width="25%">Delete</th>
       
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php while($rows=SqlArray($result)){  ?>
                                            <tr class="gradeU">
                                            
                                                <td><?php echo $rows['name'];?> </td>
                                               

                                               <td><?php echo $rows['mark_from'];?></td>
                                                
                                                <td><?php echo $rows['mark_upto'];?></td>
												<td><?php echo $rows['grade_point'];?></td>
												<td><a href="edit_grade?grade_id=<?php echo $rows['grade_id'];?>"><button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button></a></td>
                                               
                                                
                                                <td class="center"><div class="btn-group"><a href="delete?grade_id=<?php echo $rows['grade_id'];?>"><button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button></a></div></td>
                                            </tr><?php ; }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
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
        </script>
        

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        <script>
        $(function() {
            
        });
        </script>
    </body>

</html>