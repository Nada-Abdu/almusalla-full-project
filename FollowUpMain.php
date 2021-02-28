<?php session_start();
$connect = mysqli_connect('localhost','root','05371433','almusalla');

?>

<!doctype html>
<html class="no-js" lang="ar">


<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى ام القرى</title>
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

    #customers td,
    #customers th {
      border: 2px solid #ddd;
      padding: 8px;
      text-align: center;

    }

    #customers tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    #customers tr:hover {
      background-color: #ddd;
    }

    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: center;
      background-color: #28d1cf;
      color: white;
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

  <!-- slider_area_start -->
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="background-image: url( activity/activity.jpeg);   background-size:auto;   background-position:top ;">


      <div class="row text-right" style="margin-left:67%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>متابعة طالبات النشاط</span></h3>
                </div>
              </div>
            </div>

      </div>
    </div>

  <!-- slider_area_end -->
<div style="margin-top:-35%">
  <div class="popular_causes_area pt-120" dir="rtl">
    <div class="container">

      <div class="row justify-content-center">
        <?php
        $showDivFlag=false;

        $facumemid = $_SESSION['facultyid'];
        // Create connection
       $connect = mysqli_connect('localhost','root','05371433','almusalla');
        // Check connection
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "SELECT coursename,activityid, courseid, groupnum, activityname , activitytype, bonus, attendancenum FROM activities WHERE facumemid = $facumemid ";
        $result = mysqli_query($connect, $sql);

        if (mysqli_num_rows($result) > 0)  {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              $coursename = $row["coursename"];
              $courseid = $row["courseid"];
              $activityname = $row["activityname"];
              $bonus = $row["bonus"];
              $attendancenum = $row["attendancenum"];
              $activitytype = $row["activitytype"];
              $groupnum = $row["groupnum"];
              $_SESSION['ACTIVITYid'] = $row["activityid"];

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
          <h3 class="text-center" style=" margin-left: auto; margin-right: auto;"><?php echo $coursename; ?></h3>
        </div>

        <p dir="rtl" ><?php echo "رقم المقرر : $courseid"?></p>
        <p dir="rtl" ><?php echo "رقم الشعبة : $groupnum"?></p>
        <p dir="rtl" ><?php echo "نوع النشاط : $activitytype"?></p>
        <p dir="rtl" ><?php echo "اسم النشاط :"; if ($activitytype ==  "نشاط حلقات القران الكريم"){echo "سورة  $activityname ";} else echo  $activityname ;?></p>
        <p dir="rtl" ><?php echo " اللقاءات: $attendancenum"?></p>
        <p dir="rtl" ><?php echo "درجة التحسين : $bonus"?></p>
         <?php
         $ACTid= $_SESSION['ACTIVITYid'];
            if ($activitytype ==  "نشاط حلقات القران الكريم"){
             $link = "students follow-up.php?act_id=$ACTid";
            }
            if ($activitytype == "نشاط الدروس الإسلامية"){
               $link = "students attendance.php?act_id=$ACTid";
          }

             ?>

            <a class="genric-btn success radius" href="<?php echo $link; ?>" style="margin-top:-1px;">فتح</a>

      </div>
    </div>
  </div>
  <?php
}


} else {
  echo "<div style='margin-bottom:25%'>  </div>";
 }

//echo $IslamicVolunteerID;

mysqli_close($connect);


  ?>

      </div>
    </div>
  </div>

  </div>


<!-- news__area_end  -->
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
