<!doctype html>
<?php
session_start();
$connect = mysqli_connect('localhost','root','05371433','almusalla');

  ?>
<html class="no-js" lang="ar">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> مصلى أم القرى </title>
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
   .customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  .customers td, .customers th {
    border: 2px solid #ddd;
       text-align:center;

  }

  .customers tr:nth-child(even){background-color: #f2f2f2;}

  .customers tr:hover {background-color: #ddd;}

  .customers th {
     text-align: center;
    background-color: #28d1cf;
    color: white;
  }
.causes_content{
    height:300px;
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
                        <li> <img src="image_nuha/logo-1.png" alt="" style="width:150px;"></li>
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
                  <?php


                  $ID = $_SESSION['facultyid'];
                  $result = $connect->query("SELECT * FROM `quranvolunteer` WHERE FacultyUniversityID=$ID ");
                  $result2 = $connect->query("SELECT * FROM `islamicvolunteer` WHERE FacultyUniversityID=$ID ");
                  $row2 = $result2->fetch_array(MYSQLI_ASSOC);
                  $row = $result->fetch_array(MYSQLI_ASSOC);

                if( $row['requestState'] == "مقبول"|| $row2['requestState'] == "مقبول" ){
                echo  "<div class='col-xl-10 col-lg-10'>"; }
                else {
                    echo  "<div class='col-xl-9 col-lg-10'>";
                }
                                echo "<div class='main-menu'>";
                                   echo "<nav>";
                                    echo " <ul id='navigation'>";
                                    if( $row['requestState'] == "مقبول"|| $row2['requestState'] == "مقبول" ){

                                    echo "<div class='dropdown' >";
                                    echo "<li ><a href='' style='font-size:15px;'>  متابـــعة طالبـــات المصلـــى <i class='ti-angle-down'></i></a>";
                                    echo "<ul class='submenu' id='listShad1' style='text-align:center;'>";

                                    if( $row['requestState'] == "مقبول"){
                                    echo " <li style='padding-top:10px; padding-bottom:5px;' class='dropdown-content'> <a href='follow up Quran student.php' >طالبات حلقات التقويه</a></li>";}
                                    if($row2['requestState'] == "مقبول"){
                                    echo "  <li  style='padding-top:10px; padding-bottom:10px;'class='dropdown-content'><a href='follow up islamic  student.php'>طالبات الدروس الاسلامية </a></li>";}

                                    echo "</ul>";
                                   echo "</li>";
                                  echo "</div>";
                                  echo "<li><a style='font-size:15px;'>|</a></li>";
                                }
                                     ?>


                                        <div class="dropdown" >
                                       <li ><a href="" style="font-size:15px;"> طلـــــب تطـــوع <i class="ti-angle-down"></i></a>
                                         <ul class="submenu" id="listShad1" style="text-align:center;">
                                           <?php     $ID = $_SESSION['facultyid']; $result = $connect->query("SELECT * FROM `quranvolunteer` WHERE FacultyUniversityID=$ID "); if(mysqli_num_rows($result) < 1) {echo "<li style='padding-top:10px; padding-bottom:5px;'class='dropdown-content'> <a href='requesting form as Quran volunteer.php' >حلقـــات التقـــوية</a></li>"; }?>
                                           <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href=" requesting form as Islamic volunteer.php">الــدروس الاســـلاميـة </a></li>
                                             </ul>
                                       </li>
                                     </div>

                                      <li><a style="font-size:15px;">|</a></li>

                                      <div class="dropdown" >
                                      <li ><a href=" FollowUpMain.php" style="font-size:15px;">متابـــعة طالبـــات النشـــاط</i></a>

                                      </li>
                                    </div>

                                                         <li><a style="font-size:15px;">|</a></li>

                                    <div class="dropdown" >
                                    <li ><a href="" style="font-size:15px;"> تحديـــد النشـــاط <i class="ti-angle-down"></i></a>
                                      <ul class="submenu" id="listShad1" style="text-align:center;">
                                      <li style="padding-top:10px; padding-bottom:5px;" class="dropdown-content"> <a href="DetermineIslamicActivity.php" >نشاط الدروس الاسلامية</a></li>
                        <li  style="padding-top:10px; padding-bottom:10px;"class="dropdown-content"><a href="DetermineQuranActivity.php">نشاط حلقات القران</a></li>
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

  <div class="slider_area" style="padding-left:1%">
    <div class="single_slider  d-flex align-items-center " style="  background-image: url(image_footer/2.png);   background-size:auto;   background-position:top ; height:300px;">
      <div class="row text-right" style="margin-left:68%; margin-top:150px;">
        <div class="col-12 text-right">
          <div class="section_title text-right mb-55" >
          <h3 dir="rtl" style="font-size:30px"><span> متابعة طالبات حلقات التقوية</span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="popular_causes_area pt-120" dir="rtl">
    <div class="container">

      <div class="row justify-content-center">
    
<?php
$fuc_id = $_SESSION['facultyid'];
      $time =array();
 
        $sql = "SELECT * FROM quranvolunteer WHERE FacultyUniversityID = $fuc_id AND requestState='مقبول'";
        $result = mysqli_query($connect, $sql);
         if (mysqli_num_rows($result) > 0)  {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $Quran_volunteer_id = $row["Quran_volunteer_id"];
                $SurahName = $row["Surah_name"];
                $sql2= "SELECT  *  FROM timetable where timetable.Quran_volunteer_id= $Quran_volunteer_id";
$result2 = mysqli_query($connect,$sql2);
if (mysqli_num_rows($result2) > 0)  {
     while($row2 = mysqli_fetch_assoc($result2)) {
        $day = $row2["Day"] ;
        $timeStart = $row2["timeStart"] ;
        $timeend = $row2["timeEnd"] ;
?>
  <div class="col-lg-4 col-md-6">
    <div class="single_cause">
      <div class="causes_content text-center">
        <div class="custom_progress_bar">
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
            </div>
          </div>
        </div>
        <div class="balance d-flex justify-content-between align-items-center text-center">
          <h3 class="text-center" style=" margin-left: auto; margin-right: auto;"><?php echo "اسم الحلقة  :"; if ($SurahName != '-'){echo $SurahName;} else {echo"حلقة تقوية ";}?></h3>
        </div>

        <p dir="rtl" style="margin-top:15%"><i class="fa fa-calendar"></i><?php echo " $day"?></p>
        <p dir="rtl" ><i class="fa fa-clock-o"></i><?php echo "  $timeStart - $timeend" ?></p>
         
         <a class="genric-btn success radius" href="<?php echo "follow up activty volunteer.php?time=$timeStart"; ?>" style="margin-top:5%;">طالبات النشاط</a>
         <a class="genric-btn success radius" href="<?php echo "follow up lesson volunteer.php?time=$timeStart"; ?>" style="margin-top:5%;">طالبات الحلقة</a>

  

                     
      </div>
    </div>
  </div>
  <?php
}
}}      

} ?>
<?php 
//echo $IslamicVolunteerID;

mysqli_close($connect);


  ?>

      </div>
    </div>
  </div>




<!-- news__area_end  -->
<!-- footer_start  -->
<footer class="footer" style="  padding : 60px; background:#F3FCF8; margin-top:20%">

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
