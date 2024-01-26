<?php session_start (); 
require_once("../scripts/config.php"); ?>
<?php require_once("../scripts/functions.php"); ?>

<?php
$message="";
if(isset($_GET['id'])){
	
	$resultEdit=ExecuteQuery("select * from account where account_id='".$_GET['id']."'");
		
		$rows_Edit = SqlArray($resultEdit);
		
	
	$decrypt_password=encrypt_decrypt ($rows_Edit['password'], false);
	
}
?>

<?php 
if(isset($_POST['update'])){
	
$enc_password = encrypt_decrypt ($_POST['password'], true);

if(empty($_POST['name']))$message=errorMsg('Please enter username');
	  else if(empty($_POST['email']))$message=errorMsg('Please enter email');

else if(empty($_POST['password']))$message=errorMsg('Please enter password');
else if(empty($_POST['acctype']))$message=errorMsg('Please enter account type');

else if($_POST['password'] != $_POST['cpassword'])$message=errorMsg('passwords not equal');
else{
	
	
	(ExecuteQuery("update accounts set name='".addslashes($_POST['name'])."', email='".addslashes($_POST['email'])."', password='".$enc_password."', acctype ='".$_POST['acctype']."' where account_id='".$rows_Edit['account_id']."'"));
	
	header("location: ".$_SERVER['PHP_SELF']."?id=".$_GET['id']."&&confirmation=updated");
		
		
}
}
?>
<?php
if(isset($_GET['confirmation'])&& $_GET['confirmation']="updated"){
	$message=successMsg('item updated succesfully');
	
	$resultEdit=ExecuteQuery("select * from accounts where account_id='".$_GET['id']."'");
		
		$rows_Edit = SqlArray($resultEdit);
		
		$message=successMsg(' information updated successfuly');
	}
	?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Add user</title>
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
                                <div class="muted pull-left">Add User(s)</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post">
						<fieldset>
							<?php echo $message;?>
                            
  							<div class="control-group">
  								<label class="control-label">Name<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="name" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['name'];?>"/>
  								</div>
  							</div>
  							
  							
  							<div class="control-group">
  								<label class="control-label">Email<span class="required">*</span></label>
  								<div class="controls">
  									<input name="email" type="text" class="span6 m-wrap" value="<?php echo $rows_Edit['email'];?>"/>
  								</div>
  							</div>
                            <div class="control-group">
  								<label class="control-label">Password<span class="required">*</span></label>
  								<div class="controls">
  									<input name="password" type="text" class="span6 m-wrap" value="<?php echo $decrypt_password;?>"/>
  								</div>
  							</div>
  							
  							<div class="control-group">
  								<label class="control-label">Confirm Password<span class="required">*</span></label>
  								<div class="controls">
  									<input name="cpassword" type="text" class="span6 m-wrap"/>
  								</div>
  							</div>
                            <div class="control-group">
  								<label class="control-label">Choose account type<span class="required">*</span></label>
  								<div class="controls">
  									<select class="span6 m-wrap" id="opt" name="acctype"><option><?php echo $rows_Edit['acctype'];?></option>
                                    <option>User</option>
                                    <option>admin</option>
  									
  									</select>
  								</div>
  							</div>
  							<div class="form-actions">
  								<button type="submit" name="update" class="btn btn-primary">Update account</button>
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