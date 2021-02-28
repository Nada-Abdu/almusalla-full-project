<?php
session_start();
?>
<!doctype html>
<html class="no-js" lang="ar">
<?php
$showDivFlag=false;

$courseid = $_POST['courseid'] ??'';
$groupnum = $_POST['group'] ??'';

// Create connection
$connect = mysqli_connect('localhost','root','05371433','almusalla');
// Check connection
if (!$enect) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT courseid, groupnum, bonus, attendancenum, activityname , activitytype, activityid FROM activities WHERE courseid = $courseid AND groupnum=  $groupnum ";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      $activityname = $row["activityname"];
      $bonus = $row["bonus"];
      $attendancenum = $row["attendancenum"];
      $activitytype = $row["activitytype"];
      $activityid = $row["activityid"];
    }
    if ($activitytype ==  "نشاط حلقات القران الكريم"){
      $activity = "حلقات التقوية لتلاوة القرآن الكريم";
      $surah = $activityname;
      $appointment = "سيتم اختيار الموعد المناسب عند التسجيل من صفحة الدروس المسجلة";
    }
    if ($activitytype ==  "نشاط الدروس الإسلامية"){
      $activity = $activityname ;
      $surah = "";
      $sq = "SELECT IslamicVolunteerID, lessonName ,meetingNumber , Day, LessonDate,time FROM islamicvolunteer WHERE lessonName = '$activity' ";
      $resul = mysqli_query($connect, $sq);
      if (mysqli_num_rows($resul) > 0) {
      while($ro = mysqli_fetch_assoc($resul)) {
        $IslamicVolunteerID = $ro["IslamicVolunteerID"];
        $LessonNam = $ro["lessonName"];
        $LessonDay = $ro["Day"];
        $LessonDate = $ro["LessonDate"];
      $Lessontime = $ro["time"];
      $meetingNumbers = $ro["meetingNumber"];

      }

    } else {
      echo "no";
    }



}
$_SESSION["activitytype1"] = $activitytype;
$_SESSION["isllesid"] = (int)$IslamicVolunteerID;
$_SESSION["activityid1"] = (int)$activityid;
$_SESSION["StudentID1"] = 43700000;
$_SESSION["blank"] ="0";
$_SESSION["meet"] = (int)$meetingNumbers;
 $showDivFlag=true;
} else {
    echo "";
}
//echo $IslamicVolunteerID;

