<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAcademy </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- links for the navbar that i've made  -->
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styleloggedin.css">
    <!-- End of the links for the navbar that i've made  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../../css/aos.css">
    <link rel="stylesheet" href="../../../css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar  js-sticky-header site-navbar-target" role="banner">
      <div class="topnav" id="myTopnav">
      <a href="../../../loggedin.php" class="active">Home</a>
          <?php
          if (isset($_SESSION['userId'])){
            echo '<a href="../../../loggedin/profile.php" name="profile">Profile</a>
                  <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
          }
           ?>
         </div>
      </div>

    </header>

    <div class="intro-section single-cover" id="home-section">

      <div class="slide-1 text-white" style="background-image: url('../../../images/course7.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="text-white">Python Tutorials Arabic|| دورة برمجة بايثون</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="text-white">8 Lessons / 5 Week &bullet; 1000 students &bullet; <a href="#" class="text-white">2 comments</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Course Description</h3>
              <p>سلسلة درس لتعلم برمجة البايثون
                في هذه السلسة سنشرح كل من
                1- اساسيات هذه الللغة
                2- برمجة كائنية التوجه
                3- الملفات وقواعد البيانات
                المستوى المطلوب للدورة
                شخص لايعرف اي شيئ عن البرمجة</p>
            </div>

            <div class="pt-5">
              <h3 class="mb-5">2 Comments</h3>
              <ul class="comment-list">

                <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment3.jpg" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Mariem Frikhi</h3>
                    <div class="meta">August 2, 2020 at 7:00pm</div>
                    <p>Thank you !</p>
                  </div>
                </li>

                <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment1.jpg" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Khalil Riahi</h3>
                    <div class="meta">March 19, 2020 at 5:40am</div>
                    <p>Good content with a lot of details!</p>
                  </div>

                </li>
              </ul>
              <!-- END comment-list -->
            </div>

          </div>

          <div class="col-lg-4 pl-lg-5">
            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Course Instructor</h3>
              <div class="mb-4 text-center">
                <img src="../../../images/thenewbaghdad.jpg" alt="Image" class="w-25 rounded-circle mb-4">
                <h3 class="h5 text-black mb-4">The New Baghdad</h3>
                <p>قناة تعليمية متخصصة في تعليم كل مايخص عالم التقنية  من لغات برمجة وامن معلومات بشكل مجاني وعالي الجودة</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>




  </div> <!-- .site-wrap -->

  <script src="../../../js/jquery-3.3.1.min.js"></script>
  <script src="../../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../js/jquery-ui.js"></script>
  <script src="../../../js/popper.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/owl.carousel.min.js"></script>
  <script src="../../../js/jquery.stellar.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../../js/jquery.easing.1.3.js"></script>
  <script src="../../../js/aos.js"></script>
  <script src="../../../js/jquery.fancybox.min.js"></script>
  <script src="../../../js/jquery.sticky.js"></script>


  <script src="../../../js/main.js"></script>

  </body>
</html>
