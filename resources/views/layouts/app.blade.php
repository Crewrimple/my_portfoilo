<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
  
  <title>Netronic</title>

  <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="../assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="../assets/css/topbar.virtual.css">
</head>
<body class="theme-red">
  
  <!-- Back to top button -->
  <div class="btn-back_to_top">
    <span class="ti-arrow-up"></span>
  </div>
  
  <!-- Setting button -->
  <div class="config">
    <div class="template-config">
      <!-- Settings -->
      <div class="d-block">
        <button class="btn btn-fab btn-sm" id="sideel" title="Settings"><span class="ti-settings"></span></button>
      </div>
      <!-- Puschase -->
      <div class="d-block">
        <a href="https://macodeid.com/projects/virtual-folio/" class="btn btn-fab btn-sm" title="Get this template" data-toggle="tooltip" data-placement="left"><span class="ti-download"></span></a>
      </div>
      <!-- Help -->
      <div class="d-block">
        <a href="#" class="btn btn-fab btn-sm" title="Help" data-toggle="tooltip" data-placement="left"><span class="ti-help"></span></a>
      </div>
    </div>
    
  </div>
  
  <div class="vg-page page-home" id="home" style="background-image: url(../assets/img/bg_image_1.jpg)">
    <!-- Navbar -->
    @include('layouts.navbar')
    <!-- End Navbar -->
    <!-- Caption header -->
    @include('layouts.header')  
     <!-- End Caption header -->
    <div class="floating-button"><span class="ti-mouse"></span></div>
  </div>
  
 @include('layouts.about')
  
  @include('layouts.service')
  
 
  
  <!-- Portfolio page -->
  
 <!-- End Portfolio page -->
  
  <!-- Testimonial -->
 
  
  <!-- Client -->
  <div class="vg-page page-client">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_1.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_2.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_3.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_4.svg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_5.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_6.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_7.svg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-lg-4 col-xl-3 item">
          <div class="img-place wow fadeInUp">
            <img src="../assets/img/logo/company_8.svg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div> <!-- End client -->
  
  <!-- Blog -->
@include('layouts.blog')
  <!-- End blog -->
  
  <!-- Contact -->
@include('layouts.contact') 
 <!-- End Contact -->
  
  <!-- Footer -->
@include('layouts.footer')  
  <!-- End footer -->
  
  
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
    
  <script src="../assets/vendor/owl-carousel/owl.carousel.min.js"></script>
    
  <script src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    
  <script src="../assets/vendor/isotope/isotope.pkgd.min.js"></script>
    
  <script src="../assets/vendor/nice-select/js/jquery.nice-select.min.js"></script>
    
  <script src="../assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

  <script src="../assets/vendor/wow/wow.min.js"></script>

  <script src="../assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>

  <script src="../assets/vendor/waypoints/jquery.waypoints.min.js"></script>

  <script src="../assets/js/google-maps.js"></script>
    
  <script src="../assets/js/topbar-virtual.js"></script>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>
  
</body>
</html>