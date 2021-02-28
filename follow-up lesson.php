<!doctype html>
<html class="no-js" lang="ar">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى أم القرى</title>
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
  <link rel="stylesheet" href="css_personal page/list.css">
  <link rel="stylesheet" href="css_students follow-up/select.css">

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
<?php
session_start();
$connect = mysqli_connect('localhost','root','05371433','almusalla');

$studentid=$_SESSION['studentid'];
$volunteername =$_GET['volunteer'];

?>

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


  .box select {
    background-color:#07b5b2;
    color:#ffffff;
    padding-left:12%;
    box-shadow:#f3f3f3;
  }

  .box option {
    color:inherit;
  background-color:#f3f3f3;
    color:#07b5b2;
  }

  /* for list at the beganing*/


  .dropbsearch{
  background-color: #07b5b2;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  }

  .dropbsearch:hover, .dropbsearch:focus {
  background-color: #099190;
  }


  #myInput {
  box-sizing: border-box;
  background-image: url('image-students attendance/searchIcon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  width: 100%;
  border-bottom: 1px solid #ddd;
  }

  #myInput:focus {outline: 3px solid #ddd;}

  .dropdown-list {
  position: relative;
  display: inline-block;
  }

  .dropdown-content-list {
  display: none;
  position: absolute;
  background-color: #f0f7f7;
  min-width: 95%;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
  }

  .dropdown-content-list a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: right;
  }

  .dropdown-list a:hover {background-color: #ddd;}

  .show {display: block;}

  #myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
  }

  #myUL li a {
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f0f7f7;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block;

  }

  #myUL li  :hover:not(.header) {
  background-color: #eee;
  }

  </style>


</head>

<body>


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
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url(image_personal_page/1.png);   background-size:auto;   background-position:top ;">


      <div class="row text-right" style="margin-left:67%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>جدول متابعة حلقات التقوية</span></h3>
                </div>
              </div>
            </div>

      </div>
    </div>

  <!-- slider_area_end -->

<div style="  margin-top:-23%;padding:5%" >



<div>
</div>
</br> </br>
 <div  style="padding-left:7% ; padding-right:7% ; margin-top:-9% ; padding-bottom:15%">
  <table id="customers">
    <tr>




  <th style=" background-color: #07b5b2">ملاحظات</th>
    <th style=" background-color: #07b5b2">الاستاذه المسمعه</th>
      <th style=" background-color: #07b5b2">الدرجه</th>
        <th style=" background-color: #07b5b2">خطأ التجويد</th>
          <th style=" background-color: #07b5b2">خطأ الحركة</th>
            <th style=" background-color: #07b5b2">خطأ الحفظ</th>
              <th style=" background-color: #07b5b2">الايه</th>
                <th style=" background-color: #07b5b2">السورة</th>
                <th style=" background-color: #07b5b2">التحضير من </br> المصحف المعلم</th>
                    <th style=" background-color: #07b5b2">التاريخ</th>
                <th  style=" background-color: #07b5b2">اليوم </th>
                  <th style=" background-color: #07b5b2"> اللقاء </th>

    </tr>


    <?php
    $infoStudents= mysqli_query($connect,"SELECT * FROM `followuplesson` WHERE `studentId`='$studentid' and `volunteerName`='$volunteername'");
    $numberOfAttendnece=0;
    while ($infoStudent= mysqli_fetch_assoc($infoStudents)) {
        if(!($infoStudent['surahName'] == '0')){
      $numberOfAttendnece++;
     ?>

    <tr>

      <td> <?php echo $infoStudent['notes']; ?> </td>
      <td> <?php echo $infoStudent['volunteerName']; ?></td>
      <td> <?php echo $infoStudent['grade']; ?></td>
      <td ><?php echo $infoStudent['tajweedMistakes']; ?></td>
      <td ><?php echo $infoStudent['pronunciationMistakes']; ?></td>
      <td ><?php echo $infoStudent['memoriesMistakes']; ?></td>
      <td><?php echo $infoStudent['ayahNumber']; ?></td>
      <td><?php echo $infoStudent['surahName']; ?></td>
        <td>
<?php
if($infoStudent['useALmushafALmualem'] == 1) {

 ?>
      <span>&#10003;</span> <?php  ?>

<?php  } else { ?>
  <span>ـــــــ</span>

<?php } ?>
        </td>
        <td><?php echo $infoStudent['date']; ?></td>
      <td><?php echo $infoStudent['day']; ?></td>
  <td>

<?php echo  $numberOfAttendnece ?>

  </td>
    </tr>
<?php } }?>
  </table>

</div>
</div>

</div>


    </div>
  </div>

  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8; margin-top:10%">

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
