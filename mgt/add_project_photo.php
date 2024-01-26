<?php 
session_start ();
require_once("../scripts/config.php"); ?>
<?php require_once("../scripts/functions.php");
require_once("../classes/class.php"); ?>

<?php
$connect=new country_particular();
$message="";
if(isset($_POST['add'])){
	if($_FILES['fileField']['name']=="") $message=errorMsg('select image to upload');
	
	
	
	else{
$Filename = $_FILES['fileField']['name'];
$type = $_FILES['fileField']['type'];
$size = $_FILES['fileField']['size'];
$file_cv = random(20);
$ext_cv = substr(strrchr($_FILES['fileField']['name'], "."), 1); 
	
if($size > 1000000){
		$message=errorMsg('Image too large');
	}
	if(($ext_cv =="jpeg") || ($ext_cv =="jpg")||($ext_cv =="JPG") || ($ext_cv =="JPEG")||($ext_cv =="png") ||($ext_cv =="PNG")|| ($ext_cv =="gif")){
	$name = random(20).md5($_FILES['fileField']['tmp_name']);
	$ext = substr(strrchr($_FILES['fileField']['name'], "."), 1);
	$pass = "project_photos/".$name.".$ext";
	move_uploaded_file($_FILES['fileField']['tmp_name'],$pass);
	$image = $name.".$ext";

	if(ExecuteQuery("insert into project_photo (photo_id,filename,caption,project_id)values(NULL,'".$image."','".addslashes($_POST['caption'])."','".$_GET['prjtid']."')")){
		$message=successMsg('Upload successful. you have uploaded a total of '.$connect->get_project_count($_GET['prjtid']).' photo(s) for this project ');
		
		}
	 }
	 else{
		 $message=errorMsg('Invalid image Format');
		 }

	
	
}
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Photo Gallery</title>
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
    </head>
    
    <body style="font-size:12px">
         <?php  include("tools/admin_header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                 <?php  include("tools/leftbar.php");?>
                <!--/span-->
                <div class="span9" id="content" style="width:80%">
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
                                <div class="muted pull-left" style="font-weight:bold;color:#000;font-size:14px">Add Photo</div>
                            </div>
                            <div class="block-content collapse in">
							      <div class="span12">
								  <div style="padding-left:100px;padding-bottom:20px;font-weight:bold;font-size:14px"><?php  echo ucwords($connect->get_single_community($_GET['comid']));?> >> <?php  echo ucwords($connect->get_com_project_name($_GET['prjtid']));?></div>
                          
					<!-- BEGIN FORM-->
					<form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post" >
						<fieldset>
						<div style="font-size:14px">	<?php echo $message;?></div>
                            
					 
  							
  							<div class="control-group">
                                          <label class="control-label" for="textarea2" style="font-size:12px">Caption </label>
                                          <div class="controls">
                                            <textarea name="caption" class="input-xlarge textarea" placeholder="Enter note about photo ..." style="width: 600px; height: 200px"></textarea>
                                          </div>
                                        </div>
  							
  							
  							<div class="control-group">
                                          <label class="control-label" for="fileInput" style="font-size:12px">Upload Photo</label>
                                          <div class="controls">
                                            <input class="input-file uniform_on"  type="file" name="fileField">
                                          </div>
                                        </div>
  							
  							
  							<div class="form-actions">
  								<button name="add" type="submit" class="btn btn-primary">Add Photo</button>
  								<a href="projects" class="btn">Back</a>
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
            <?php include('includes/footer.php');?>
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

        <!--<script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>-->

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