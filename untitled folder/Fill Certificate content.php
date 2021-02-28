<!doctype html>
<html class="no-js" lang="ar">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى أم القرى</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png"> -->
  <!-- Place favicon.ico in the root directory -->

  <!-- CSS here -->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <link rel="stylesheet" href="css/nice-select.css">
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/gijgo.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/slicknav.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
      text-align: center;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      min-width: 160px;


      box-shadow: #f3f3f3;
      z-index: 1;
    }

    .dropdown-content a:hover {
      background-color: #f1f1f1
    }

    .grey-box {
      background-color: #f6f6f6;
      border-bottom: 1px solid #dce8f1;
      padding: 25px;
    }

    #style-text-btn button {
      margin: 5px;
      width: 55px;
      font-size: 15px;
      padding: 0px;
      /* height:25px; */
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
      background-color: #07B5B2;
      border: none;
      color: white;
      /* padding: 15px 80px; */
      text-align: center;
      text-decoration: none;
      display: inline-block;
      text-transform: uppercase;
      font-size: 13px;
      -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
      /* margin: 5px 20px 40px 20px; */
      -webkit-transition: all 0.3s ease-in-out;
      -moz-transition: all 0.3s ease-in-out;
      -ms-transition: all 0.3s ease-in-out;
      -o-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
      background-color: #7CE2F6;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
      -moz-transform: scale(0.95);
      -webkit-transform: scale(0.95);
      -o-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }

    input[type=text],
    input[type=password],
    input[type=radio] {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      /* padding: 15px 32px; */
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      /* margin: 5px; */
      /* width: 85%; */
      border: 2px solid #f6f6f6;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus,
    input[type=password]:focus,
    input[type=radio]:focus {
      background-color: #fff;
      border-bottom: 2px solid #07B5B2;
    }

    input[type=text]:placeholder,
    input[type=password]:placeholder {
      color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }

      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @-moz-keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
      }

      to {
        opacity: 1;
      }
    }

    .fadeIn {
      opacity: 0;
      -webkit-animation: fadeIn ease-in 1;
      -moz-animation: fadeIn ease-in 1;
      animation: fadeIn ease-in 1;

      -webkit-animation-fill-mode: forwards;
      -moz-animation-fill-mode: forwards;
      animation-fill-mode: forwards;

      -webkit-animation-duration: 1s;
      -moz-animation-duration: 1s;
      animation-duration: 1s;
    }

    .fadeIn.first {
      -webkit-animation-delay: 0.4s;
      -moz-animation-delay: 0.4s;
      animation-delay: 0.4s;
    }

    .fadeIn.second {
      -webkit-animation-delay: 0.6s;
      -moz-animation-delay: 0.6s;
      animation-delay: 0.6s;
    }

    .fadeIn.third {
      -webkit-animation-delay: 0.8s;
      -moz-animation-delay: 0.8s;
      animation-delay: 0.8s;
    }

    .fadeIn.fourth {
      -webkit-animation-delay: 1s;
      -moz-animation-delay: 1s;
      animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
      display: block;
      left: 0;
      bottom: -10px;
      width: 0;
      height: 2px;
      background-color: #07B5B2;
      content: "";
      transition: width 0.2s;
    }

    .underlineHover:hover {
      color: #0d0d0d;
    }

    .underlineHover:hover:after {
      width: 100%;
    }



    /* OTHERS */

    *:focus {
      outline: none;
    }
  </style>
</head>

