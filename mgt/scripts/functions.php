
<?php
function ExecuteQuery($query){
	global $connection;
	$result = mysqli_query($connection,$query);
	return $result;
}
function SqlArray($result){
	$rows = mysqli_fetch_array($result);
	return $rows;
}
function NumOfRows($result){
	global $connection;
	$num = mysqli_num_rows($result);
	return $num;
}
function RowsAffected($result){
	$affectedRows = mysqli_affected_rows($result);
	return $affectedRows;
}
function Commit(){
	global $connection;
	mysqli_commit($connection);
}
function Rollback(){
	global $connection;
	mysqli_rollback($connection);
}
function EscapeStrings($string){
	global $connection;
	$val = mysqli_real_escape_string($connection,$string);
	return $val;
}
function categoryList(){
	$category="";
	$result_category  =  ExecuteQuery("select * from category_listing ");
	while($rows_category = SqlArray($result_category)){
		$category.='<option value="'.$rows_category['category_id'].'">'. $rows_category['category_name'].'</option>';
	
		
		}
		return $category;
	}
	
	function showmembersName($val){
	$category="";
	$result_name  =  ExecuteQuery("select * from members where member_id='".$val."' ");
	while($rows_name = SqlArray($result_name)){
		$category.=$rows_name['fullname'];
	
		
		}
		return $category;
	}
	
function CheckDbEmail($email,$table,$id){
	$result  =  ExecuteQuery("select * from $table  where email = '".$email."'");
	$rows = SqlArray($result);
	if(($rows['user_id'] == $id) || (NumofRows($result) == 0)){
		return true;
	}
	else{
		return false;
	}
}
function CleanDescription($val,$num=''){
	$stringVal = stripslashes($val);
	$stringVal = strip_tags($val);
	
	$stringVal = substr($stringVal,0,$num);
	
	return $stringVal;

}

function get_country(){
	$output='';
	$result_country= ExecuteQuery("select * from countries  ");
	while($rows_country=SqlArray($result_country)){
		$output.='<option value="'.$rows_country['country_id'].'">'. $rows_country['country_name'].'</option>';
		}
		
		return $output;
	}
	
	function getStates(){
	$output="";
	$result_states= ExecuteQuery("select * from states  ");
	while($rows_states=SqlArray($result_states)){
		$output.='<option value="'.$rows_states['states_id'].'">'. ucwords(strtolower($rows_states['states_name'])).'</option>';
		}
		
		return $output;
	}
function get_province($id){
	$output="";
	$result_lgas= ExecuteQuery("select * from lgas  ");
	while($rows_lgas=SqlArray($result_lgas)){
		$output.='<option value="'.$rows_lgas['lga_id'].'">'. $rows_lgas['lga_name'].'</option>';
		}
		
		return $output;
	}
	
	function showArt(){
	$output="";
	$result_albums= ExecuteQuery("select * from albums  ");
	while($rows_albums=SqlArray($result_albums)){
		$output.='<option value="'.$rows_albums['album_id'].'">'. $rows_albums['artist_name'].'</option>';
		}
		
		return $output;
	}
$title_link=" ";

$create_account= array('topic'=>'','name'=>'','email'=>'','password'=>'','phone'=>'','sex'=>'');
$write_project= array('topic'=>'','school'=>'','time'=>'','email'=>'','name'=>'','phone'=>'','description'=>'');

$sign= array('username'=>'','email'=>'','password'=>'','cpassword'=>'','description'=>'','sex'=>'');

$profile= array('contact_person'=>'','telephone'=>'','website'=>'','address'=>'','country'=>'','state'=>'','description'=>'');

$checkout=array('D_name'=>'','username'=>'','password'=>'','cpassword'=>'','company_name'=>'','email'=>'','title'=>'','f_name'=>'','m_name'=>'','l_name'=>'','address'=>'','state'=>'','province'=>'','phone'=>'','message'=>'','timeofOccassion'=>'','timetoReturn'=>'');
$member_detail=array('name'=>'','surname'=>'','email'=>'','phone'=>'','bank'=>'','account_holder'=>'','account_no'=>'','captcha'=>'','password'=>'','cpassword'=>'');

function successMsg($message){
	
	$msg='<div class="alert alert-success">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Success!</strong> <p>  '.$message.'</p>
									</div>';
									
									return $msg;
	
}
function warningMsg($message){
	$msg='<div class="successMsg">
		<p> <i class="fa fa-warning-sign"></i> '.$message.'</p>
			</div>';
	return $msg;
}
function errorMsg($message){
	$msg='<div class="alert alert-error">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Error!</strong> <p> '.$message.'</p>
									</div>';
	return $msg;
}