mysqli_close($connect);
?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>مصلى ام القرى</title>
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

  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
  /* BASIC */



  body {
    font-family: "Poppins", sans-serif;
    height: 100vh;
  }

  a {
    color: #92badd;
    display:inline-block;
    text-decoration: none;
    font-weight: 400;
  }

  h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    text-transform: uppercase;
    display:inline-block;
    margin: 40px 8px 10px 8px;
    color: #cccccc;
  }



  /* STRUCTURE */

  .wrapper {
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    width: 100%;
    min-height: 100%;
    padding: 20px;
  }

  #formContent {
    -webkit-border-radius: 10px 10px 10px 10px;
    border-radius: 10px 10px 10px 10px;
    background: #fff;
    padding: 30px;
    width: 120%;
    max-width: 800px;
    position: relative;
    padding: 0px;
    -webkit-box-shadow: 0 10px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 10px 10px 0 rgba(0,0,0,0.3);
    text-align: center;
  }

  #formFooter {
    background-color: #f6f6f6;
    border-bottom: 1px solid #dce8f1;
    padding: 25px;
    text-align: center;
    -webkit-border-radius:10px 10px 0 0;
    border-radius:10px 10px 0 0;
  }



  /* TABS */

  h2.inactive {
    color: #cccccc;
  }

  h2.active {
    color: #0d0d0d;
    border-bottom: 2px solid #07B5B2;
  }



  /* FORM TYPOGRAPHY*/

  input[type=button], input[type=submit], input[type=reset]  {
    background-color: #07B5B2;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 5px 20px 40px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
  }

  input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color:#7CE2F6;
  }

  input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
  }

  input[type=text], input[type=password],input[type=radio] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
  }

  input[type=text]:focus, input[type=password]:focus,input[type=radio]:focus{
    background-color: #fff;
    border-bottom: 2px solid #07B5B2;
  }

  input[type=text]:placeholder, input[type=password]:placeholder {
    color: #cccccc;
  }




  /* OTHERS */

  *:focus {
      outline: none;
  }

  #icon {
    width:60%;
  }

  * {
    box-sizing: border-box;
  }

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
  .demo-non-form {
      color: initial;
      width: 100%;
      padding: 10px;
      margin: 6px 0 12px 0;
      border: 1px solid #ccc;
      border-radius: 0;
      font-family: arial, verdana, sans-serif;
      font-size: 14px;
      box-sizing: border-box;
      -webkit-appearance: none;
  }

  .external-container button.external-button {
      font-weight: 400;
      padding: 10px;
      margin: 6px 0 13px 0;
      width: 100%;
  }
  .dropdown {
    position: relative;
    display: inline-block;
  	text-align:center;
  }
  .dropdown-content {
    display: none;
    position: absolute;
    min-width:160px;


    box-shadow:#f3f3f3;
    z-index:1;
  }
  .dropdown-content a:hover {background-color:#f1f1f1}






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
                  <li> <img src="img/logo-1.png" alt="" style="width:150px;"></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-4">

              <div class="social_media_links d-none d-lg-block">
                                    <a dir="rtl" href="Home Page.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                                    <a dir="rtl" href="Personal Page for student.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                                    <a dir="rtl" href="Home Page.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                                  </div>

            </div>
          </div>
        </div>
      </div>

      <div id="sticky-header" class="main-header-area" style="margin-top: 15px;">
        <div class="container-fluid">
          <div class="row align-items-center">
            <!-- student -->
            <div class="col-xl-10 col-lg-10" style="padding-right:17%">
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
              <li><a href="almosalla Lessons.php" style="font-size:15px;">دروس المصلــى</a></li>

            </ul>
          </nav>
        </div>
      </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    <!-- slider_area_start -->
  <div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url( activity/activity.jpeg);   background-size:auto;   background-position:top ;">


      <div class="row text-right" style="margin-left:67%; margin-top:-26%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>  أنشطة المواد</span></h3>
                </div>
              </div>
            </div>

      </div>
    </div>

  <!-- slider_area_end -->
<div style="margin-top:-37%">

  <div data-scroll-index='1' class="make_donation_area section_padding">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="section_title text-center mb-55">
          <h3><span>البحث عن نشاط </span></h3>
        </div>
      </div>
    </div>
            <div class="wrapper fadeInDown" >

              <div id="formContent">

                    <form action="course Activities.php" method="post" class="donation_form">
                  <label style="color:#07B5B2;margin-right:-95%"><input type="text"  class="fadeIn second" id="courseid" name="courseid" style="text-align: right; width:60%;margin-right: :-95%;">  : أدخل رمز المقرر</label>

                  <label style="color:#07B5B2;margin-left:0%"><input type="text"  class="fadeIn second" id="groupnum" name="group"  style="text-align: right; width:60%;margin-left:0%;"> : أدخل رقم الشعبة</label>

                    <div class="row">
                      <div class="col-6">
                        <div class="donate_now_btn text-center">
                    <button class="genric-btn success radius" style="margin-left:350px;" id ="search1" type="submit" name="search">البحث</button>
                      <br/><br/>
                    </div>
                    </div>
                    </div>
                  </form>
                    </div>



              </div>


      <!-- news__area_start  style="display:none;"  -->
      <div id ="show" <?php if ($showDivFlag===false){?>style="display:none"<?php } ?>>

          <div class="popular_causes_area pt-10" dir="rtl">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-lg-6">
                  <div class="section_title text-center mb-55">
                    <h3><span>نتائج البحث</span></h3>
                  </div>


            <div class="single_cause">
              <div class="causes_content text-center">
                <div class="custom_progress_bar">
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 100%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                    </div>
                  </div>
                </div>
                <div class="balance d-flex justify-content-between align-items-center text-center">
                  <h3 class="text-center" style=" margin-left: auto; margin-right: auto;"><?php echo $activity?></h3>
                </div>
                <p dir="rtl" id = activityname><?php echo $surah?></p>
                <p dir="rtl" id = bonus>درجات التحسين <?php echo $bonus?></p>
                <p dir="rtl" id = attendancenummber> اللقاءات <?php echo $attendancenum?></p>
                <p dir="rtl"id = ifQuranActivity><?php echo $appointment?></p>
                <?php
                  if ($activitytype ==  "نشاط الدروس الإسلامية"){
                   echo '<p dir="rtl"><i class="fa fa-calendar"></i> ' ;
                   echo $LessonDay;
                   echo  "  بتاريخ    $LessonDate ";
                   echo '</p> ' ;
                   echo '<p dir="rtl"><i class="fa fa-clock-o"></i> ';
                   echo "الساعة $Lessontime";
                   echo '</p>';

                  }
                ?>

                     <form action="" method ="post" >
                  <button class="genric-btn success radius"  type="submit" style="margin-top:-1px;" name="enroll">التسجيل</button>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>


              </div>
            </div>
          </div>

      <!-- news__area_end  -->

    </div>

  </div>

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
  <script src="show.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <script type="text/javascript">
  function alert()
  {
    Swal.fire({
  icon: 'success',
  title: 'تم تسجيلك بنجاح',
  showConfirmButton: false,
  timer: 2000
})
  }
  </script>

</body>
<?php


// Create connection
$connect = mysqli_connect('localhost','root','05371433','almusalla');
// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// session for student id *********

if(isset($_POST['enroll'])){
$StudentID = $_SESSION["StudentID1"] ;
$isllesid1 = $_SESSION["isllesid"];
$activityid11 = $_SESSION["activityid1"] ;
$b = $_SESSION["blank"];
$Actype = $_SESSION["activitytype1"];

$sql1 = "INSERT INTO registeredactivity (Student_ID, Activity_ID)
VALUES ($StudentID, $activityid11)";
if (mysqli_query($connect, $sql1)) {
  echo '<script type="text/javascript">
       alert();
       </script>';
} else {
    echo "";
}

if ($Actype ==  "نشاط الدروس الإسلامية"){
  $Lesson = $_SESSION["Lessonidd"];
  $sql3 = "SELECT MeetingNumber FROM meeting WHERE IslamicVolunteerID = $isllesid1";
  $result3 = mysqli_query($connect, $sql3);
  if (mysqli_num_rows($result3) > 0) {
      while($row3 = mysqli_fetch_assoc($result3)) {
        $meetingnumb = $row3["Meetingnumber"];

      }  }

      $meeting = (int)$meetingnumb;
      $n=1;
      if($meeting>0){
      for($i=0; $meeting>$i; $i++){
      $sql22 = "INSERT INTO attendance (student_ID  ,IslamicVolunteerID ,meetingNum ,meetingState , activityid )
      VALUES ($StudentID, $isllesid1, $n, 0, $activityid11)";
      $n++;
      if (mysqli_query($connect, $sql22)) {
      echo "";
      } else {
          echo "";
      } }

      }
      else {
        $sql22 = "INSERT INTO attendance (student_ID  ,IslamicVolunteerID ,meetingNum ,meetingState , activityid )
        VALUES ($StudentID, $isllesid1, 0, 0, $activityid11)";
        if (mysqli_query($connect, $sql22)) {
        echo "";
        } else {
            echo "";
        }
      }}}
mysqli_close($connect);
?>


</html>
