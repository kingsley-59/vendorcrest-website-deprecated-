<?php

include("admin/config/database.php");
$db = $conn;


function get_title($section)
{
  global $db;
  $query = "SELECT * FROM home_content WHERE content_section='$section'";
  $get_result = mysqli_query($db, $query);
  if ($get_result) {
    $get_row = mysqli_fetch_assoc($get_result);
    return $get_row["title"];
  } else {
    return "Couldn't get get_title query results for " . $section;
  }
}

function get_subtitle($section)
{
  global $db;
  $query = "SELECT * FROM home_content WHERE content_section='$section'";
  $get_result = mysqli_query($db, $query);
  if ($get_result) {
    $get_row = mysqli_fetch_assoc($get_result);
    return $get_row["subtitle"];
  } else {
    return "Couldn't get get_title query results for " . $section;
  }
}

function get_description($section)
{
  global $db;
  $query = "SELECT * FROM home_content WHERE content_section='$section'";
  $get_result = mysqli_query($db, $query);
  if ($get_result) {
    $get_row = mysqli_fetch_assoc($get_result);
    return $get_row["description"];
  } else {
    return "Couldn't get get_title query results for " . $section;
  }
}


?>


<!doctype html>
<html lang="en">

<head>
  <title>VendorCrest &mdash; Digital Marketing agency</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=DM+Sans:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/aos.css">

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap" id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <?php include("./partials/Header.php") ?>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg')">
        <div class="container">
          <div class="d-flex justify-content-center align-items-center text-center mt-5 pt-5">
            <div class="col-md-6 col-xs-9  pt-2">
              <h1 class="mb-3"><?php //echo get_subtitle('Header'); 
                                ?>Digital Agency With Excellent Services.</h1>
              <p><?php //echo get_description('Header'); 
                  ?> You are here because you are a business owner, and you know we are the best when it comes to leveraging the digital space to lead your business to its crest. We are here for you.</p>
              <p class="mt-5"><a href="about.php" class="btn btn-primary">About Us</a></p>
            </div>

            <!-- form start -->

            <!-- form end -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="site-section">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7 mb-5">
          <h5 class="subtitle"><?php //echo get_title('Services'); 
                                ?>What We Do</h5>
          <h2><?php //echo get_subtitle(('Services')); 
              ?> We Lead your Business to its Crest.</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 text-center">
          <div class="feature-1">
            <span class="wrap-icon">
              <span class="icon-home"></span>
            </span>
            <h3>We Brand</h3>
            <p>Just as you think of us for anything digital marketing, we influence your customers and make them think of your brand first.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 text-center">
          <div class="feature-1">
            <span class="wrap-icon">
              <span class="icon-face"></span>
            </span>
            <h3>We Strategize</h3>
            <p> Our proven strategies are tailored to your brand to see to a successful increase in your ROI.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0 text-center">
          <div class="feature-1">
            <span class="wrap-icon">
              <span class="icon-drafts"></span>
            </span>
            <h3>We Support</h3>
            <p>We work with you to facilitate a steady business growth, providing you with the needed support that comes with the services we offer.</p>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 text-center">
          <a href="services.php" class="btn btn-primary">View All Services</a>
        </div>
      </div>
    </div>
  </div>




  <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 class="h5 mb-4"><?php echo get_subtitle('Our Expertise'); ?></h2>
            <p><?php echo get_description('Our Expertise'); ?></p>

            <div class="d-flex align-items-center">
              <span class="sign mr-4">
                <img src="images/signature.svg" alt="" class="img-fluid">
              </span>
              <div>
                <span class="d-block font-weight-bold">Oloto Mmesomma</span>
                <span>CEO &amp; Co-Founder </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 ml-auto">
            <h2 class="h5 mb-4"><?php echo get_title('Our Expertise'); ?></h2>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Writing</span>
                <span class="ml-auto">55%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 55%;" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>WordPress</span>
                <span class="ml-auto">85%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>Bootstrap</span>
                <span class="ml-auto">93%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 93%;" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress-wrap mb-4">
              <div class="d-flex">
                <span>jQuery</span>
                <span class="ml-auto">83%</span>
              </div>
              <div class="progress rounded-0" style="height: 7px;">
                <div class="progress-bar" role="progressbar" style="width: 83%;" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div> -->


  <!-- <div class="site-section counter-wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-building-o wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">14k</span>
                <span class="caption">number of firms</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-home2 wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">2k</span>
                <span class="caption">in house crews</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="d-flex align-items-center counter">
              <span class="icon-code wrap-icon mr-3"></span>
              <div class="text">
                <span class="d-block number">3920k</span>
                <span class="caption">line of codes</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->



  <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 text-center">
            <h3 class="section-heading text-center"><?php echo get_title('News and Events'); ?></h3>
            <p class="mb-5 lead"><?php get_subtitle('News and Events'); ?>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>

          </div>

        </div>
        <div class="row">
          <div class="col-12">

            <div class="nonloop-block-13 owl-carousel">
              <div class="news-1" style="background-image: url('images/img_1.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('images/img_2.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('images/img_3.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>

              <div class="news-1" style="background-image: url('images/img_3.jpg');">
                <div class="text">
                  <h3><a href="#">Consectetur adipisicing elit</a></h3>
                  <span class="category d-block mb-3">Web Development</span>
                  <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  <a href="#" class="d-block arrow-wrap"><span class="icon-arrow_forward"></span></a>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div> -->




  <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-7 col-xs-8 text-center mb-5">
          <h2 class="text-white section-heading primary-color-icon text-center">More Services<?php //echo get_title('More Services'); 
                                                                                              ?></h2>
          <p class="lead text-white">Our services are designed and carefully selected to meet your business marketing needs with the sole aim of increasing turnover and brand awareness.<?php //echo get_description('More Services'); 
                                                                                                                                                                                          ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="icon-phonelink"></span>
            </span>
            <div class="service-1-contents">
              <h3>Web Development</h3>
              <p>Our team of designers and developers are ever ready to give your brand a voice on the web.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="icon-redeem"></span>
            </span>
            <div class="service-1-contents">
              <h3>Graphics Design</h3>
              <p>Let your business leave a mark in the minds of potential customers through impressive branding and design.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="icon-child_friendly"></span>
            </span>
            <div class="service-1-contents">
              <h3>Search Engine Marketing</h3>
              <p>Optimize search engine marketing by using the most suited keywords for your business.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="icon-attach_money"></span>
            </span>
            <div class="service-1-contents">
              <h3>Mobile App Creation</h3>
              <p>We have all it takes to help you offer the best services to your customers through mobile apps</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="icon-build"></span>
            </span>
            <div class="service-1-contents">
              <h3>Content Development</h3>
              <p>Keep your customers enchanted with impressive content in all aspects of customer interaction</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="service-1">
            <span class="service-1-icon">
              <span class="icon-photo_camera"></span>
            </span>
            <div class="service-1-contents">
              <h3>Social Media Marketing</h3>
              <p>Make your brand a household name with extensive publicity through various socal media marketing strategies.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>




  <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="section-heading text-center"><?php echo get_title('Client Reviews'); ?></h2>
            <p class="lead"><?php echo get_description('Client Reviews'); ?></p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="images/person_1.jpg" alt="Image" class="img-fluid mx-auto d-block">
                <span>Mike Fisher</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="images/person_2.jpg" alt="Image" class="img-fluid mx-auto d-block">
                <span>Jean Stanley</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="testimonial-2 text-center">
              <div class="v-card mb-4 text-center">
                <img src="images/person_3.jpg" alt="Image" class="img-fluid mx-auto d-block">
                <span>Katie Rose</span>
              </div>
              <blockquote>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt eveniet veniam. Ipsam, nam, voluptatum"</p>
              </blockquote>
              
            </div>
          </div>
        </div>
      </div>
    </div> -->

  <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_1.jpg');">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-7 text-center mb-5">
          <h2 class="text-white section-heading primary-color-icon text-center">Get in touch<?php //echo get_title('Contact Us'); 
                                                                                            ?></h2>
          <p class="lead text-white mb-5">Send us a message let's discuss your idea as you reach for your crest!<?php //echo get_description('Contact Us'); 
                                                                                                                ?></p>
          <!-- <p><a href="#" id="myBtn" class="btn btn-primary">Contact Us Now</a></p> -->
          <p><button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Contact Us</button></p>
          <!-- Modal -->
          <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                  <h4 class="modal-title">Let's connect!</h4>
                </div>
                <div class="modal-body">
                  <div class="container">
                    <form id="contact_form">
                      <div class="form-group">
                        <input type="text" name="first_name" id="ct_name" class="form-control" placeholder="tell us your name" required>
                      </div>
                      <div class="form-group">
                        <input type="email" name="email" id="ct_email" class="form-control" placeholder="your name" required>
                      </div>
                      <div class="form-group">
                        <input type="text" name="contact_subject" id="ct_subject" class="form-control" placeholder="add a subject" required>
                      </div>
                      <div class="form-group">
                        <!-- <label for="message">Message: </label> -->
                        <textarea name="contact_message" id="ct_message" cols="30" rows="5" class="form-control" placeholder="write your message" required></textarea>
                      </div>
                      <div class="checkbox">
                        <label for="newsletter"><input type="checkbox" name="nl_sub" id="ct_nl_subscribe"> Subscribe for our newsletter</label>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Send Message" class="btn btn-success" id="ctform_submit">
                      </div>
                      <div class="form-group" id="contact_form_resp">

                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="site-section bg-white">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-7 text-center mb-5">
            <h2 class="section-heading text-center"><?php echo get_title('Our Blog'); ?></h2>
            <p><?php echo get_description('Our Blog'); ?></p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_1.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_2.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="images/img_3.jpg" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">Lorem ipsum dolor sit amet</a></h2>
                <span class="meta d-inline-block mb-3">July 17, 2019 <span class="mx-2">by</span> <a href="#">Admin</a></span>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores eos soluta, dolore harum molestias consectetur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->


  <?php include("./partials/Footer.php"); ?>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/620ed4a91ffac05b1d7a748e/1fs4ute17';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  <script src="js/main.js"></script>

</body>

</html>