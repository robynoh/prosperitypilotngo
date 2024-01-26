<?php require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

$recordperpage = 6;
	$pagenum = 1;
	if(isset($_GET['page'])){
	$pagenum = $_GET['page'];
	}
	$offset = ($pagenum - 1) * $recordperpage;
	
	
	
	$output="";
	$query= "SELECT * FROM `projects`  where project_id='".$_GET['projectid']."'";
	$result=$connection->retrieve($query);
	$rows=$connection->arrayFetch($result);
	
	$query2= "SELECT * FROM `projects`  where project_id !='".$_GET['projectid']."'";
	$result2=$connection->retrieve($query2);
	$rows2=$connection->arrayFetch($result2);
	
	
	
	
		
	
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
    <title>Prosperity Pilot Initiative - <?php echo $connect->show_project_title($_GET['projectid']);?></title>
    <meta name="author" content="Mannat Studio">     
    <meta name="description" content="Gracious is a Responsive HTML5 Template for Charity and NGO related services.">
    <meta name="keywords" content="Gracious, responsive, html5, charity, charity agency, charity foundation, charity template, church, donate, donation, fundraiser, fundraising, mosque, ngo, non-profit, nonprofit, organization, volunteer">
    
    <!-- Favicon -->    
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <!-- Animate CSSS -->    
    <link href="<?php echo $connection->url(); ?>/assets/library/animate/animate.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="<?php echo $connection->url(); ?>/assets/library/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Dropdown Hover CSS -->
    <link href="<?php echo $connection->url(); ?>/assets/library/bootstrap/css/bootstrap-dropdownhover.min.css" rel="stylesheet">
    <!-- Icofont CSS -->
    <link href="<?php echo $connection->url(); ?>/assets/library/icofont/icofont.min.css" rel="stylesheet">
    <!-- Owl Carousel CSS -->
    <link href="<?php echo $connection->url(); ?>/assets/library/owlcarousel/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Select Dropdown CSS -->
    <link href="<?php echo $connection->url(); ?>assets/library/select2/css/select2.min.css" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link href="<?php echo $connection->url(); ?>assets/library/magnific-popup/magnific-popup.css" rel="stylesheet">    
    <!-- Main Theme CSS -->
    <link href="<?php echo $connection->url(); ?>/assets/css/style.css" rel="stylesheet">

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

    <?php include('tools/header.php'); ?>
    <!-- Header Start -->

    <!-- Page Breadcrumbs Start -->
  <br/>
  <br/>
  <br/>
  <br/>
    <!-- Page Breadcrumbs End -->

    <!-- Main Body Content Start -->
    <main id="body-content">

        <!-- Blog Post Single Start -->
        <section class="wide-tb-100">
            <div class="container">
                <div class="row">                    
                    <div class="col-lg-9 col-md-12">
                        <div class="sidebar-spacer">
						<?php  foreach($rows as $row){?>
                            <div class="d-flex">
                                <div class="post-date txt-blue"><?php echo $row['day']; ?>,<?php echo $row['month']; ?>, <?php echo $row['year']; ?></div>
                                <div class="mx-2">/</div>
                                <div class="post-category">Update</div>                        
                            </div>
                            <h1 class="heading-main">
                               <?php echo $row['title']; ?>
                            </h1>
                            
                            <!-- Causes Single Wrap -->
                            <div class="causes-wrap single">
                                <div class="img-wrap">
                                    <img src="<?php echo $connection->url(); ?>/mgt/project_photos/<?php echo $row['filename']?>" alt="">
                                </div>

                                <div class="content-wrap-single">
                                    
                                    <p><?php echo $row['content']; ?></p>                                    

                                   

                                 
    </div>

                             

                            </div>
                            <!-- Causes Single Wrap -->
                             
                            <!-- Comments List -->
                           
                            <!-- Comments List -->

                            <!-- Leave a Reply -->                            
                                                
						<?php }?>
                                            
                            <!-- Leave a Reply -->
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-12">
                        <aside class="row sidebar-widgets">
                            <!-- Sidebar Primary Start -->
                            <div class="sidebar-primary col-lg-12 col-md-6">
                                <!-- Widget Wrap -->
                               
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                              
                                <!-- Widget Wrap -->

                                <!-- Widget Wrap -->
                               
                                <!-- Widget Wrap -->
                            </div>
                            <!-- Sidebar Primary End -->

                            <!-- Sidebar Secondary Start -->
                            <div class="sidebar-secondary col-lg-12 col-md-6">
							 <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <div class="sidebar-ads">
                                        <img src="<?php echo $connection->url(); ?>/assets/images/sidebar_ads.jpg" alt="">
                                        <div class="content">
                                            
                                            <h3>Prosperity Pilot Initiative Magazine</h3>
                                            <a href="<?php echo $connection->url(); ?>/magazine/ppi-magazine" class="btn btn-secondary">Download Magazine</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Widget Wrap -->
                                <!-- Widget Wrap -->
                                <div class="widget-wrap">
                                    <h3 class="widget-title">Projects</h3>
                                    <div class="owl-carousel owl-theme" id="sidebar-causes">
                        
                                        <!-- Causes Wrap -->
										<?php foreach($rows2 as $row2){?>
                                        <div class="causes-wrap">
                                            <div class="img-wrap">
                                                <a href="causes-single.html">  <img src="<?php echo $connection->url(); ?>/mgt/project_photos/<?php echo $row2['filename']?>" alt=""></a>
                                                <div class="raised-progress">
                                                    <div class="skillbar-wrap">
                                                        <div class="clearfix">
                                                             PPI Archive
                                                        </div>           
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="content-wrap">
                                                <span class="tag">Projects</span>
                                                <h3><a href="causes-single.html"><?php echo $row2['title']; ?></a></h3>
                                                <div class="text-md-right">
                                                   <a href="<?php echo $connection->url(); ?>/project/<?php echo $row2['day']; ?>/<?php echo $row2['month']?>/<?php echo $row2['year']?>/<?php echo str_replace(' ', '-',$row2['title']);?>/<?php echo $row2['project_id']; ?>" class="read-more-line"><span>Read More</span></a>
                                                </div>
                                            </div>
    
                                        </div>
										
										<?php }?>
                                        <!-- Causes Wrap -->
                                    
                                        <!-- Causes Wrap -->
                                       
                                        <!-- Causes Wrap -->
                                    
                                        <!-- Causes Wrap -->
                                      
                                        <!-- Causes Wrap -->
                                    
                                    </div>
                                </div>
                                <!-- Widget Wrap -->


                               
                            </div>
                            <!-- Sidebar Secondary End -->

                            
                        </aside>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Post Single End -->
           
    </main>

    <!-- Main Footer Start -->
     <?php include('tools/footer.php'); ?>
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
    <script src="<?php echo $connection->url(); ?>/assets/library/jquery/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap Dropdown JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/bootstrap/js/bootstrap-dropdownhover.min.js"></script>
    <!-- Feather Icon JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/feather-icons/feather.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- Select2 Dropdown JS -->
    <script src="<?php echo $connection->url(); ?>assets/library/select2/js/select2.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Instagram Images JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/jquery-instagramFeed/jquery.instagramFeed.min.js"></script>
    <!-- Way Points JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/jquery-waypoints/jquery.waypoints.min.js"></script>
    <!-- Count Down JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/countdown/jquery.countdown.min.js"></script>
    <!-- Appear JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/jquery-appear/jquery.appear.js"></script>
    <!-- Jquery Easing JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/jquery-easing/jquery.easing.min.js"></script>
    <!-- Counter JS -->
    <script src="<?php echo $connection->url(); ?>/assets/library/jquery.counterup/jquery.counterup.min.js"></script>
    <!-- Form Validation JS -->
    <script src="<?php echo $connection->url(); ?>assets/library/jquery-validate/jquery.validate.min.js"></script>
    <!-- Theme Custom -->
    <script src="<?php echo $connection->url(); ?>/assets/js/site-custom.js"></script>
</body>
</html>