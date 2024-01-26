<?php



$db = new connection();
$db->connectTodatabase();
$db->selectDatabase();

$message="";

if(isset($_POST['add_album'])){
	 if(empty($_POST['album_name']))$message=errorMsg('Please enter Album name');
	else if(empty($_POST['volume']))$message=errorMsg('Please enter album volume');
	else if(empty($_POST['date_released']))$message=errorMsg('Please enter year of album release');
	else if($_POST['ngo']=="" )$message=errorMsg('Please select entry');
	
	
	else if($_FILES['fileField']['name']=="") $message=errorMsg('select image to upload');
	
	else{
		
		
	if($_POST['ngo']=="Existing artist"){
		
		
		$Filename = $_FILES['fileField']['name'];
$type = $_FILES['fileField']['type'];
$size = $_FILES['fileField']['size'];
$file_cv = random(20);
$ext_cv = substr(strrchr($_FILES['fileField']['name'], "."), 1); 
	
if($size > 1000000){
		$message=errorMsg('Image too large');
	}
	if(($ext_cv =="jpeg") || ($ext_cv =="jpg")||($ext_cv =="JPG") || ($ext_cv =="JPEG")||($ext_cv =="png") || ($ext_cv =="gif")){
	$name = random(20).md5($_FILES['fileField']['tmp_name']);
	$ext = substr(strrchr($_FILES['fileField']['name'], "."), 1);
	$pass = "albumCoverPhotos/".$name.".$ext";
	move_uploaded_file($_FILES['fileField']['tmp_name'],$pass);
	$image = $name.".$ext";
	$query_artname="select artist_name from albums where album_id='".$_POST['art']."'";
	$result=ExecuteQuery($query_artname);
	$rows=SqlArray($result);
	
	$query=$db->insertion("insert into albums (album_name,album_picture,release_date,artist_name,track_no,vol,albulm_track)values('".addslashes($_POST['album_name'])."','".$image."','".addslashes($_POST['date_released'])."','".addslashes($rows['artist_name'])."','".addslashes($_POST['track_no'])."','".addslashes($_POST['volume'])."','".$_POST['art']."')");
	
	
	if($query){
		$id=$db->lastInsertId();
		
		
		$message=successMsg('album uploaded successfully <a href="addtracks?alb_id='.$id.'"><button class="btn btn-primary"><i class="icon-music icon-white"></i> Click to add tracks to album <b>'.addslashes($_POST['album_name']).'</b> '.'by '.addslashes($rows['artist_name']).' </button></a>');
		
		}
		
		
	 }
	 else{
		 $message=errorMsg('Invalid image Format');
		 }
		
		
		
		}
		
		
		else if($_POST['ngo']=="New Artist"){
			
			
			$Filename = $_FILES['fileField']['name'];
$type = $_FILES['fileField']['type'];
$size = $_FILES['fileField']['size'];
$file_cv = random(20);
$ext_cv = substr(strrchr($_FILES['fileField']['name'], "."), 1); 
	
if($size > 1000000){
		$message=errorMsg('Image too large');
	}
	if(($ext_cv =="jpeg") || ($ext_cv =="jpg")||($ext_cv =="JPG") || ($ext_cv =="JPEG")||($ext_cv =="png") || ($ext_cv =="gif")){
	$name = random(20).md5($_FILES['fileField']['tmp_name']);
	$ext = substr(strrchr($_FILES['fileField']['name'], "."), 1);
	$pass = "albumCoverPhotos/".$name.".$ext";
	move_uploaded_file($_FILES['fileField']['tmp_name'],$pass);
	$image = $name.".$ext";
	
	
	$query=$db->insertion("insert into albums (album_name,album_picture,release_date,artist_name,track_no,vol)values('".addslashes($_POST['album_name'])."','".$image."','".addslashes($_POST['date_released'])."','".addslashes($_POST['artist_name'])."','".addslashes($_POST['track_no'])."','".addslashes($_POST['volume'])."')");
	
	$id=$db->lastInsertId();
	$album_query=$db->insertion("update albums set albulm_track ='".$id."' where album_id='".$id."'");
	if($album_query){
		
		
		
		echo $id;
		$message=successMsg('album uploaded successfully <a href="addtracks?alb_id='.$id.'"><button class="btn btn-primary"><i class="icon-music icon-white"></i> Click to add tracks to album <b>'.addslashes($_POST['album_name']).'</b> '.'by '.addslashes($_POST['artist_name']).' </button></a>');
		
		}
	 }
	 else{
		 $message=errorMsg('Invalid image Format');
		 }

			
			
			}
		

	
	$db->closeDatabase();
}
}