function messageBox($message){
	$box = '<div style="text-align:left" class="" >'.$message.'</div>';
									return $box;
}
function ErrorCall($errors = array()){
	$msg ='<p style="color:#ff0000"> <img src="img/delete-icon.png" width="24" height="23"> Please attend to the following error(s) before proceeding to create account:</p>
		<ol style="color:#ff0000">';
		foreach($errors as $error){
			
			$msg .="<li>".$error."</li>";
			
		}
		$msg .="</ol>";
		$msg = messageBox($msg);
		return $msg;
}

function smcf_validate_email($email) {
	$at = strrpos($email, "@");

	// Make sure the at (@) sybmol exists and  
	// it is not the first or last character
	if ($at && ($at < 1 || ($at + 1) == strlen($email)))
		return false;

	// Make sure there aren't multiple periods together
	if (preg_match("/(\.{2,})/", $email))
		return false;

	// Break up the local and domain portions
	$local = substr($email, 0, $at);
	$domain = substr($email, $at + 1);


	// Check lengths
	$locLen = strlen($local);
	$domLen = strlen($domain);
	if ($locLen < 1 || $locLen > 64 || $domLen < 4 || $domLen > 255)
		return false;

	// Make sure local and domain don't start with or end with a period
	if (preg_match("/(^\.|\.$)/", $local) || preg_match("/(^\.|\.$)/", $domain))
		return false;

	// Check for quoted-string addresses
	// Since almost anything is allowed in a quoted-string address,
	// we're just going to let them go through
	if (!preg_match('/^"(.+)"$/', $local)) {
		// It's a dot-string address...check for valid characters
		if (!preg_match('/^[-a-zA-Z0-9!#$%*\/?|^{}`~&\'+=_\.]*$/', $local))
			return false;
	}

	// Make sure domain contains only valid characters and at least one period
	if (!preg_match("/^[-a-zA-Z0-9\.]*$/", $domain) || !strpos($domain, "."))
		return false;	

	return true;
}

function encrypt_decrypt ($data, $encrypt) {
    if ($encrypt == true) {
        $output = base64_encode (convert_uuencode ($data));
    } else {
        $output = convert_uudecode (base64_decode ($data));
    }
    return $output;
}
function Paging($query1,$recordperpage,$pagenum,$pagelink){
	$result = ExecuteQuery($query1) or die ("Invalid Query:".mysql_error());
	$row = SqlArray($result);
	$total_record = $row ['numrows'];
	$maxpage = ceil($total_record / $recordperpage);

	//$nav ="";
	$current = "";
	$current = $pagenum;
	$index_limit = 10;
	$start=max($current-intval($index_limit/2), 1);
    $end=$start+$index_limit-1;	 
	echo '<br /><br /><div class="paging">';

        if($current==1) {
            echo '<span class="prn">&lt; Previous</span>&nbsp;';
        } else {
            $i = $current-1;
            echo '<a href="'.$pagelink.'&page='.$i.'" class="prn" rel="nofollow" title="go to page'.$i.'">&lt; Previous</a>&nbsp;';
            echo '<span class="prn">...</span>&nbsp;';
        }
		
	  if($start > 1) {
            $i = 1;
            echo '<a href="'.$pagelink.'&page='.$i.'" title="go to page '.$i.'">'.$i.'</a>&nbsp;';
        }

        for ($i = $start; $i <= $end && $i <= $maxpage; $i++){
            if($i==$current) {
                echo '<span>'.$i.'</span>&nbsp;';
            } else {
                echo '<a href="'.$pagelink.'&page='.$i.'" title="go to page '.$i.'">'.$i.'</a>&nbsp;';
            }
        }
		   if($maxpage > $end){
            $i = $maxpage;
            echo '<a href="'.$pagelink.'&page='.$i.'" title="go to page '.$i.'">'.$i.'</a>&nbsp;';
        }

        if($current < $maxpage) {
            $i = $current+1;
            echo '<span class="prn">...</span>&nbsp;';
            echo '<a href="'.$pagelink.'&page='.$i.'" class="prn" rel="nofollow" title="go to page '.$i.'">Next &gt;</a>&nbsp;';
        } else {
            echo '<span class="prn">Next &gt;</span>&nbsp;';
        }
        
        //if nothing passed to method or zero, then dont print result, else print the total count below:
        if ($maxpage != 0){
            //prints the total result count just below the paging
			echo '<p id="total_count">(Viewing Page '.$pagenum.' of '.$maxpage.') | (Total '.$total_record.' Result (s))</p></div>';
        }
}

