<?php 
require_once('classes/class.php');

$connect =new connection();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
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
    <title>Home - Prosperity Pilot Initiative</title>
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
    <section class="main-banner">
        <div class="container start">
            <div class="slides-wrap">
                <div class="owl-carousel owl-theme">
				
				 <!--/owl-slide-->
                    <div class="owl-slide d-flex align-items-center cover" style="background-image: url(assets/images/slider/slider_home_first_2.jpg);">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start no-gutters">
                                <div class="col-10 col-md-6 static">
                                    <div class="owl-slide-text">
                                        <h3 class="owl-slide-animated owl-slide-title">Prosperity Administration</h3>
                                        <h1 class="owl-slide-animated owl-slide-subtitle">
                                            IS ON COURSE
                                        </h1>
                                        <div class="owl-slide-animated owl-slide-cta">                                        
                                            <a class="btn btn-default mr-3" href="#" role="button">The Beginning</a>
                                            <a class="slider-link popup-video" href="#">Watch the video <i class="charity-play_button"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--/owl-slide-->
				
				
                    <!--/owl-slide-->
                    <div class="owl-slide d-flex align-items-center cover" style="background-image: url(assets/images/slider/slider_home_first_1.jpg);">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start no-gutters">
                                <div class="col-10 col-md-6 static">
                                    <div class="owl-slide-text">
                                        <h3 class="owl-slide-animated owl-slide-title">Promoting and Propagating the</h3>
                                        <h1 class="owl-slide-animated owl-slide-subtitle">
                                            CORE VALUES OF THE PROSPERITY AGENDA
                                        </h1>
                                        <div class="owl-slide-animated owl-slide-cta">                                        
                                            <a class="btn btn-default mr-3" href="#" role="button">Projects</a>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                   
                    
                   
                    <div class="owl-slide d-flex align-items-center cover" style="background-image: url(assets/images/slider/slider_home_first_3.jpg);">
                        <div class="container">
                            <div class="row justify-content-center justify-content-md-start no-gutters">
                                <div class="col-10 col-md-6 static">
                                    <div class="owl-slide-text">
                                        <h3 class="owl-slide-animated owl-slide-title">Prosperity Pilot Initiative</h3>
                                        <h1 class="owl-slide-animated owl-slide-subtitle">
                                            EXECUTIVE COUNCIL
                                        </h1>
                                        <div class="owl-slide-animated owl-slide-cta">                                        
                                            <a class="btn btn-default mr-3" href="#" role="button">Continue</a>
                                         </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/owl-slide-->
                </div>
                
            </div>
            <div class="container pos-rel">
                <div class="funds-committed">
                    <small>The Prosperity Projects</small>
                    <span class="counter">14,721</span>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Start -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Welcome Home Style Start -->
        <section class="wide-tb-100 pb-0">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-10 col-md-12">
                        <h1 class="heading-main">
                            <small style="color:#000033">VISION</small>
                         <span> Accelerating and Amplifying</span>
                        </h1>
                    </div>
                </div>
            </div>
        </section>
		
		
		

        <section class="wide-tb-100 bg-green pt-0 welcome-broke-grid">

            <div class="container">
                <div class="welcome-icon"><i class="charity-love_hearts"></i></div>
                <div class="row">
				
					<?php echo $connect->show_all_news_one(); ?>
				
				
				
                

                    <!-- Spacer For Medium -->
                    <div class="w-100 d-none d-sm-none d-md-block d-lg-none spacer-60"></div>
                    <!-- Spacer For Medium -->

                   
                    

                    
                </div>

                <div class="row">
                    <div class="col-lg-7 mx-auto welcome-home-first">
                        <div class="text-center mt-5">
                         Our vision is to accelerate and amplify the impact of the prosperity agenda, by creating active PPI cells and empowering vote-riasers in all 105 Electoral wards in Bayelsa
						  State, using lawful and peaceful means to spread and inspire the gospel of peace and love, preached  by His Excellency, Governor Douye Diri, in the minds of all Bayelsans, so that our state will truly become the "glory of all lands" </div>

                        
                        <div class="text-center mt-5">
                            <a href="#" class="btn btn-default">All Projects</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Welcome Home Style Start -->

        <!-- Featured Cause Start -->
        <section class="wide-tb-100 bg-white featured-heart-icon-hidden">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="featured-causes-img">
                            <img src="assets/images/causes/featured_cause.jpg" alt="">
                           
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="featured-content">
                            <div class="featured-heart-icon"><i class="charity-hearts"></i></div>
                            <h1 class="heading-main">
                                <small style="color:#000033" >Mission</small>
                               Promoting and Propagating the core values
                            </h1>
                            <p>of the prosperity agenda of His Excellency, Governor Douye Diri, making disciples of all Bayelsans, and Non-Bayelsans who reside in Bayelsa
							State, while helping to shape a glorious future by protecting our tradition, spreading factual information, and advocating for equitable and sustaining prosperity.
							</p>
                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Cause End -->
		
		
		
		<section class="wide-tb-100 bg-white shadow">
            <div class="container">                                           
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12">
                        <div class="text-center">
                            <img src="assets/images/about_img.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <h1 class="heading-main">
                            <small style="color:#000033">Vision of The Prosperity Administration</small>
                            The 10 Guiding Principles
                        </h1>

                        <p>This administration has set forth an ambitious roadmap for Bayelsa to progress as a state towards becoming truly the "Glory of all Lands". the main aim of prosperity agenda is to provide a decent living standard to all Bayelsans.</p>

                       
                       


                    </div>
                </div>
            </div>
        </section>
		
		
		 <section class="wide-tb-100 pattern-orange pt-0 mb-spacer-md">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        
                        <div class="faqs-wrap pos-rel">
                            <div class="bg-overlay blue opacity-80"></div>
                            <div class="row">
                                <div class="col-12 col-lg-6 col-md-12">
                                    <h1 class="heading-main light-mode">
                                        <small>Seven Focus Points</small>
                                        To Advance towards the 9 Guiding Principles
                                    </h1>
                                    <p>To enable the state to advance towards achieving the 9 guiding principles the government has seven focus points</p>
                                 </div>
        
                                <!-- Spacer For Medium -->
                                <div class="w-100 d-none d-sm-block d-lg-none spacer-60"></div>
                                <!-- Spacer For Medium -->
        
                                <div class="col-12 col-lg-6 col-md-12">
                                    <div class="theme-collapse light">
                                        <!-- Toggle Links 1 -->
                                        <div class="toggle arrow-down">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Fiscal Responsibility
                                        </div>
                                        <!-- Toggle Links 1 -->
                
                                        <!-- Toggle Content 1 -->
                                        <div class="collapse show">
                                            <div class="content">
                                                Prudent Management of Government finance to maximize physical infrastructure and boost investors confidence.
                                            </div>
                                        </div>
                                        <!-- Toggle Content 1 -->
                
                                        <!-- Toggle Links 2 -->
                                        <div class="toggle">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Technical and Vocational Education and Training (TVET)
                                        </div>
                                        <!-- Toggle Links 2 -->
                
                                        <!-- Toggle Content 2 -->
                                        <div class="collapse">
                                            <div class="content">
                                              Increasing skilled workforce, a consistent learning and outcome based education.
                                            </div>
                                        </div>
                                        <!-- Toggle Content 2 -->
                
                                        <!-- Toggle Links 3 -->
                                        <div class="toggle">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Sutainability
                                        </div>
                                        <!-- Toggle Links 3 -->
                
                                        <!-- Toggle Content 3 -->
                                        <div class="collapse">
                                            <div class="content">
                                               Eco-friendly development focused on conserving and preserving natural resources.
                                            </div>
                                        </div>
                                        <!-- Toggle Content 3 -->
										
										
										  <!-- Toggle Links 3 -->
                                        <div class="toggle">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Effective Institutional delivery
                                        </div>
                                        <!-- Toggle Links 3 -->
                
                                        <!-- Toggle Content 3 -->
                                        <div class="collapse">
                                            <div class="content">
                                               improve implementation of budgetary and policy initiatives.
                                            </div>
                                        </div>
                                        <!-- Toggle Content 3 -->
										
										  <!-- Toggle Links 3 -->
                                        <div class="toggle">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Encouraging reconcilliation and Healthy Criticism
                                        </div>
                                        <!-- Toggle Links 3 -->
                
                                        <!-- Toggle Content 3 -->
                                        <div class="collapse">
                                            <div class="content">
                                               To foster intellectual discussions, experience sharing and empathy.
                                            </div>
                                        </div>
                                        <!-- Toggle Content 3 -->
										
										
										  <!-- Toggle Links 3 -->
                                        <div class="toggle">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Governance and Integrity
                                        </div>
                                        <!-- Toggle Links 3 -->
                
                                        <!-- Toggle Content 3 -->
                                        <div class="collapse">
                                            <div class="content">
                                               Strenghtening governance through transparency and accountability to deepen public trust.
                                            </div>
                                        </div>
                                        <!-- Toggle Content 3 -->
										
										  <!-- Toggle Links 3 -->
                                        <div class="toggle">
                                            <span class="icon">
                                                <i class="icofont-plus"></i>
                                            </span> Leaveraging on the loans platform of the CBN and other multilateral agencies
                                        </div>
                                        <!-- Toggle Links 3 -->
                
                                        <!-- Toggle Content 3 -->
                                        <div class="collapse">
                                            <div class="content">
                                              To expand business through holistic and SME-friendly financing
                                            </div>
                                        </div>
                                        <!-- Toggle Content 3 -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               
            </div>
        </section>

       
        <!-- Causes Grid Start -->

        <!-- Callout Style Start -->
     
        <!-- Callout Style End -->

        <!-- Get to Know Us Style Start -->
       
        <!-- Get to Know Us Style End -->

        <!-- Team Member Style Start -->
        <section class="wide-tb-100 team-bg mb-spacer-md">
            <div class="container">
                <div class="row justify-content-between align-items-end">
                    <div class="col-lg-4 col-md-6">
                        <h1 class="heading-main">
                            <small style="color:#000033">The Team</small>
                            Executive Council
                        </h1>
                    </div>
                    <div class="col-lg-8 col-md-6 text-md-right btn-team">
                        <a href="executive-council" class="btn btn-outline-dark">View All Members</a>
                    </div>
                </div>

                <div class="row">
                    <!-- Team Column One -->
                   <?php echo $connect->show_all_executive_one(); ?>
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                   
                    <!-- Team Column One -->

                    <!-- Spacer For Medium -->
                   
                    <!-- Spacer For Medium -->

                    <!-- Team Column One -->
                  
                    <!-- Team Column One -->

                    <!-- Team Column One -->
                  
                </div>
            </div>
        </section>
         
    </main>

    <!-- Main Footer Start -->
    <footer class="wide-tb-70 pb-0 mb-spacer-md">
         

        <div class="copyright-wrap">
            <div class="container pos-rel">
                <div class="row text-md-left text-center">
                    <div class="col-sm-12 col-md-auto copyright-text">
                        © Copyright <span class="txt-blue">Prosperity Pilot Initiative</span> 2020. |   Created by <a href="#" rel="nofollow">Ragura</a></a>
                    </div>
                   
                </div>
            </div>
        </div>
    </footer>
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