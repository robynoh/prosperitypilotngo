<?php 

class connection2{
	
	var $db='oya_playit';
	var $localhost='localhost';
	var $password='';
	var $username='root';
	var $connect;
	var $database;
	public function connectTodatabase(){
		
		
		$con=mysqli_connect($this->localhost,$this->username,$this->password);
		if(!$con){ echo'can not connect to database';}
		else{
		 $this->connect=$con;
		
		}
		
		 return $this->connect;
		}
		
		
		public function selectDatabase(){
			
		return	$this->database=mysqli_select_db($this->connect,$this->db);
			
			
			
		}
	
	
	 public function insertion($query){
		 
		$result=mysqli_query($this->connect,$query);
		
		return $result;
		 
		 
	 }
	 
	 public function arrayFetch($result){
		$arraycontent=array();
		while( $contents=mysqli_fetch_array($result)){
			$arraycontent[]=$contents;
			
		}
		return $arraycontent;
		 }
	 
	  public function lastInsertId(){
		 
		$id=mysqli_insert_id($this->connect);
		 
		 
		 return $id;
	 }
	 
	 
	 
	 public function numRows($query){
		 
		$num=mysqli_num_rows($query);
		 
		 return $num;
	 }
	 
	 public function closeDatabase(){
		 
		 $close=mysqli_close($this->connect);
		return $close;
		 }
	
	}

class albums {

var $emptyMessage='<tr ><td colspan="6"><div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Sorry!</strong> There  is no album available yet.
									</div></td></tr>';	
                                    
                        function get_albums(){
							
                                  $albums_list=array();
								  
                                   $result=ExecuteQuery("SELECT * FROM `albums` ");
								$albums_count= NumOfRows ($result);
								
								if($albums_count<1){
									
									
								return $this->emptyMessage;	
									
									
									}
									else{
								   
								   while($album=SqlArray($result)){
									   
									 $albums_list[]=$album;
									   
									   }
									   
									return $albums_list;   

									}
                                    
                                    }








}

class singles {

var $emptyMessage='<tr ><td colspan="6"><div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Sorry!</strong> There  is no songs available yet.
									</div></td></tr>';	
                                    
                        function get_singles(){
							
                                  $singles_list=array();
								  
                                   $result=ExecuteQuery("SELECT * FROM `singles` ");
								$singles_count= NumOfRows ($result);
								
								if($singles_count<1){
									
									
								return $this->emptyMessage;	
									
									
									}
									else{
								   
								   while($single=SqlArray($result)){
									   
									 $singles_list[]=$single;
									   
									   }
									   
									return $singles_list;   

									}
                                    
                                    }








}


class volumes {
	
	public function vols(){
		echo '<select name="volume" >';
		for($x=1;$x<=20;$x++){
			
			
                          echo '<option>'.$x.'</option>';
                               
	 
 }
	echo'</select>';
		}
	
	}
	
	
	class releaseDate{
	function relDate(){
		
		echo '<select name="date_released" >';
		for($x=1900;$x<=date("Y");$x++){
			
			
                          echo '<option>'.$x.'</option>';
                               
	 
 }
	echo'</select>';
		}
		
		
	}
	
	
	class news{

var $emptyMessage='<tr ><td colspan="6"><div class="alert">
										<button class="close" data-dismiss="alert">&times;</button>
										<strong>Sorry!</strong> There  is no news available yet.
									</div></td></tr>';	
                                    
                        function get_news(){
							
                                  $news_list=array();
								  
                                   $result=ExecuteQuery("SELECT * FROM `news` ");
								$news_count= NumOfRows ($result);
								
								if($news_count<1){
									
									
								return $this->emptyMessage;	
									
									
									}
									else{
								   
								   while($news=SqlArray($result)){
									   
									 $news_list[]=$news;
									   
									   }
									   
									return $news_list;   

									}
                                    
                                    }








}

?>