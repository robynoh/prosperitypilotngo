<?php 
ob_start();
session_start();
require_once("scripts/config.php");
require_once("scripts/functions.php");
require_once('classes/class.php');
$message ="";

$connect =new connection(); 
$connect->connectTodatabase();
$connect->selectDatabase();


if(isset($_POST['sign'])){	
	$_SESSION['LOGGEDIN'] = false;
	
	$username = addslashes($_POST['email']);
	
	$hashPassword = encrypt_decrypt ($_POST['password'], true);
	
	
	if($hashPassword == "" || $username == "") {$message =errorMsg( "Please enter name or password!");
	}
	else{
	$checkquery="select name,email, account_id, acctype from account where email='$username' and password = '$hashPassword'" ;
	$checkresult=$connect->retrieve($checkquery);
	$rows2=$connect->arrayFetch($checkresult);
	//$result = ExecuteQuery("select name,email, account_id, acctype from accounts where email='$username' and password = '$hashPassword'")or die(mysql_error());
	$countresult=$connect->numRows($checkresult);
	if($countresult > 0){
		
	$rows = SqlArray($result);
	$_SESSION['loggedin'] = true;
	$_SESSION['user'] = $rows['name'];
	$_SESSION['email'] = $rows['email'];
	$_SESSION['acctype'] = $rows['acctype'];
	$_SESSION['id'] = $rows['account_id'];
	
	header('location:./dashboard');
	 exit();
	
	}
	else{
	$message = "Invalid Login!";
		}
	}
}
ob_end_flush();

?><!DOCTYPE html>
<html>
  <head>
    <title>Information Management System Login</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   <!-- <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>-->
  </head>
  <body id="login">
  
    <div class="container">

      <form class="form-signin"  action="" method="post">
	  <?php echo $message; ?>
        <h2 class="form-signin-heading" style="font-size:16px;text-align:center"><u> PPI</u></h2>
		<p style="font-size:14px;text-align:left;color:#ff0000;font-weight:bold">Sign in</p>
        <input type="text" name="email" class="input-block-level" placeholder="Username">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-large btn-success" type="submit" name="sign">Sign in</button>
      </form>

    </div> <!-- /container -->
    <script src="vendors/jquery-1.9.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>