<body>


  <?php

  include "Asrar-files/config.php";

  //  Save Canvas image to folder upload 
  if (isset($_POST['data'])) {

    $_SESSION["IslamicVolunteerID"] = 111; // delete it , should be their before from start
    $IslamicVolunteerID = $_SESSION["IslamicVolunteerID"];
    $name = mktime();
    $img = $_POST['data'];
    $img = str_replace('data:image/png;base64,', '', $img);
    $img = str_replace(' ', '+', $img);
    $data = base64_decode($img);
    $name = '' . $name . '.png';
    $file = $_SERVER['DOCUMENT_ROOT'] . '/Certificates/' . $name;
    $img = file_put_contents($file, $data);

    //  insert image to DB in Certificate table by update row
    $query = "UPDATE `IslamicVolunteer` SET  `CertificateName`='$name' , `havingCertificate` = '1'  where `IslamicVolunteerID`=$IslamicVolunteerID";
    if ($connect->query($query) === TRUE) {
      echo "added record  successfully";
    } else {
      echo "Error: " . $query . "<br>" . $connect->error;
    }
  }



  ?>


  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div class="header-top_area">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-8">
              <div class="short_contact_list">
                <ul>
                  <li> <img src="Asrar-files/logo-1.png" alt="" style="width:150px;"></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-4">


              <div class="social_media_links d-none d-lg-block">
                <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                <a dir="rtl" href="Personal Page for Faculty Member.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px;">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- volunteer  -->
            <div class="col-xl-10 col-lg-10">
              <div class="main-menu">
                <nav>
                  <ul id="navigation">

                    <div class="dropdown">
                      <li><a href="" style="font-size:15px;"> متابـــعة طالبـــات المصلـــى <i class="ti-angle-down"></i></a>
                        <ul class="submenu" id="listShad1" style="text-align:center;">
                          <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="follow up Quran student.php">طالبات حلقات التقويه</a></li>
                          <li style="padding-top:10px; padding-bottom:10px;" class="dropdown-content"><a href="follow up islamic  student.php">طالبات الدروس الاسلامية </a></li>
                        </ul>
                      </li>
                    </div>


                    <li><a style="font-size:15px;">|</a></li>
                    <div class="dropdown">
                      <li><a href="" style="font-size:15px;"> طلـــــب تطـــوع <i class="ti-angle-down"></i></a>
                        <ul class="submenu" id="listShad1" style="text-align:center;">
                          <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href=" requesting form as Quran volunteer.php">حلقـــات التقـــوية</a></li>
                          <li style="padding-top:10px; padding-bottom:10px;" class="dropdown-content"><a href=" requesting form as Islamic volunteer.php">الــدروس الاســـلاميـة </a></li>
                        </ul>
                      </li>
                    </div>

                    <li><a style="font-size:15px;">|</a></li>

                    <div class="dropdown">
                      <li><a href="FollowUpMain.php" style="font-size:15px;">متابـــعة طالبـــات النشـــاط </i></a>

                      </li>
                    </div>


                    <li><a style="font-size:15px;">|</a></li>

                    <div class="dropdown">
                      <li><a href="" style="font-size:15px;"> تحديـــد النشـــاط <i class="ti-angle-down"></i></a>
                        <ul class="submenu" id="listShad1" style="text-align:center;">
                          <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="Determine  Islamic activity.php">نشاط الدروس الاسلامية</a></li>
                          <li style="padding-top:10px; padding-bottom:10px;" class="dropdown-content"><a href="Determine  Quran activity.php">نشاط حلقات القران</a></li>
                        </ul>
                      </li>
                    </div>
                  </ul>
                </nav>
              </div>
            </div>

            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area" style="padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url(Asrar-files/2.png);   background-size:auto;   background-position:top ; ">
      <div class="row text-right" style="margin-left:67%; margin-top:-26%;">
        <div class="col-12 text-right">
          <div class="section_title text-right mb-55">
            <h3 dir="rtl"><span> تعبئة محتوى الشهادة</span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->

  <div data-scroll-index='1' class="make_donation_area section_padding" style="margin-top:-35%;">
    <div class="container">
      <div class="section-top-border">
        <div class="row grey-box">
          <div class="col-md-4" style="border-right: #fff 2px solid;">
            <div class="single-defination">
              <h4 class="mb-20 text-center" dir="rtl" style=" direction: rtl;unicode-bidi: embed; margin-top: 15px; "><span dir="rtl"> أختاري اللون والقياسات المناسبة للنص &nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
              <input class="btn btn-outline-info form-control" type="color" value="#000000" id="colorWell" style="margin-top:53px;">
            </div>
            <div class="row text-center">
              <div class="col-md-12 text-center" id="style-text-btn">
                <br>
                <button class="genric-btn success-border radius small text-center" type="button" onClick="left()">←</button>
                <button class="genric-btn success-border radius small text-center" type="button" onClick="right()">→</button>
                <button class="genric-btn success-border radius small text-center" type="button" onClick="down()">↓</button>
                <button class="genric-btn success-border radius small text-center" type="button" onClick="up()">↑</button>
                <button class="genric-btn success-border radius small text-center" type="button" onClick="sizeD()">-</button>
                <button class="genric-btn success-border radius small text-center" type="button" onClick="sizeI()">+</button>

              </div>
            </div>
          </div>
          <div class="col-md-4" style="border-right: #fff 2px solid;">
            <div class="single-defination">
              <h4 class="mb-20 text-center" dir="rtl" style=" direction: rtl;unicode-bidi: embed; margin-top:15px;"><span dir="rtl"> لتغير القياسات أو اللون قومي بإختيار النص المراد تغيره ثم الضغط على اختيار&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
              <div class="row text-right">
                <div class="col-md-12 text-right " id="div-text">
                  <br>
                  <select class=" text-right success-border form-select nice-select" id="text-array">
                  </select>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4" dir="rtl">
            <div class="single-defination" dir="rtl" style=" direction: rtl;">
              <h4 class="mb-20 text-center" dir="rtl" style=" direction: rtl;unicode-bidi: embed; margin-top:15px;"><span dir="rtl"> أدخلي النص الذي تريدين ظهوره على الشهادة</span></h4>
              <div class="mt-10">
                <!-- <input class="single-textarea fadeIn second" placeholder="النص على الشهادة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'النص'" dir="rtl" id="text-message"> -->
                <input type="text" class="single-textarea fadeIn second text-center" placeholder="النص على الشهادة" dir="rtl" id="text-message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'النص على الشهادة'" style="background-color:#fff; margin-top:10px;">
                <!-- </textarea> -->
                <div class="col-12">
                  <div class="donate_now_btn text-center" style="margin-top: 10px;">
                    <a class="genric-btn success-border radius" onclick="addText()">إضافة النص</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div class="row grey-box">
        <div class="col-12">
          <div class="container">
            <div>
              <canvas id="canvas" dir="rtl" width="450" height="1000"></canvas>
            </div>
            <br>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-12 grey-box">
          <div class="text-center">
            <!-- <a  class="boxed-btn4" onclick="sendCertificate()" id="save-c">إرسال</a> -->
            <a class="boxed-btn4" onclick="sendCertificate()" id="save-c" style="color:#fff;" onMouseOut="this.style.color='#fff'" onMouseOver="this.style.color='#07B5B2'">إرسال</a>

          </div>
          <!-- <img src="" id="canvasImage" /> -->
        </div>
      </div>

    </div>
  </div>


  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8; margin-top:10%;">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4 ">
          <div class="footer_widget">
            <div class="footer_logo">

              <img src="Asrar-files/logo-footer.png" alt="" style="padding-top: 9px;">

            </div>
          </div>
        </div>
        <div class="col-xl-2 col-md-6 col-lg-2">
          <div class="footer_widget" style="padding-top:20px ;">
            <a href="#" style="color:#070808">
              <strong class="footer_title">
                مـــن نــحـــن
              </strong>
            </a>
          </div>
        </div>
        <div class="col-xl-2 col-md-6 col-lg-2">
          <div class="footer_widget" style="  padding-top: 20px">
            <a href="#" style="color:#070808">
              <strong class="footer_title">
                الـــدعـــم الـفــنـــي
              </strong>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-md-6 col-lg-3">
          <div class="footer_widget" style="  padding-top: 20px">
            <a href="#" style="color:#070808">
              <strong class="footer_title">
                طريقة استخدام الموقع
              </strong>
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>

  </footer>
  <!-- footer_end  -->

  <!-- link that opens popup -->

  <!-- JS here -->
  <script src="Asrar-files/Fill Certificate content.js"></script>
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>
  <!--contact js-->
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>

  <script src="js/main.js"></script>
  <script>
    function sendCertificate() {
      var canvas = document.querySelector('#canvas');
      var canvasData = canvas.toDataURL("image/png");
      $.ajax({
        url: 'Fill Certificate content.php',
        type: 'POST',
        data: {
          data: canvasData
        },
        success: function() {
          alert();

        }
      });
    }

    function alert() {
      Swal.fire({
        icon: 'success',
        title: 'تم إرسال الشهادة بنجاح',
        showConfirmButton: false,
        timer: 2000
      })
      window.setTimeout(function() {
        location.replace("Personal Page for Faculty Member .php");
      }, 2100);

    }
  </script>


</body>

</html>