function Get_category(){
	
	
		$date = date("Y-m-d");
		
		$result_1 = ExecuteQuery("select * from projects ");
		
		
		if(mysql_num_rows($result) > 0){
		while($rows = SqlArrays($result)){
			echo '<option>'.$rows['category'].'</option>';
		
			}
			
		}
		
	
}
function warning($message){
	$msg = '<div id="infobox" class="box notice_box">'.'<span style="float:right;padding:3px"><a href="javascript:void(0); " onclick="hidebox()"><img src="images/x.png" width="12" height="11"></a></span>'.
										'<table>
											<tr>

												<td></td>
												<td><p style=" font-size:14px">
'.$message.'</p></td>
											</tr>
										
</table>'.'
									</div>';
	
	return $msg;
}

function Pages_admin($query1,$recordperpage,$pagenum,$pagelink){
	$result = ExecuteQuery($query1) or die ("Invalid Query:".mysql_error());
	$row = SqlArray($result);
	$total_record = $row ['numrows'];
	$maxpage = ceil($total_record / $recordperpage);

	//$nav ="";
	$current = "";
	$current = $pagenum;
	$index_limit = 10;
	$start=max($current-intval($index_limit/2), 1);
    $end=$start+$index_limit-1;	 
	echo '<br /><br /><div class="pagination">';

        if($current==1) {
            echo '<span class="disabled">&lt; Previous</span>&nbsp;';
        } else {
            $i = $current-1;
            echo '<a href="'.$pagelink.'&page='.$i.'" class="prn" rel="nofollow" title="go to page'.$i.'">&lt; Previous</a>&nbsp;';
            echo '<span class="prn">...</span>&nbsp;';
        }
		
	  if($start > 1) {
            $i = 1;
            echo '<a href="'.$pagelink.'&page='.$i.'" title="go to page '.$i.'">'.$i.'</a>&nbsp;';
        }

        for ($i = $start; $i <= $end && $i <= $maxpage; $i++){
            if($i==$current) {
                echo '<span class="current">'.$i.'</span>&nbsp;';
            } else {
                echo '<a href="'.$pagelink.'&page='.$i.'" title="go to page '.$i.'">'.$i.'</a>&nbsp;';
            }
        }
		   if($maxpage > $end){
            $i = $maxpage;
            echo '<a href="'.$pagelink.'&page='.$i.'" title="go to page '.$i.'">'.$i.'</a>&nbsp;';
        }

        if($current < $maxpage) {
            $i = $current+1;
            echo '<span>...</span>&nbsp;';
            echo '<a href="'.$pagelink.'&page='.$i.'" class="prn" rel="nofollow" title="go to page '.$i.'">Next &gt;</a>&nbsp;';
        } else {
            echo '<span class="disabled">Next &gt;</span>&nbsp;';
        }
        
        //if nothing passed to method or zero, then dont print result, else print the total count below:
        if ($maxpage != 0){
            //prints the total result count just below the paging
			echo '<p id="total_count">(Viewing Page '.$pagenum.' of '.$maxpage.') | (Total '.$total_record.' Result (s))</p></div>';
        }
}

function random($lenght){
	$characters = "1234567890abcdefghijklmnopqrstuvwxyz";
	$name = "";
	for($i = 0; $i< $lenght; $i++){
		$name.= $characters[mt_rand(0, strlen ($characters) - 1)];
	}
	return $name;
}
function thumbnail($source,$thumb_width,$destination){
	//$image="";
	$ext = substr(strrchr($source, "."), 1); 	
	$size = getimagesize($source);
	$width = $size[0];
	$height = $size[1];
	$x = 0;
	$y = 0;
	if ($width > $height){
		$x = ceil(($width - $height) / 2 );
		$width = $height;
	}
	elseif($height > $width ){
		$y = ceil(($height - $width) / 2);
		$height = $width;
	}
	$newimage = imagecreatetruecolor($thumb_width,$height) or die("Cannot GD image stream");
	switch ($ext){
		case"jpg":
		$image = imagecreatefromjpeg($source);
		break;
		case"JPG":
		$image = imagecreatefromjpeg($source);
		break;
		case"JPEG":
		$image = imagecreatefromjpeg($source);
		break;
		case"jpeg":
		$image = imagecreatefromjpeg($source);
		break;
		case"gif":
		$image = imagecreatefromgif($source);
		break;
		case"png":
		$image = imagecreatefrompng($source);
		break;
	}
	imagecopyresampled($newimage,$image,0,0,$x,$y,$thumb_width,$height,$width,$height);
	//imageantialias($destination, TRUE);
		
		switch ($ext){
		case"jpg":
		imagejpeg($newimage,$destination);
		break;
		case"JPG":
		imagejpeg($newimage,$destination);
		break;
		case"JPEG":
		imagejpeg($newimage,$destination);
		break;
		case"jpeg":
		imagejpeg($newimage,$destination);
		break;
		case"gif":
		imagegif($newimage,$destination);
		break;
		case"png":
		imagepng($newimage,$destination);
		break;
	}
	
}

