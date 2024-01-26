<?php 
session_start();
require_once("../scripts/config.php"); ?>
<?php require_once("../scripts/functions.php");
require_once('../classes/class.php');

$connect =new connection();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
 ?>

<?php
$message="";
if(isset($_POST['add'])){
	/*$enc_password = encrypt_decrypt ($_POST['password'], true);*/
	 if(empty($_POST['title']))$message=errorMsg('Please enter topic');
	 if(empty($_POST['newsContent']))$message=errorMsg('Please enter update content');
	  
	else{
		
		
	$date=date('y/m/d');
	
		
		
	$query="INSERT INTO `news_update` (`topic`,`description`,`update_date`,`school`)
VALUES ('".$_POST['title']."','".$_POST['newsContent']."','".$date."','".$_POST['school']."')";
	$connect->insertion($query);	
		
	$message=successMsg('you have successfully added an update ');	
		
		}	
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Add item</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
       
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
                                <div class="muted pull-left" style="font-weight:bold;color:#000;font-size:14px">Add News</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post">
                    <input type="hidden" name="MAX_FILE_SIZE"/>
						<fieldset>
							<?php echo $message;?>
                            <div class="control-group">
  								<label class="control-label" style="font-size:12px">Title<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="title" data-required="1" class="span6 m-wrap"/>
  								</div>
  							</div>
                            
  							<div class="span12" id="content">
		                    <div class="row-fluid">
		                        <!-- block -->
		                          <div class="block-content collapse in">
		                               <textarea name="newsContent" id="ckeditor_full">enter detail here</textarea>
		                            </div>
		                        <!-- /block -->
		                    </div>
		                </div>
  							
                            
  							
  							<div class="control-group">
                                          <label class="control-label" for="" style="font-size:12px">Choose School</label>
                                          <div class="controls">
                                            <select name="school">
											<option>Secondary
											</option>
											<option>Primary
											</option>
											</select>
                                            
                                          </div>
                                        </div>
                            
                           <!--- <div class="control-group">
  								<label class="control-label"> Authur <span class="required">*</span></label>
  								<div class="controls">
  									<input name="author" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>-->
                            
  							<!---<div class="control-group">
                                          <label class="control-label" for="fileInput">Photo Caption<span class="required">*</span></label>
                                          <div class="controls">
                                            <input class="input-file uniform_on" id="fileInput" type="file" name="newsPhoto">
                                          </div>
                                        </div>-->
  							
                            
  							
  							<div class="form-actions">
  								<button type="submit" name="add" class="btn btn-primary">Add </button>
  								<button type="button" class="btn">Cancel</button>
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
        <script src="vendors/ckeditor/ckeditor.js"></script>
		<script src="vendors/ckeditor/adapters/jquery.js"></script>

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
        
         <script>
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();

            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });

        // Tiny MCE
        tinymce.init({
		    selector: "#tinymce_basic",
		    plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});

		// Tiny MCE
        tinymce.init({
		    selector: "#tinymce_full",
		    plugins: [
		        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    templates: [
		        {title: 'Test template 1', content: 'Test 1'},
		        {title: 'Test template 2', content: 'Test 2'}
		    ]
		});

        </script>
    </body>

</html>