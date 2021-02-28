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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
  <style>
    .grey-box {
      background-color: #f6f6f6;
      border-bottom: 1px solid #dce8f1;
      padding: 25px;
    }

    .style-text-btn button {
      margin: 5px;
      width: 55px;
      font-size: 15px;
      padding: 0px;
    }
  </style>

<style>
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
  -webkit-box-shadow: 0 10px 10px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 10px 0 rgba(95,186,233,0.4);
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
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
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

.underlineHover:hover:after{
  width: 100%;
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

</style>
</head>

<body>


  <?php
  // session_start();
  include "Asrar-files/config.php";




  ?>
  <!-- setup class Lesson & student  -->
  <?php
  class Lesson
  {
    public $lessonName;
    public $volunteerName;
    public $certificateTemplate;
    public function __construct($lessonName, $volunteerName, $certificateTemplate)
    {
      $this->lessonName = $lessonName;
      $this->volunteerName = $volunteerName;
      $this->certificateTemplate = $certificateTemplate;
    }
    public function setlessonName(Lesson $lessonName)
    {
      $this->lessonName = $lessonName;
    }
    public function setvolunteerName(Lesson $volunteerName)
    {
      $this->volunteerName = $volunteerName;
    }
    public function setcertificateTemplate(Lesson $certificateTemplate)
    {
      $this->certificateTemplate = $certificateTemplate;
    }
    public function getLessonName()
    {
      return $this->lessonName;
    }
    public function getVolunteerName()
    {
      return $this->volunteerName;
    }
    public function getCertificateTemplate()
    {
      return $this->certificateTemplate;
    }
  }


  class Student
  {
    public $studentId;
    public $studentName;
    public $studentEmail;
    public $studentCertificate;
    public $lesson;
    public function __construct($studentId, $studentName, $studentEmail, $studentCertificate)
    {
      $this->studentId = $studentId;
      $this->studentName = $studentName;
      $this->studentEmail = $studentEmail;
      $this->studentCertificate = $studentCertificate;
      $this->lesson = new Lesson('', '', '');
    }
    public function setLesson(Lesson $lessonName, Lesson $volunteerName)
    {
      $this->lesson->setlessonName = $lessonName;
      $this->lesson->setvolunteerName = $volunteerName;
    }
    public function getstudentEmail(): String
    {
      return $this->studentEmail;
    }
    public function generateCertificate()
    {
      // $studentName='أسرار ';
      // \"
      // $_GET['studentName']=$studentName;

      echo "<script> generateCertificate(); </script>";
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
            <!-- administrator -->
            <div class="col-xl-10 col-lg-10" style="padding-right:16%">
                  <div class="main-menu" >
                    <nav>
                      <ul id="navigation" >
                        <li><a href="Volunteers.php" style="font-size:15px;"> المتطوعـــات</li></a>
                       <li><a style="font-size:15px;">|</a></li>
                       <li><a href="Volunteer requests.php" style="font-size:15px;"> طلبــات التطــوع</li></a>
                       <li><a style="font-size:15px;">|</a></li>
                       <li><a href="Create a certificate.php" style="font-size:15px;"> إصـدار شهـــادة</li></a>
                     </ul>
                    </nav>
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
            <h3 dir="rtl"><span>  إصدار الشهادات</span></h3>
          </div>
        </div>
      </div>
    </div>
  </div>



        <?php



?>
<!--           
            <div class="row"><div class="col-1">
             <label style="color:#07B5B2;width:1010px "><input readonly="" type="text" id="" name="inputRequest" value="" style="text-align: right; height:10%;"> </label>
           </div><div class="col-2">
            <input name="botRequest" id="" type="submit" value="" style="margin-left:-68px; "></div></div>
     
        
           -->











  <!-- slider_area_end -->
  <div data-scroll-index='1' class="make_donation_area section_padding" style="padding-bottom:0px; padding-top:0px; margin-top: -30%;">
    <div class="container">
      <div class="section-top-border text-right">
        <div class="row text-right">
          <!-- <div class="col-md-6">
            <div class="single-defination">
              <h4 class="mb-20 text-right" dir="rtl" style=" direction: rtl;unicode-bidi: embed;"><span dir="rtl"> أختاري موقع الختم على الشهادة &nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
              <button class="genric-btn success-border radius small" type="button" onClick="StampLeft()">←</button>
              <button class="genric-btn success-border radius small" type="button" onClick="StampRight()">→</button>
              <button class="genric-btn success-border radius small" type="button" onClick="StampUp()">↑</button>
              <button class="genric-btn success-border radius small" type="button" onClick="StampDown()">↓</button>
            </div>

          </div> -->
          <!-- <div class="col-md-4 text-right">
</div> -->
          <div class="col-md-8 text-right">

            <?php
            // $sel = "SELECT * FROM `Islamic Volunteer` WHERE University_faculty_member_id=2";

            // $result = mysqli_query($mysqli, $sel);

            // while ($row = mysqli_fetch_array($result)) {
            //   $image = $row['CertificateName'];
            //   $image_src = 'Certificates/' . $image;

            ?>

            <!-- <img src="<?php echo $image_src; ?>" >    -->
            <?php
            // } 
            ?>



          </div>

          <div class="col-md-12 text-right">
            <div class="single-defination">
              <h4 class="mb-20 text-right" dir="rtl" style=" direction: rtl;unicode-bidi: embed; margin-top:15px;"><span dir="rtl"> فضلًا قومي باختيار الدرس المناسب حتى تظهر قائمة أسماء الطالبات المستحقات لشهادة والشهادة الخاصة بهن</span></h4>
              <div class=" text-right" id="div-text">
               <br>
              </div>
             
            </div>
          </div>


          <!--
          <div class="col-md-6">
            <div class="single-defination" dir="rtl" style=" direction: rtl;">
              <h4 class="mb-20 text-right" dir="rtl" style=" direction: rtl;unicode-bidi: embed;"><span dir="rtl"> يمكنك إضافة الختم من خلال رفع صورة الختم ثم الضغط على رفع</span></h4>
              <div class="mt-10">
                  <input class="genric-btn success-border radius small text-right" onfocus="this.placeholder = ''" onblur="this.placeholder = 'النص'" id="upload" type="file" onChange="uploadStamp(event)" placeholder="رفع" aria-label="" aria-describedby="button-addon2" dir="rtl"/>
              </div>
            </div>
          </div> -->
          <h3 id="studentName"></h3>
        </div>

      </div>
    </div>
  </div>



  <div data-scroll-index='1' class="make_donation_area section_padding" style="padding-top:0px; display:none;padding-bottom:0px; " id="hidden-div-1">
    <div class="container">
      <div class="section-top-border">

        <div class="row">
          <div class="col-md-12">
            <div class="section_title text-center mb-55">
              <h3 dir="rtl"><span> أسماء الطالبات المستحقات لشهادة</span></h3>
            </div>
            <!-- <h3 class="mb-30 text-right" dir="rtl">أسماء الطالبات المستحقات لشهادة</h3> -->
            <div class="progress-table-wrap text-center" dir="rtl" style="max-height: 300px; overflow-y: scroll;">
              <div class="progress-table text-center" dir="rtl" id="studentNames">
                <div class="table-head text-center" dir="rtl">
                  <div class="serial text-center" dir="rtl">#</div>
                  <div class="country text-right" dir="rtl">اسم الطالبة</div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div data-scroll-index='1' class="make_donation_area section_padding" style="padding-top:0px; display: none;" id="hidden-div-2">
    <div class="container">
      <div class="section-top-border">

        <div class="row grey-box">
          <div class="col-md-4" style="border-right: #fff 2px solid; ">
            <div class="single-defination">
              <h4 class="mb-20 text-center" dir="rtl" style=" direction: rtl;unicode-bidi: embed; margin-top:15px;"><span dir="rtl">أختاري اللون وحجم ومكان اسم الطالبة على الشهادة</span></h4>
              <input class="btn btn-outline-info form-control" type="color" value="#000000" id="colorWell">
            </div>
            <div class="row text-center">
              <div class="col-md-12 text-center style-text-btn">
                <br>
                <button class="genric-btn success-border radius small" type="button" onClick="left()">←</button>
                <button class="genric-btn success-border radius small" type="button" onClick="right()">→</button>
                <button class="genric-btn success-border radius small" type="button" onClick="down()">↓</button>
                <button class="genric-btn success-border radius small" type="button" onClick="up()">↑</button>
                <button class="genric-btn success-border radius small" type="button" onClick="sizeD()">-</button>
                <button class="genric-btn success-border radius small " type="button" onClick="sizeI()">+</button>
              </div>
            </div>
          </div>
          <div class="col-md-4" style="border-right: #fff 2px solid;">
            <!-- <div class="single-defination">
              <h4 class="mb-20 text-center" dir="rtl" style=" direction: rtl;unicode-bidi: embed;"><span dir="rtl"> لتغير القياسات أو اللون قومي بإختيار النص المراد تغيره ثم الضغط على اختيار&nbsp;&nbsp;&nbsp;&nbsp;</span></h4>
              <div class="row text-right">
                <div class="col-md-12 text-right " id="div-text">
                  <br>
                  <select class=" text-right success-border form-select nice-select" id="text-array">
                  </select>
                </div> 
              </div>
            </div> -->
            <div class="single-defination text-right">
              <h4 class="mb-20 text-center" dir="rtl" style="margin-top:15px;"><span dir="rtl"> أختاري موقع الختم على الشهادة </span></h4>

              <div class="mt-10 text-right style-text-btn" style="margin-top:55px; margin-right:30px; ">
                <button class="genric-btn success-border radius small" type="button" onClick="StampLeft()">←</button>
                <button class="genric-btn success-border radius small" type="button" onClick="StampRight()">→</button>
                <button class="genric-btn success-border radius small" type="button" onClick="StampDown()">↓</button>
                <button class="genric-btn success-border radius small" type="button" onClick="StampUp()">↑</button>
              </div>
            </div>
          </div>

          <div class="col-md-4" dir="rtl">
            <div class="single-defination" dir="rtl" style=" direction: rtl;">
              <h4 class="mb-20 text-center" dir="rtl" style=" direction: rtl;unicode-bidi: embed; margin-top:10px;"><span dir="rtl"> يمكنك إضافة الختم من خلال رفع صورة الختم ثم الضغط على رفع الختم</span></h4>
              <!-- <div class="mt-10 text-right custom-file" > -->
              <!-- <button class="genric-btn success-border radius small text-right" type="button" id="btn-upload">رفع</button> -->
              <!-- <input class="genric-btn success-border radius small text-right custom-file-input" onfocus="this.placeholder = ''" onblur="this.placeholder = 'النص'" id="uploadStamp" type="file" onChange="uploadStamp(event)" placeholder="رفع" aria-label="" aria-describedby="button-addon2" dir="rtl" style="width:70%;"/>
              </div> -->

              <div class="mt-10 text-right custom-file" style="margin-top: 35px;">
                <input type="file" accept=".png, .jpg, .jpeg" class="custom-file-input genric-btn success-border radius small text-right" id="customFileLang" onfocus="this.placeholder = ''" onblur="this.placeholder = 'النص'" aria-describedby="button-addon2" dir="rtl" style="width:10%;" onChange="uploadStamp(event)">
                <label class="genric-btn success-border radius small text-right" for="customFileLang" style="margin-right: 40px;">رفع الختم</label>
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
          <div class="donate_now_btn text-center">
            <a class="boxed-btn4" onclick="generateCertificate()" id="save-c" style="color: rgb(255, 255, 255);" onmouseout="this.style.color='#fff'" onmouseover="this.style.color='#07B5B2'">إرسال</a>
          </div>
          <img src="" id="canvasImage" />
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
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
  <script src="Asrar-files/Create a certificate.js"></script>
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

  </script>
  

  <script>
    // //setup lesson name in session 
    // var data="lesson1";
    // $.ajax({
    //         url: 'Create a certificate.php',
    //         type: 'POST',
    //         data: data 
    //       });
  </script>

<?php
// // session lesson name setup/change 
// if (isset($_POST['lessonName'])) 
// { 
//   $_SESSION['lessonName'] = $_POST['lessonName'];
// }
// ?>


</body>

</html>