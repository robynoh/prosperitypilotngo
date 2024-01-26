<?php


 if($_SESSION['loggedin'] != true){
	
	header("location: ./");
	
	 exit;
	}
	
	?>

<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    
                    <a class="brand" href="#"><img src="images/logo3s.png" alt="logo"><span style="color:#33416E"> Prosperity Pilot Initiative</span></a> 
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                        
                        <?php  if($_SESSION['loggedin']==true){?>
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i>  <?php echo ucwords( $_SESSION['user']);?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </li><?php ; }?>
                        </ul>
                       
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>