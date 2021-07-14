<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
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
  <link rel="stylesheet" href="print.css" media="print">
</head>
<style>
  img.ntr {
    height: 50%;
    width: 50%;
  }	
  </style>
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

 <!-- contact-form -->

 <section class="w3l-contact-main" id="contact">
   <div class="contact-infhny py-5">
     <div class="container py-lg-3">
       <div class="top-map">
         <div class="map-content-9">
           <form action="https://sendmail.w3layouts.com/submitForm" method="post">
             <div class="form-top1">
                  <div class="logo">
                    <img src="assets/images/logontr.jfif" width="110" height="110"/>
                  </div>
               <h3 class="title-big text-center mb-2">สัญญาการจองบ้านและที่ดิน</h3>
               <p class="mb-lg-5 mb-4 text-center">กรอกข้อมูลส่วนตัวในการจองสิทธิ์การสั่งจองบ้าน</p>
               <div class="form-top">
                 <div class="form-top">
                <label for="name">ชื่อ นามสกุล</label>
                   <input type="text" name="orderName" id="orderName" placeholder="ชื่อ" >
                <label for="name">ที่อยู่</label>
                   <input type="text" name="orderName" id="orderName" placeholder="ที่อยู่/บ้านเลขที่/ถนน/ตำบล/จังหวัด" >
                <label for="name">หมายเลขโทรศัพท์</label>
                   <input type="text" name="orderPhone" id="orderPhone"placeholder="หมายเลขโทรศัพท์" >
                <label for="name">E-mail</label>
                   <input type="email" name="orderemail" id="orderemail" placeholder="Email">
                 </div><br></br>
                 <div class="form-top-righ">
                   <button type="button" id="print" class="btn btn-style btn-primary" onclick="window.print();">PRINT</button>
                 </div>
               </div>
               <div class="none">
               <div class="text-lg-right text-center">
                  <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
    
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
               </div>
            </div>
             </div>
           </form>
         </div>
         <div class="cont-details">
           <ul class="address two">
             <li><span class="fa fa-map-marker" aria-hidden="true"></span>188 หมู่ที่ 7 ตำบลวัดจันทร์ อำเภอเมือง จังหวัดพิษณุโลก รหัสไปรษณีย์ 65000</li>
             <li><span class="fa fa-envelope" aria-hidden="true"></span><a
                 href="tiwat.s@psru.ac.th">tiwat.s@psru.ac.th</a></li>
             <li> <span class="fa fa-phone"></span>
               <a href="082 560 2630">082 560 2630</a></li>
           </ul>
         </div>
       </div>
     </div>
   </div>
   <!-- contact map -->

   <!-- //contact map -->
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