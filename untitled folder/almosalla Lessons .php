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

    .causes_content {
      /* height: 200px; */
      height: 310px;
    }
    .genric-btn.success {
      background-color: #07b5b2;
    }
  </style>
</head>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

  <?php
  include "Asrar-files/config.php";

  if (isset($_POST['data'])) {
    echo $_POST['data'];
    $_SESSION["StudentID"] = 437000; // delete it , should be their before from start
    $StudentID = $_SESSION["StudentID"]; //Student_ID Lesson_ID INT(10)
    $IslamicVolunteerID = $_POST['data'];
    echo $StudentID . " " . $IslamicVolunteerID;
    //  insert lesson and student id to RegisteredLesson to link student with register lesson
    $query = "INSERT INTO `RegisteredLesson` (`Student_ID`, `Lesson_ID`) VALUES ($StudentID,$IslamicVolunteerID ) ";
    if ($connect->query($query) === TRUE) {
      echo "Updated record  successfully";
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
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px; ">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- student -->
            <div class="col-xl-11 col-lg-11" style="padding-right:17%">
              <div class="main-menu">
              <nav>
                  <ul id="navigation">

                    <li><a href="registered lesson.php" style="font-size:15px;"> الــدروس المسجــلة </a>
                    <li><a style="font-size:15px;">|</a></li>
                    <li><a href="registered course activity.php" style="font-size:15px;"> الأنـشطـة المسجــلة </a>
                   
                    <li><a style="font-size:15px;">|</a></li>
                    <li><a href="almosalla Lessons.php" style="font-size:15px;">دروس المصلــى</a></li>
                    <li><a style="font-size:15px;">|</a></li>
                    <li><a href="course Activities.php" style="font-size:15px;">الأنشــطة</li></a>
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
            <h3 dir="rtl"><span> دروس المصلى</span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->
  <div class="popular_causes_area" dir="rtl" style="margin-top:-30%;">
    <div class="container">
      <div class="row" id="lesson-div">
        <!-- end lessons -->
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
  <!-- <script src="js/CertificateFill/index.js"></script>
  <script src="js/CertificateFill/jszip.js"></script> -->
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
  <script type="text/javascript">
    function alert() {
      Swal.fire({
        icon: 'success',
        title: 'تم تسجيلك بنجاح',
        showConfirmButton: false,
        timer: 2000
      })
    }
  </script>

  <script>
   
    var lesson_div = document.getElementById('lesson-div');
    $.ajax({
      url: 'Asrar-files/Islamic_lesson.php',
      type: 'get',
      dataType: 'JSON',
      success: function(response) {
        len = response.length;
        console.log(len);
        for (var i = 0; i < len; i++) {
          let FacultyMemberName = response[i].FacultyMemberName;
          let lessonName = response[i].lessonName;
          let lessonDate = response[i].lessonDate;
          let Day = response[i].Day;
          let meetingsNumber = response[i].meetingsNumber;
          let time = response[i].time;
          let IslamicVolunteerID = response[i].IslamicVolunteerID;
          FacultyMemberName = "د. " + FacultyMemberName;
          // FacultyMemberName=" ";
          lessonDate += " هـ ";
          if (Number(meetingsNumber) == 1) meetingsNumber = " أسبوع";
          if (Number(meetingsNumber) == 2) meetingsNumber = " أسبوعين";
          if (Number(meetingsNumber) > 2) meetingsNumber += " أسابيع";
          meetingsNumber = "لمدة " + meetingsNumber;
          let code =
            '<div class="col-lg-4 col-md-6"><div class="single_cause"><div class="causes_content text-center"><div class="custom_progress_bar">' +
            ' <div class="progress"><div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>' +
            ' </div></div><div class="balance d-flex justify-content-between align-items-center text-center">' +
            '<h3 class="text-center" style=" margin-left: auto; margin-right: auto;">' + lessonName + '<br>' +
            FacultyMemberName + '</h3> </div>' +
            '<p dir="rtl"><i class="fa fa-calendar"></i> ' + Day + ' ' + lessonDate + ' ' + meetingsNumber + '</p>' +
            '<p dir="rtl"><i class="fa fa-clock-o"></i> ' + time + '</p>' +
            '<a class="genric-btn success radius" onclick="registerLesson(event)" id=" ' + IslamicVolunteerID + ' " style="color: rgb(255, 255, 255); " onmouseout="this.style.color= `#fff` " onmouseover="this.style.color= `#07B5B2` " >التسجيل</a></div></div></div>';

          lesson_div.innerHTML += code;
        }
      }
    });
  </script>
  <script>
    // register student in islamic lesson
    function registerLesson(event) {
      var Lesson_ID = event.target.id;
      var StudentID = 437000; //should delete this 
      $.ajax({
        url: 'Asrar-files/RegisteredLesson.php',
        type: 'POST',
        data: {
          Lesson_ID: Lesson_ID,
          StudentID: StudentID
        },
        success: function() {
          alert();
        }
      });
    }
  </script>

</body>

</html>