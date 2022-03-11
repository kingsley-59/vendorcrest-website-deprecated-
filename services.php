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
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-5 mt-5 pt-5">
              <h1 class="mb-3">Our Services</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta veritatis in tenetur doloremque, maiores doloribus officia iste. Dolores.</p>
              <p><a href="#" class="btn btn-primary">Learn More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-7 mb-5">
            <h5 class="subtitle">Features</h5>
            <h2>A creative digital agency with excellence services</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-home"></span>
              </span>
              <h3> We Brand </h3>
              <p>Just as you think of us for anything digital marketing, we influence your customers and make them think of your brand first.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-face"></span>
              </span>
              <h3>We Strategize</h3>
              <p> Our proven strategies are tailored to your brand to see to a successful increase in your ROI.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="feature-1">
              <span class="wrap-icon">
                <span class="icon-drafts"></span>
              </span>
              <h3>We Support</h3>
              <p>We work with you to facilitate a steady business growth, providing you with the needed support that comes with the services we offer.</p>
            </div>
          </div>

        </div>



      </div>

      
    </div>

    <div class="">
      <div class="d-flex justify-content-center text-center bg-dark">
        <!-- form start -->
        <div class="col-md-6 col-xs-12">
          <div class="white-dots">
            <!-- <img src="images/img_2.jpg" alt="" class="img-fluid"> -->
            <div class="ftco-animate bg-primary align-self-stretch my-3 rounded px-4 py-3 w-100">
              <h2 class="heading-white mb-4"> Service Application</h2>
              <span><small>*all fields are required.</small></span>
              <form action="#" id="get_quote" class="appointment-form ftco-animate">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Full Name" id="f_name" required>
                </div>
                <!-- <div class="form-group">
		    					<input type="text" class="form-control" placeholder="Last Name" id="l_name" required>
                </div> -->
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email address" id="email_address" required>
                </div>
                <div class="form-group">
                  <div class="form-field">
                    <div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down bg-primary"></span></div>
                      <select name="" id="service" class="form-control" required>
                        <option value="">Select Service</option>
                        <option value="Mobile App Development">Web Development</option>
                        <option value="Branding">Graphics Design</option>
                        <option value="Flier Design">Search Engine Marketing</option>
                        <option value="Product Design">Mobile App Creation</option>
                        <option value="Web app Development">Content Development</option>
                        <option value="Website Development">Social Media Marketing</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Other Services">Other Services</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" id="tel_no" class="form-control" placeholder="Phone" required>
                </div>
                <div class="form-group">
                  <textarea name="" id="message" cols="30" rows="2" class="form-control" placeholder="Message" required></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Request A Quote" class="btn btn-secondary py-3 px-4">
                  <div id="form_response"></div>
                </div>
            </div>
            </form>
          </div>
        </div>
        <!-- form end -->
      </div>
    </div>

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