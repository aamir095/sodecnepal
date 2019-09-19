<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>SODEC Nepal | Notice</title>

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

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Container -->
  <div id="container">
<?php include 'layouts\header.php';
      $noticeId=$_GET['ref'];
      $notice=getNoticeById($conn,$noticeId);
?>
    <!-- End Header Section -->


    <!-- Start Page Banner -->
    <div class="page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2>Notice</h2>
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

            <!-- Popular Posts widget -->
            <!--  <div class="widget widget-popular-posts">
              <h4>Popular Post <span class="head-line"></span></h4>
              <ul>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-01.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-02.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
                <li>
                  <div class="widget-thumb">
                    <a href="#"><img src="images/blog-mini-03.jpg" alt="" /></a>
                  </div>
                  <div class="widget-content">
                    <h5><a href="#">How To Download The Google Fonts Catalog</a></h5>
                    <span>Jul 29 2013</span>
                  </div>
                  <div class="clearfix"></div>
                </li>
              </ul>
            </div>
 -->




          </div>
          <!--End sidebar-->


          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box">

            <h3 class="blue-text"><font color="blue"><?php echo $notice['tv_title'];?></font></h3>

            <!-- Some Text -->
            <?php
                  if (!empty($notice['image_path'])){?>

                    <img src="admin/uploads/<?php echo $notice['image_path'];?>">
                  <?php } ?>

            <p><?php echo $notice['tv_description'];?></p>

</div>
</div>
      </div>
      <!-- End Content -->

      <div class="hr1 margin-60"></div>


      <!-- Start Footer -->
      <footer>
        <div class="container">
          <div class="row footer-widgets">

            <!-- Start Contact Widget -->
            <div class="col-md-4">
              <div class="footer-widget contact-widget">
                <h4>SODEC Nepal<span class="head-line"></h4>
              <p>Mathuri Sadan, Ravi Bhawan, Kathmandu</p>
              <ul>
                <li><span style="padding-right: 5px;">Phone Number:</span> +977-1- 4282694</li>
                  <li><span style="padding-right: 5px;">Email:</span>info@sodecnepal.org.np</li>
                  <li><span style="padding-right: 45px;"></span>sodeccommunication@gmail.com</li>

                  </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Contact Widget -->

            <!-- Start Subscribe & Social Links Widget -->
            <div class="col-md-4">
              <div class="footer-widget mail-subscribe-widget">
                <h4>Get in touch<span class="head-line"></span></h4>
                <p>Connect with us on social medias</p>

              </div>
              <div class="footer-widget social-widget">

                <ul class="social-list social-footer" style="float: left;">
                  <li>
                    <a class="facebook itl-tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/SODEC-Nepal-835881709824484"><i class="fa fa-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter itl-tooltip" data-placement="bottom" title="Twitter" href="http://twitter.com/sodec"><i class="fa fa-twitter"></i></a>
                  </li>
                  <li>
                    <a class="youtube itl-tooltip" data-placement="bottom" title="YouTube" href="https://www.youtube.com/channel/UCMIpOUiUmWi4iHOs4Xuz5NA"><i class="fa fa-youtube"></i></a>
                  </li>




                </ul>
                <!-- End Social Links -->

                <ul class="social-icons">


                  <!--<li>
                  <a class="facebook" href="https://www.facebook.com/SODEC-Nepal-835881709824484"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="http://twitter.com/sodec><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="youtube" href="e="YouTube" href="https://www.youtube.com/channel/UCMIpOUiUmWi4iHOs4Xuz5NA"><i class="fa fa-youtube"></i></a>
                </li>-->

                </ul>
              </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Subscribe & Social Links Widget -->


            <!-- Start Contact Widget -->
            <div class="col-md-4">
              <div class="footer-widget site-links">
            <h4>Useful Links<span class="head-line"></span></h4>
            <ul>
              <li><a href="http://www.presscouncilnepal.org/np" target="_blank">Press Council Nepal</a></li>
              <li><a href="http://www.fnjnepal.org/" target="_blank">Federation of Nepalese Journalists</a></li>
              <li><a href="http://moic.gov.np/np/" target="_blank">Ministry of Information and Communication</a></li>
              <li><a href="http://www.npc.gov.np/en" target="_blank">National Planning Commission</a></li>
			  <li><a href="http://www.unesco.org/new/en/kathmandu/" target="_blank">UNESCO Nepal</a></li>
			  <li><a href="http://www.nic.gov.np/en" target="_blank">National Information Commission</a></li>
			  <li><a href="http://www.aibd.org.my/" target="_blank">AIBD</a></li>
            </ul>
          </div>
            </div>
            <!-- .col-md-3 -->
            <!-- End Contact Widget -->





          </div>
          <!-- row -->

          <!-- Start Copyright -->
          <div class="copyright-section">
            <div class="row">
              <div class="col-md-6">
                <p>&copy; SODEC Nepal - All Rights Reserved </p>
              </div>
              <div class="col-md-6">
                <ul class="footer-nav">
                  <li>Powered by <a href="https://www.vedantaitech.com" target="_blank" class="red-text"> Vedanta InfoTech & Research Center</a></li>

                </ul>
              </div>
            </div>
          </div>
          <!-- End Copyright -->

        </div>
      </footer>
      <!-- End Footer -->

    </div>
    <!-- End Container -->

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


    <script type="text/javascript" src="js/script.js"></script>

</body>

</html>