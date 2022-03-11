<!doctype html>
<html lang="en">

  <head>
    <title>VendorCrest &mdash; Digital Maeketing agency</title>
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
        <div class="container" style="padding-bottom: 10px;margin-bottom: 0;">
          <div class="row align-items-center justify-content-center text-center" style="padding-top:20px; padding-bottom: 20px;">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3">About Us</h1>
              <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p> -->
              <p></p>
              <!-- <p><a href="#" class="btn btn-primary">Learn More</a></p> -->
            </div>
          </div>
          <div class="row align-items-start justify-content-center text-justify" style="padding-top: 35px;background-color: #ffffff0f;color: #444">
            <div class="col-xs-12 col-sm-9 col-md-6 m-3 p-3">
              <h3>Who We Are</h3>
              <p>
                Vendorcrest is your best choice. We are a team of talented young creatives who have had a fair share of what 
                it means to be lost in the noise of being digitally visible. As professionals, we know what it means to be on 
                the other side of being visible and have over time learnt how to not only help ourselves out, but also help 
                people like you who are interested in bringing their brands on to the digital space.
                Our services have been packaged to help you see the growth you desire even as we handle the most crucial 
                aspect of your business. We are your support system in the online world. Our aim is to see that you succeed 
                in your endeavors as a business owner, and we achieve this with the collective effort of every member of our 
                team. Just so you know, we care enough to guarantee a trust on every service we offer because your 
                satisfaction fuels ours.
              </p>
              <p>
                Vendorcrest helps you actualize your full potential as a business owner using the digital space as a medium. We help you identify and complete the missing piece to your business growth online by leveraging a bunch of tools at our disposal – including well-tailored strategies that help us monitor the right KPIs (key Performance Indicators) that flips your online visibility through the roof.
                We take that overwhelming feeling that comes with not being able to identify your business’ online needs, or not knowing exactly what to do to get the already identified needs fulfilled off you. We know just what to do to get you smiling again; this we do with all sense of professionalism.
                We focus on providing digital solutions ranging from web development, digital marketing, branding and designs, creative contents, SEO and social media management
                What’s more? We believe in the uniqueness that comes with your business, so we prioritize taking your business personal, and help you build a solid relationship with your existing customers. This way, we create a two-way trust – between you and your customers, and between you and us.
                The world is moving digital, and we are your best choice for leveraging this and funneling its perks to lead your business to its crest.
              </p>
            </div>
          </div>
          <div class="container-fluid">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <h2 class="text-dark section-heading primary-color-icon text-center">Get in touch<?php //echo get_title('Contact Us'); ?></h2>
            <p class="lead text-dark mb-5">Send us a message let's discuss your idea as you reach for your crest!<?php //echo get_description('Contact Us'); ?></p>
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
                <label for="name">Name: </label>
                <input type="text" name="contact_name" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email: </label>
                <input type="email" name="contact_email" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject: </label>
                <input type="text" name="contact_subject" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message: </label>
                <textarea name="contact_message" id="" cols="30" rows="5" class="form-control" required></textarea>
            </div>
            <div class="checkbox">
                <label for="newsletter"><input type="checkbox" name="nl_sub" id=""> Subscribe for our newsletter</label>
            </div>
            <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-success" id="ctform_submit">
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
      </div>
    </div>

    
      


    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <h2 class="h5 mb-4">Your digital partner starts here.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente reprehenderit aspernatur, reiciendis explicabo doloribus aperiam sed sequi, aut repudiandae magni nobis voluptatem!</p>

            <div class="d-flex align-items-center">
              <span class="sign mr-4">
                <img src="images/signature.svg" alt="" class="img-fluid">
              </span>
              <div>
                <span class="d-block font-weight-bold">Mr. John Doe</span>
                <span>CEO &amp; Co-Founder </span>
              </div>
            </div>
          </div>
          <div class="col-md-6 ml-auto">
            <h2 class="h5 mb-4">Our expertise and skills</h2>

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


    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center text-center mb-5 section-2-title">
          <div class="col-md-6">
            <h3 class="scissors text-center">Meet Our Team</h3>
            <p class="mb-5 lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure nesciunt nemo vel earum maxime neque!</p>
          </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_2.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_3.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_4.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_5.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-5">
            <div class="post-entry-1 h-100 person-1">
              
                <img src="images/person_1.jpg" alt="Image"
                 class="img-fluid">
            
              <div class="post-entry-1-contents">
                <span class="meta">Founder</span>
                <h2>James Doe</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, sapiente.</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div> -->


    <!-- <div class="site-section section-3" data-stellar-background-ratio="0.5" style="background-image: url('images/hero_2.jpg');">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-7 text-center mb-5">
            <p class="lead text-white">Suscipit libero voluptate</p>
            <h2 class="text-white">Get ready to start your exciting journey. Our agency</h2>
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

    <script src="js/main.js"></script>

  </body>

</html>

