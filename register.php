<?php 
    session_start();
    include('server.php'); 
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="//fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

  <title>บ้าน NTR.</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>
<style>
  img.ntr {
    height: 50%;
    width: 50%;
  }	
  </style>

<body>
<!-- header top-->
<!-- //header top-->

<!--header-->
<header>
  <div class="container">
      <nav class="navbar navbar-expand-lg">
        <div class="logo">
          <a href="index.html"><img class="ntr" src="assets/images/logontr.jfif" width="500" height="500" alt=""/></a>		 
        </div>
          <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div  class="collapse navbar-collapse" id="navbarTogglerDemo02">
            
              <ul class="navbar-nav mx-lg-auto" class="navbar-nav">
                  <li class="nav-item active">
                      <a class="nav-link" href="index.html">หน้าแรก <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link  dropdown-toggle" href="#" data-toggle="dropdown">  โครงการบ้าน NTR  </a>
                     <ul class="dropdown-menu">
                       <li><a class="dropdown-item" href="detail1.html"> บ้าน NTR สาขา 1</a></li>
                       <li><a class="dropdown-item" href="detail2.html"> บ้าน NTR สาขา 2 </a></li>
                       <li><a class="dropdown-item" href="detail3.html"> ทาวน์โฮม </a></li>
                     </ul>
                 </li>
                  <li class="nav-item @@about__active">
                      <a class="nav-link" href="promotion.html">โปรโมชั่น</a>
                  </li>
                  <li class="nav-item @@contact__active">
                      <a class="nav-link" href="contact.html">ติดต่อเรา</a>
                  </li>
                  <li class="nav-item @@contact__active">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
              </ul>           
          </div>
          

          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container py-1">
                              <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
  </div>
</header>
<!-- //header -->

<!-- contact breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-contact py-5">
        <div class="container py-lg-5 py-md-3">
            <h2 class="title">Register</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="index.html">หน้าแรก</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span>Register </li>
            </ul>
        </div>
    </div>
</section>
<!-- //contact breadcrumb -->

 <!-- contact-form -->

 <section class="w3l-contact-main" id="contact">
   <div class="contact-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
         <div class="form-top1">
         <h3 class="title-big text-center mb-2">ลงทะเบียน</h3>
         <p class="mb-lg-5 mb-4 text-center">โปรดป้อนข้อมูลเพื่อดำเนินการต่อ</p>
         <form action="register_db.php" method="post">
        <?php include('errors.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- Login -->
        <div class="form-top">
                   <label for="name">User Name</label>
                   <input class="form-control" type="text" name="username"  placeholder="username" >
                   <label for="email">Email</label>
                   <input class="form-control" type="text" name="email"  placeholder="email" >
                   <label for="password_1">Password</label>
                   <input class="form-control" type="password" name="password_1"  placeholder="รหัสผ่าน" > 
                   <label for="password_2">Confirm Password</label>
                   <input class="form-control" type="password" name="password_2"  placeholder="ยืนยันรหัสผ่าน" > 
                   <label for="name">Already a member?<a href="login.php">Sign in</a></label>                              
                 <div class="form-top-righ">
                  <button type="submit" class="btn btn-style btn-primary" name="reg_user">ลงทะเบียน</button>
                 </div>
               </div>
        
        <!-- <a class="navbar-brand" href="register.php"><img class="img-responsive" src="img/1.png" alt="Logo" /></a> -->
    </form>
           </div>
         </div>
       </div>
     </div>
   </div>
 <!-- //contact-form -->
</section>
 <!-- //contact-form -->
 
<!-- footer -->
<footer class="w3l-footer py-5">
  <div class="container pt-lg-5 pt-md-3">

    <!-- copyright -->
    <section class="w3l-footer-29-main w3l-copyright">
      <div class="text-center">
        <p class="copy-footer-29">© 2021 บ้าน NTR. All rights reserved. Design by <a href="https://w3layouts.com/"
            target="_blank">
            W3Layouts</a></p>
      </div>
    </section>
    <!-- //copyright -->

  </div>
  <!-- //footer bottom -->

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->

</footer>
<!-- //footer -->

<!-- Template JavaScript -->

<script src="assets/js/jquery-3.3.1.min.js"></script>

<script src="assets/js/theme-change.js"></script>

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- magnific popup -->

<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider -->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for banner slider -->

<!-- script for Testimonials-->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 30,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for Testimonials-->

<!-- script for services -->
<script>
  $(document).ready(function () {
    $('.owl-news').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        768: {
          items: 2,
          nav: false
        },
        1000: {
          items: 3,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for services -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<script src="assets/js/bootstrap.min.js"></script>

</body>

</html>