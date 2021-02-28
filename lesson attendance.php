<!doctype html>
<?php
session_start();
$connect = mysqli_connect('localhost','root','05371433','almusalla');

  ?>
<html class="no-js" lang="ar">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى أم القرى </title>
  <link rel = "icon" type = "image/png" href ="image_HomePage/logoicon.png">

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- <link rel="manifest" href="site.webmanifest"> -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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
  <link rel="stylesheet" type="text/css" href="css_nuha/list.css">
  <link rel="stylesheet" type="text/css" href="css_nuha/formQuranVolunteer.css">

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
  #customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #customers td, #customers th {
    border: 2px solid #ddd;
    padding: 8px;
      text-align:center;

  }

  #customers tr:nth-child(even){background-color: #f2f2f2;}

  #customers tr:hover {background-color: #ddd;}

  #customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #28d1cf;
    color: white;
  }

label , input[type=text] {
    width:30%;


    border: none;
    border-bottom: 2px solid #07b5b2;
  }

  </style>

</head>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


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
                <a dir="rtl" href="Personal Page for Student.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px;">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- student -->
            <div class="col-xl-10 col-lg-10" style="padding-right:14%">
        <div class="main-menu">
          <nav>
            <ul id="navigation">


              <li ><a href="" class="dropdown" style="font-size:15px;"> الــدروس المسجــلة <i class="ti-angle-down"></i></a>
                <ul class="submenu" id="listShad1" style="text-align:center;">
                  <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="registered course activity.php" >أنشـــطة المــواد</a></li>
                  <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href="registered lesson.php">دروس المصلــى </a></li>
                    </ul>
              </li>


<li><a style="font-size:15px;">|</a></li>


              <li><a href="course Activities.php" style="font-size:15px;">الأنشــطة</li></a>
              <li><a style="font-size:15px;">|</a></li>
              <li ><a href="" class="dropdown" style="font-size:15px;">دروس المصلى<i class="ti-angle-down"></i></a>
                <ul class="submenu" id="listShad1" style="text-align:center;">
                  <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="Quran_Lesson.php" >حلقات التقوية</a></li>
                  <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href="almosalla Lessons .php">الدروس الإسلامية </a></li>
                    </ul>
              </li>

            </ul>
          </nav>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </header>
  <!-- header-end -->

  <!-- slider_area_start -->
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url( image_footer/2.png);   background-size:auto;   background-position:top ;">


    <div class="row text-right" style="margin-left:60%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span> جدول متابعة الحضور للدروس الاسلامية  </span></h3>
                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->
   

 <div  style="padding-left:7% ; padding-right:7% ; margin-top:-22% ; padding-bottom:15%">
  <table id="customers" dir="rtl">
    <tr >
    <th colspan="1"style=" background-color: #07b5b2"> --- </th>
    <th  colspan="8"style=" background-color: #07b5b2"> الــلــقــــــــــــــاءات</th>
    <th colspan="1"style=" background-color: #07b5b2">---</th>


    </tr>

    <tr>
      <th>اسم الطالبة </th>
       <th>اللقاء الاول</th>
      <th>اللقاء الثاني </th>
      <th>اللقاء  الثالث </th>
      <th>اللقاء الرابع</th>
      <th>اللقاء الخامس</th>
      <th>اللقاء السادس</th>
      <th>اللقاء السابع</th>
      <th>اللقاء الثامن</th>
      <th>استحقاق الشهادة</th>
<?php
$name;
$student_id= $_SESSION['studentid'];
$LessonID = $_GET['lessonID'];
$sql3 = "SELECT student.name FROM student WHERE university_ID=$student_id ";
$result3 = mysqli_query($connect,$sql3);
while ($row = mysqli_fetch_array($result3, MYSQLI_NUM)) {
    $name=$row[0];}


$worthing =0;
$sql1 = "SELECT * FROM worthingcertificate WHERE Student_ID=$student_id AND IslamicVolunteerID = $LessonID";
if ($result1 = $connect-> query($sql1)) {
 
  if(mysqli_num_rows($result1)>0){
    $worthing =1;
}}

$sql = "SELECT * FROM attendance WHERE student_ID=$student_id AND IslamicVolunteerID = $LessonID And activityid	='0'";
$result = mysqli_query($connect,$sql);
$meeting = array();
$meeting_state = array();
 
$i=0;
while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
  $meeting[$i]=$row[4];
    $meeting_state[$i]=$row[5];

 $i=$i+1;
}   
 
  ?>
    </tr>
    <tr>
    <td> <?php echo $name;  ?> </td>
      <td> <?php if($meeting_state[0]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[1]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[2]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[3]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[4]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[5]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[6]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($meeting_state[7]==1){ echo "&#10004";}  ?> </td>
      <td> <?php if($worthing==1){ echo "&#10004";}  ?> </td>

    </tr>

  </table>
</div>





  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4 ">
          <div class="footer_widget">
            <div class="footer_logo">

              <img src="img/logo-footer.png" alt="" style="padding-top: 9px;">

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
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
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
</body>

</html>