function time_ago($cur_time){
	if($cur_time == "")return "No date provided";
	else
$time_ = time() - strtotime($cur_time);

$seconds =$time_;
$minutes = round($time_ / 60);
$hours = round($time_ / 3600);
$days = round($time_ / 86400);
$weeks = round($time_ / 604800);
$months = round($time_ / 2419200);
$years = round($time_ / 29030400);

//Seconds

if($seconds <= 60){

   $time="Today";//"$seconds seconds ago";   

//Minutes

}else if($minutes <= 60){

   //if($minutes == 1){
   $time="Today";//"one minute ago";
  // }else{
//   $time="$minutes minutes ago";
//   }

//Hours

}else if($hours <= 24){

 // if($hours == 1){
  $time="Today";//"one hour ago";
 /* }else{
  $time="$hours hours ago";
  }*/

//Days

}else if($days <= 7){

   if($days == 1){
   $time="Yesterday";
   }else{
   $time="$days days ago";
   }

//Weeks

}else if($weeks <= 4){

  if($weeks == 1){
  $time="A week ago";
  }else{
  $time="$weeks weeks ago";
  }

//Months

}else if($months <= 12){

  if($months == 1){
  $time="A month ago";
  }else{
  $time="$months months ago";
  }

//Years

}else{  

  if($years == 1){
  $time="A year ago";
  }else{
  $time="$years years ago";
  }  

}
return $time;
}

function getLatLng($opts) {
	
	/* grab the XML */
	$url = 'http://maps.googleapis.com/maps/api/geocode/xml?' 
		. 'address=' . $opts['address'] . '&sensor=' . $opts['sensor'];
	
	$dom = new DomDocument();
	$dom->load($url);
	
	/* A response containing the result */
	$response = array();
	
	$xpath = new DomXPath($dom);
	$statusCode = $xpath->query("//status");

	/* ensure a valid StatusCode was returned before comparing */
	if ($statusCode != false && $statusCode->length > 0 
		&& $statusCode->item(0)->nodeValue == "OK") {
	
		$latDom = $xpath->query("//location/lat");
		$lonDom = $xpath->query("//location/lng");
		$addressDom = $xpath->query("//formatted_address");
		
		/* if there's a lat, then there must be lng :) */
		if ($latDom->length > 0) {
			
			$response = array (
    'lat' => $xpath->query("//location/lat")->item(0)->nodeValue,
    'lon' =>$xpath->query("//location/lng")->item(0)->nodeValue
     );

			return $response;
		}	
		
	}

	$response = array (
		'status' => false,
		'message' => "Oh snap! Error in Geocoding. Please check Address"
	);
	return $response;
}


/*
 * @param string $file File name or path to a file
 * @param int $precision Digits to display after decimal
 * @return string|bool Size (B, KiB, MiB, GiB, TiB, PiB, EiB, ZiB, YiB) or boolean
 */

function getFileSize($file, $precision =2) {
	static $units = array('B', 'KiB', 'MiB', 'GiB', 'TiB', 'PiB', 'EiB', 'ZiB', 'YiB');

	if (is_file($file)) {
		if (!realpath($file)) $file = $_SERVER['DOCUMENT_ROOT'] . $file;
		$fileSize = filesize($file);
		
		// hardcoded maximum number of units @ 9 for minor speed increase
		$power = max(floor(log($fileSize, 1024)), 8);
		return round($fileSize / pow(1024, $power), $precision) . $units[$power];
	}
	return false;
}



//function getFilesize($file,$digits) {
//       if (is_file($file)) {
//               $filePath = $file;
//               if (!realpath($filePath)) {
//                       $filePath = $_SERVER["DOCUMENT_ROOT"].$filePath;
//       }
//           $fileSize = filesize($filePath);
//               $sizes = array("TB","GB","MB","KB","B");
//               $total = count($sizes);
//               while ($total-- && $fileSize > 1024) {
//                       $fileSize /= 1024;
//                       }
//               return round($fileSize, $digits)." ".$sizes[$total];
//       }
//       return false;
//}


function sizeFilter( $bytes )
{
    $label = array( 'B', 'KB', 'MB', 'GB', 'TB', 'PB' );
    for( $i = 0; $bytes >= 1024 && $i < ( count( $label ) -1 ); $bytes /= 1024, $i++ );
    return( round( $bytes, 2 ) . " " . $label[$i] );
}
?>