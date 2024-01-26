<?php  require_once("../scripts/config.php"); 
 require_once("../scripts/functions.php");

$message="";
    //if(isset($_GET['id'])){
//
//	$id = $_GET['id'];
//	
//	$result  =  ExecuteQuery("SELECT * FROM `projects`  where project_id='".$id."'");
//	$rows=SqlArray($result);
//

//	}
if(isset($_POST['addCategory'])){

	
	
	 if(empty($_POST['category'])){$message=errorMsg('Please enter Category');}
	else if(empty($_POST['category_detail'])){$message=errorMsg('Please Enter Category detail');}
	
	else{
	
	if(ExecuteQuery("insert into category_listing (category_id,category_name,category_description)values(NULL,'".addslashes($_POST['category'])."','".addslashes($_POST['category_detail'])."')")){
		
		$message=successMsg('Project uploaded successfuly');
		}
	
	
	}
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Categories</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
       <script>
function categoryEdit(){
	var vals=  $('#opt').val();
	window.location='http://localhost/aikieni_rentals/admin/categoryEdit?id='+vals;
	
	}


</script>
    </head>
    
    <body>
         <?php  include("tools/admin_header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                 <?php  include("tools/leftbar.php");?>
                <!--/span-->
                <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <!-- wizard -->
                    <div class="row-fluid section">
                         <!-- block --><!-- /block -->
                    </div>
	            <!-- /wizard -->

                     <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add category</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
                    <form action="" id="form_sample_1" class="form-horizontal" method="post">
						<fieldset>
                        
							
                            <div class="control-group">
  								<label class="control-label">Click to view category<span class="required">*</span></label>
  								<div class="controls">
  									<select class="span6 m-wrap" name="list" id="opt" onChange="categoryEdit();"><option>List of Category</option>
  									<?php echo categoryList(); ?>
  									</select>
  								</div>
  							</div>
                         
					</fieldset></form>
					<form action="" id="form_sample_1" class="form-horizontal" method="post">
						<fieldset>
                        <?php echo $message; ?>
							
                           
                      <p style="color:#F00"> To add New category enter details bellow</p>
  							<div class="control-group">
  								<label class="control-label">category<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="category" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
  							
  							<div class="control-group">
                                          <label class="control-label" for="textarea2">category detail</label>
                                          <div class="controls">
                                            <textarea class="input-xlarge textarea" name="category_detail" placeholder="Enter item description ..." style="width: 600px; height: 200px"></textarea>
                                          </div>
                                        </div>
  							
  							
  							
  							<div class="form-actions">
  								
  								<input class="btn btn-primary" name="addCategory" type="submit" value="Add category">
  							</div>
						</fieldset>
					</form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->


                </div>
            </div>
            <hr>
            <footer>
                <p>&copy; Aikien Rentals Ltd <?php echo date('Y');?></p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

	
    <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	jQuery(document).ready(function() {   
	  /* FormValidation.init();*/
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
    </body>

</html>