if(isset($_POST['add_tracks'])){
	if(empty($_POST['title']))$message=errorMsg('Please enter tract title');
	else if(empty($_POST['contribute_art'])) $message=errorMsg('Please enter NONE where there is no contributing artist');
	else if($_FILES['track']['name']=="") $message=errorMsg('select track to upload');
	
	else{
		
		
	
$Filename = $_FILES['track']['name'];
$type = $_FILES['track']['type'];

$file_cv = random(20);
$extension = substr(strrchr($_FILES['track']['name'], "."), 1); 

if(($extension =="mp3")){
	
	
	$name = random(20).md5($_FILES['track']['tmp_name']);
	$size = $_FILES['track']['size'];
	$ext = substr(strrchr($_FILES['track']['name'], "."), 1);
	$path= "musicBox/".$name.".$ext";
	
	$song = $name.".$ext";
	
	$uploadSize= sizeFilter($size);
	
	
	$query=$db->insertion("insert into `tracks` (album_id,title,contribute_art,track_name,size)values('".$_GET['alb_id']."','".addslashes($_POST['title'])."','".addslashes($_POST['contribute_art'])."','".$song."','$uploadSize')");
	
	if($query){
		
		move_uploaded_file($_FILES['track']['tmp_name'],$path);
		
		$message=successMsg('Track uploaded successfuly repeat process to add another track ');
		}
}else{
	
	
	$message=errorMsg('Upload file only with mp3 format');
	}}}
	
	
	
	if(isset($_POST['add_song'])){
	if(empty($_POST['name']))$message=errorMsg('Please enter artist name');
	else if(empty($_POST['title'])) $message=errorMsg('Enter song title');
	else if($_FILES['song']['name']=="") $message=errorMsg('select song to upload');
	
	else{
		
$photoName = $_FILES['promoPhoto']['name'];
$photoExtension = substr(strrchr($_FILES['promoPhoto']['name'], "."), 1); 
$ext_cv = substr(strrchr($_FILES['promoPhoto']['name'], "."), 1);

if(($ext_cv =="jpeg") || ($ext_cv =="jpg")||($ext_cv =="JPG") || ($ext_cv =="JPEG")||($ext_cv =="png") || ($ext_cv =="gif")){
	
	$name = random(20).md5($_FILES['promoPhoto']['tmp_name']);
	
	$ext = substr(strrchr($_FILES['promoPhoto']['name'], "."), 1);
	
	$path = "promoPhotos/".$name.".$ext";
	
	move_uploaded_file($_FILES['promoPhoto']['tmp_name'],$path);
	
	$photo = $name.".$ext";
	
	
	
	
	$song = $_FILES['song']['name'];
	
$size=$_FILES['song']['size'];
	$uploadSize= sizeFilter($size);
	
$songExtension = substr(strrchr($_FILES['song']['name'], "."), 1); 

if(($songExtension =="mp3")){
	
	$songName =$_FILES['song']['name'];
	
	
	$ext = substr(strrchr($_FILES['song']['name'], "."), 1);
	
	$path1 = "musicBox/".$songName;
	
	
	
	$songUpload = $songName;
	
	$query=$db->insertion("insert into singles (artist_name,title,genre,release_date,contribute_art,promo_photo,song,size)values('".$_POST['name']."','".addslashes($_POST['title'])."','".addslashes($_POST['genre'])."','".addslashes($_POST['date_released'])."','".addslashes($_POST['contribute_art'])."','".$photo."','".$songUpload."','$uploadSize')");
	
	
	if($query){
		
		move_uploaded_file($_FILES['song']['tmp_name'],$path1);
		
		$message=successMsg('Track uploaded successfuly repeat process to add another track ');
		}
}else{
	
	
	$message=errorMsg('Upload file only with mp3 format');
	}}}}
	
	
	if(isset($_POST['add_news'])){
	if(empty($_POST['title']))$message=errorMsg('Please enter news title');
	else if(empty($_POST['newsContent'])) $message=errorMsg('Enter news content');
	else if(empty($_POST['dateOfpublication'])) $message=errorMsg('Enter news content');
	else if(empty($_POST['author'])) $message=errorMsg('Enter news author');
	else if($_FILES['newsPhoto']['name']=="") $message=errorMsg('select news photo to upload');
	
	else{
		
$photoName = $_FILES['newsPhoto']['name'];
$photoExtension = substr(strrchr($_FILES['newsPhoto']['name'], "."), 1); 
$ext_cv = substr(strrchr($_FILES['newsPhoto']['name'], "."), 1);

if(($ext_cv =="jpeg") || ($ext_cv =="jpg")||($ext_cv =="JPG") || ($ext_cv =="JPEG")||($ext_cv =="png") || ($ext_cv =="gif")){
	
	$name = random(20).md5($_FILES['newsPhoto']['tmp_name']);
	
	$ext = substr(strrchr($_FILES['newsPhoto']['name'], "."), 1);
	
	$path = "newsPhoto/".$name.".$ext";
	
	
	
	$photo = $name.".$ext";
	
	
	
	
	
	
	$query=$db->insertion("insert into news (title,news_description,date_pub,author,photo)values('".$_POST['title']."','".addslashes($_POST['newsContent'])."','".addslashes($_POST['dateOfpublication'])."','".addslashes($_POST['author'])."','".$photo."')");
	
	
	if($query){
		
		move_uploaded_file($_FILES['newsPhoto']['tmp_name'],$path);
		
		$message=successMsg('News uploaded succesfully ');
		}
}else{
	
	
	$message=errorMsg('wrong image format');
	}}}
	
	?>