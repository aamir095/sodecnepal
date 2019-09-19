<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>SODEC Nepal | News</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="SODEC Nepal - Responsive HTML5 Template">
  <meta name="author" content="SODEC Nepal">


  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- SODEC Nepal CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

  

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container">

 <?php include "layouts/header.php"; ?> 
    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>News</h2>
          </div>
  
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

    <div class="hr1 margin-60"></div>

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">


          <!--Sidebar-->
          <div class="col-md-3 sidebar left-sidebar">


             <!-- Video Widget -->
            <div class="widget">
              <h4>Publication<span class="head-line"></span></h4>
              <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
        
          <div class="projects-carousel touch-carousel">

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" data-lightbox-type="ajax" href="documents/IPDCBook.pdf">
                    <div class="thumb-overlay"><i class="fa fa-play"></i></div>
                    <img alt="" src="images/portfolio-1/1.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="documents/IPDCBook.pdf">
                    <h4>नेपालमा दण्डहीनता</h4>
                    <span></span>
                   
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a class="lightbox" title="नेपाली विश्वविद्यालयहरुका पत्रकारिता पाठ्यक्रम" href="documents/SODECBookonJMCurricula2014.pdf">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/2.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="documents/SODECBookonJMCurricula2014.pdf">
                    <h4> नेपाली विश्वविद्यालयहरुका पत्रकारिता पाठ्यक्रम</h4>
                
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="documents/SGPBook.pdf">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/3.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="documents/SGPBook.pdf">
                    <h4>सञ्चारको दृष्टिकोणमा साना अनुदान कार्यक्रम</h4>
                  
                  </a>
                </div>
              </div>
            </div>

            <div class="portfolio-item item">
              <div class="portfolio-border">
                <div class="portfolio-thumb">
                  <a href="#">
                    <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                    <img alt="" src="images/portfolio-1/4.png" />
                  </a>
                </div>
                <div class="portfolio-details">
                  <a href="#">
                    <h4>Learning from Local Initiatives</h4>
                
                  </a>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- End Recent Projects Carousel -->
            </div>
            
          </div>
          <!--End sidebar-->


          <div class="col-md-9 blog-box">
		  <!-- Start Post -->
      <?php $allnewss=getAllNewsInNewsPage($conn);
            foreach ($allnewss as $key => $allnews) {
       ?>
            <div class="blog-post standard-post">
             <!-- Post Content -->
              <div class="post-content">
                <div class="post-type"><i class="fa fa-pencil"></i></div>
                <h2><a href="viewnews.php?ref=<?php echo $allnews['id'];?>"> <?php  echo $allnews['tv_title'];?></a>&nbsp;</h2>
                <ul class="post-meta">
                  <li> <?php  echo $allnews['created_date'];?></li>
                 
                </ul>
                <p> <?php  echo $allnews['tv_description'];?></p>
                <a class="main-button" href="viewnews.php?ref=<?php echo $allnews['id'];?>">Read More <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          <?php } ?>
            <!-- End Post -->
		  
            <!-- End Post -->
		  <!-- Start Post -->
    
            <!-- End Post -->
		  <!-- Start Post -->
         
            <!-- End Post -->
		  
		  <!-- Start Post -->
           
            <!-- End Post -->
		  
			<!-- Start Post -->
           
            <!-- End Post -->
           

		   
			 <!-- Start Post -->
            
            <!-- End Post -->
			
			
             <!-- Start Post -->
           
            <!-- End Post -->

        
            <!-- Start Pagination -->

            <!--
            <div id="pagination">
              <span class="all-pages">Page 1 of 3</span>
              <span class="current page-num">1</span>
              <a class="page-num" href="#">2</a>
              <a class="page-num" href="#">3</a>
              <a class="next-page" href="#">Next</a>
            </div>
             End Pagination -->

          </div>
          
      </div>
    </div>
    <!-- End Content -->

    <div class="hr1 margin-60"></div>


   <!-- Start Footer -->
  <?php include "layouts/footer.php"; ?> 
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- SODEC Nepal JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>