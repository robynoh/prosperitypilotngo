<?php
if(isset($_POST['submit'])){
	$date=date('y-m-d');
	reset ($_POST);
	while (list ($key, $val) = each ($_POST)) {
		if ($val == "") $val = "NULL";
		$write_project[$key] = (get_magic_quotes_gpc()) ? $val : addslashes($val);
		if ($val == "NULL")
			$_SESSION[$key] = NULL;
		else
			$_SESSION[$key] = $val;
			}
		if(ExecuteQuery("insert into write_project_detail (topic,cat_id,school,sub_date,email,phone,name,note,style,submit)values('".$_SESSION['topic']."','".$_POST['cat_id']."','".$_SESSION['school']."','".$_SESSION['time']."','".$_SESSION['email']."','".$_SESSION['phone']."','".$_SESSION['name']."','".$_SESSION['description']."','1','$date')")){
	
	
	$message=successMsg(ucwords($_SESSION['name']).' ' .'your Information  have been submitted succesfully. We will contact you via your phone number within 24 hour');
	}
	
	}
			

if(isset($_POST['sign_up'])){
	$date=date('y-m-d');
	reset ($_POST);
	while (list ($key, $val) = each ($_POST)) {
		if ($val == "") $val = "NULL";
		$sign[$key] = addslashes($val);
		if ($val == "NULL")
			$_SESSION[$key] = NULL;
		else
			$_SESSION[$key] = $val;
	
	
	
  			}
			if($_SESSION['password'] !=$_SESSION['cpassword']){
				$message=errorMsg('passwords are not equal');
				
				}
			else{
				
				$mail_check=ExecuteQuery("select * from user_login where email='".$sign['email']."'");
				$mail_num=NumOfRows($mail_check);
				
				if($mail_num>0){
					$message=errorMsg('Email already exist');
					
					}
				else{
				
	$harshpassword=md5($sign['password']);

	if(ExecuteQuery("insert into user_login (username,email,password)values('".$sign['username']."','".$sign['email']."','".$harshpassword."')")){
	$id=mysqli_insert_id($connection);

	//inserting into profile table/////////////////////////
	ExecuteQuery("insert into `profile` (user_id,username,email,description,date)values('".$id."','".$sign['username']."','".$sign['email']."','".addslashes($sign['description'])."','".$date."')");
	
	// Send confirmation mail
$enc_txt = encrypt_decrypt ("user_id='".$id."'", true);
$Email_message='';
$to = $sign['email'];
$subject = 'New message from: Project and thesis';
$Email_message .='<b>'.ucwords( $sign['username']).'</b>';
$Email_message .= '\n';
$Email_message = "Thank you for registering with Project and thesis<br>\n  <br>\n In order to activate your account please click here:<br>\n
<center><a href=\"http://www.projectandthesis.com/confirmation?i=$enc_txt &web=0\">Activation</a></center> <br>\n
Thank you for taking the time to register with project and thesis Website. <br><br>\n\n Please do not reply to this email as the mailbox isn't monitored.<br><br><br>\n\n\n<center> - The Webmaster Project and Thesis.com - </center><br>\n";

$headers = 'From: webmaster@projectandthesis.com' . "\r\n";
$headers.= "MIME-version: 1.0\n";
$headers.= "Content-type: text/html; charset= iso-8859-1\n";
	if(mail($to, $subject, $Email_message, $headers)){ 
	
	$message=successMsg('Your account have been created succesfully and a message has been sent to your mail box for verification');
	
	//reset the post variable
	reset ($sign);
	while (list ($key, $val) = each ($sign)) {
		if (isset($_SESSION[$key])) unset($_SESSION[$key]);
	}
	reset ($_POST);
		}
	
	}
			}
}			
			
			
}
	?>