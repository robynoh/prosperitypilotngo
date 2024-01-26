<?php require_once("classes/class.php");
$connection =new connection();
$connection->connectTodatabase();
$connection->selectDatabase();
$connect =new country_particular();

$query= "SELECT * FROM `executives`";
	$result=$connection->retrieve($query);
	$rows=$connection->arrayFetch($result);
	
	
		


?>

<!doctype html>
<html lang="en">
<head>
    <!-- xxx Basics xxx -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- xxx Change With Your Information xxx -->    
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no" />
    <title>Executive Council - Prosperity Pilot Initiative</title>
    <meta name="author" content="Mannat Studio">     
    <meta name="description" content="Gracious is a Responsive HTML5 Template for Charity and NGO related services.">
    <meta name="keywords" content="Gracious, responsive, html5, charity, charity agency, charity foundation, charity template, church, donate, donation, fundraiser, fundraising, mosque, ngo, non-profit, nonprofit, organization, volunteer">
    
    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Animate CSSS -->    
    <link href="assets/library/animate/animate.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="assets/library/bootstrap/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <!-- Icofont CSS -->
    <link href="assets/library/icofont/icofont.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="assets/library/owlcarousel/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Select Dropdown CSS -->
    <link href="assets/library/select2/css/select2.min.css" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="assets/library/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Main Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Home SLider CSS -->
    <link rel="stylesheet" href="assets/css/home-main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->		
</head>
<body>

    <!-- Page loader Start -->
    <div id="pageloader">   
        <div class="loader-item">
            <div class="loader">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
              </div>
        </div>
    </div>
    <!-- Page loader End -->

    <!-- Header Start -->
   <?php include('tools/header.php'); ?>
    <!-- Header Start -->

    <!-- Banner Start -->
    
    <!-- Banner Start -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Welcome Home Style Start -->
      
		
		
		

        
        <!-- Welcome Home Style Start -->

        <!-- Featured Cause Start -->
       
		
		

       
        <!-- Causes Grid Start -->

        <!-- Callout Style Start -->
     
        <!-- Callout Style End -->

        <!-- Get to Know Us Style Start -->
       
        <!-- Get to Know Us Style End -->

        <!-- Team Member Style Start -->
		<br/><br/><br/><br/>
        <section class="wide-tb-100 team-bg mb-spacer-md">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-4 col-md-6">
                        <h1 class="heading-main">
                            <small style="color:#000033">The Team</small>
                            Executive Council
                        </h1>
                    </div>
                   
                </div>

                <div class="row">
				
				
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                   
                    <!-- Team Column One -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Team Column One -->
                  
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                   
					
					
					
					
					
					<?php  foreach($rows as $row){?>
		
					 <div class="col-12 col-lg-3 col-sm-6">
                        <div class="team-section-wrap mb-0">
                            <div class="img beige">
                                <div class="social-icons">
                                    <a href="#"><i class="icofont-facebook"></i></a>
                                    <a href="#"><i class="icofont-twitter"></i></a>
                                    <a href="#"><i class="icofont-instagram"></i></a>
                                </div>
                                <img src="mgt/executives_photo/<?php echo $row['filename'];?>" alt="" class="rounded-circle">
                            </div>
                            <h4 style="color:#000033"><?php echo $row['exec_name'];?></h4>
                            <h5><?php echo $row['position'];?></h5>
                           
                        </div>
                    </div>
		<?php }?>
					
					
					
					
					
					
				
                    <!-- Team Column One -->

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                    <!-- Team Column One -->
                  
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                  
                    <!-- Team Column One -->
                </div>
            </div>
        </section>
         
    </main>

    <!-- Main Footer Start -->
    <?php include('tools/footer.php');?>
    <!-- Main Footer End -->

    <!-- Search Popup Start -->
    <div class="overlay overlay-hugeinc">    
        <form class="form-inline mt-2 mt-md-0">
            <div class="form-inner">
                <div class="form-inner-div d-inline-flex align-items-center no-gutters">
                    <div class="col-md-1">
                        <i class="icofont-search"></i>
                    </div> 
                    <div class="col-10">
                        <input class="form-control w-100 p-0" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-md-1">
                        <a href="#" class="overlay-close link-oragne"><i class="icofont-close-line"></i></a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Search Popup End -->

    <!-- Back To Top Start -->
    <a id="mkdf-back-to-top" href="#" class="off"><i data-feather="corner-right-up"></i></a>
    <!-- Back To Top End -->

    <!-- Jquery Library JS -->
    <script src="assets/library/jquery/jquery.min.js"></script>
    <!-- Jquery Library JS -->
    <script src="assets/library/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Dropdown JS -->
    <script src="assets/library/bootstrap/js/bootstrap-dropdownhover.min.js"></script>
    <!-- Feather Icon JS -->
    <script src="assets/library/feather-icons/feather.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="assets/library/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- Select2 Dropdown JS -->
    <script src="assets/library/select2/js/select2.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="assets/library/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Instagram Images JS -->
    <script src="assets/library/jquery-instagramFeed/jquery.instagramFeed.min.js"></script>
    <!-- Way Points JS -->
    <script src="assets/library/jquery-waypoints/jquery.waypoints.min.js"></script>
    <!-- Count Down JS -->
    <script src="assets/library/countdown/jquery.countdown.min.js"></script>
    <!-- Appear JS -->
    <script src="assets/library/jquery-appear/jquery.appear.js"></script>
    <!-- Jquery Easing JS -->
    <script src="assets/library/jquery-easing/jquery.easing.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/library/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Form Validation JS -->
    <script src="assets/library/jquery-validate/jquery.validate.min.js"></script>
    <!-- Theme Custom -->
    <script src="assets/js/site-custom.js"></script>
    <!-- Home Slider (Only For Home pages) -->
    <script src="assets/js/home-slider.js"></script>
</body>
</html>