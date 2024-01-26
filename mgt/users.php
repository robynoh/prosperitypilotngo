<?php session_start (); 
require_once("../scripts/config.php"); ?>
<?php require_once("../scripts/functions.php"); 

$result  =  ExecuteQuery("SELECT * FROM `account` ");

?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>User(s)</title>
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
       
               <?php  include("tools/admin_header.php");?>
       
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
                                <div class="muted pull-left"><b style="font-size:18px; color:#000">Account(s)</b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                   <div class="table-toolbar">
                                      <a href="new_users"><button class="btn"><i class="icon-plus"></i> Add Account</button></a>
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
                                                <th>User</th>
                                                <th>Email</th>
                                                <th>Account type</th>
                                                
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php while($rows=SqlArray($result)){  ?>
                                            <tr class="gradeU">
                                            
                                                <td><?php echo ucwords($rows['name']);?></td>
                                                <td><?php echo $rows['email'];?></td>
                                                <td><?php echo $rows['acctype'];?></td>
                                                
                                                <td class="center"><div class="btn-group"><a href="edit_account?id=<?php echo ucwords($rows['account_id']);?>"><button class="btn btn-primary"><i class="icon-pencil icon-white"></i> Edit</button></a></div></td>
                                                <td class="center"><div class="btn-group"><a href="delete?acc_id=<?php echo ucwords($rows['account_id']);?>"><button class="btn btn-danger"><i class="icon-remove icon-white"></i> Delete</button></a></div></td>
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
        
        
	 <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	
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