<?php require_once("classes/class.php");



$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

$recordperpage = 6;
	$pagenum = 1;
	if(isset($_GET['page'])){
	$pagenum = $_GET['page'];
	}
	$offset = ($pagenum - 1) * $recordperpage;
	
 ?> <header class="fixed-top wow fadeInDown header-fullpage">
        <div class="top-bar-right d-flex align-items-center text-md-left" style="background:#000033">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col d-flex align-items-center contact-info">
                        <div>
                            <i data-feather="phone"></i>  <a href="tel:+1234567899">+1234567899</a>
                        </div>
                        <div>
                            <i data-feather="mail"></i>  <a href="mailto:info@prosperitypilotinitiative.org">info@prosperitypilotinitiative.org</a>
                        </div>
                        <div>
                            <i data-feather="clock"></i>  Mon-Fri  /  9:00 AM - 19:00 PM
                        </div>
                    </div>

                    <div class="col-md-auto">
                        <div class="social-icons">
                            <a href="#"><i class="icofont-facebook"></i></a>
                      
                            <a href="#"><i class="icofont-youtube-play"></i></a>
							
							 <a href="#"><i class="icofont-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation Start -->
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container text-nowrap">
                <div class="d-flex align-items-center w-100 col p-0 logo-brand">
                    <a class="navbar-brand rounded-bottom light-bg" href="#">
                        <img src="assets/images/pros-logo3.fw.png" alt="" width="233px">
                    </a> 
                </div>
                <!-- Topbar Buttons Start -->
                <div class="d-inline-flex request-btn order-lg-last col-auto p-0 align-items-center"> 
                    <a class="btn-outline-primary btn ml-3" href="#" id="search_home"><i data-feather="search"></i></a>

                    <a class="nav-link btn btn-default ml-3 donate-btn" href="<?php echo $connection->url(); ?>all-projects">Projects</a>

                    <!-- Toggle Button Start -->
                    <button class="navbar-toggler x collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Toggle Button End -->  
                </div>
                <!-- Topbar Buttons End -->

                <div class="collapse navbar-collapse" id="navbarCollapse" data-hover="dropdown" data-animations="slideInUp slideInUp slideInUp slideInUp">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="<?php echo $connection->url(); ?>" >Home</a>                
                           
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $connection->url(); ?>about-prosperity-initiative">About Us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Executives <i class="icofont-rounded-down"></i></a>
                            <ul class="dropdown-menu">                  
                                <li><a class="dropdown-item" href="<?php echo $connection->url(); ?>executive-council">Executive Council</a></li>
                               
                                <li><a class="dropdown-item" href="<?php echo $connection->url(); ?>organogram">Organogram</a></li> 
<li><a class="dropdown-item" href="<?php echo $connection->url(); ?>all-projects">Projects</a></li> 								
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="<?php echo $connection->url(); ?>all-interviews" >Interviews</a>
                           
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle-mob" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Videos</a>
                           
                        </li>                        
                       
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        
                    </ul>
                    <!-- Main Navigation End -->
                </div>
            </div>
        </nav>
        <!-- Main Navigation End -->
    </header>