<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
if ($connect)
  {
 }
$sql= "SELECT * FROM quranvolunteer";
if ($result = $connect-> query($sql)) {
  while ($obj = $result -> fetch_object()) {
    printf( $obj->Day );
  }
  $result -> free_result();
}else echo "string";
  ?>
<html class="no-js" lang="zxx">
<?php

error_reporting(E_ALL ^ E_NOTICE);
session_start();

if($_POST["authCode"]==$_SESSION['facultyAUTHCODE']&&(!Empty($_SESSION['facultyAUTHCODE']))){

$ID = $_SESSION['facultyid'];
$connect->query("UPDATE `facultymember` SET FacultyAutoCode = 0 WHERE FacultyUniversityID=$ID");
$connect->close();
header("Location:Personal Page for Faculty Member.php");

}else if($_POST["authCode"]==$_SESSION['studentAUTHCODE']&&(!Empty($_SESSION['studentAUTHCODE']))){
$ID = $_SESSION['studentid'];
$connect->query("UPDATE `student` SET authorization_code= 0 WHERE  university_ID=$ID");
$connect->close();
header("Location:Personal Page for Student.php");
}else{
}

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> مصلى أم القرى</title>
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

      <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="css_nuha/Signup.css">

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
                        <li> <img src="image_nuha/logo-1.png" alt="" style="width:150px;"></li>
                      </ul>
                    </div>
                  </div>

                  <div class="col-xl-6 col-md-6 col-lg-4">


                    <div class="social_media_links d-none d-lg-block">
                      <a dir="rtl" href="Sign up.php" style="font-size:15px; "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> التسجيل</a>
                      <a dir="rtl" href="Sign in.php" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الدخول</a>
                      <a dir="rtl" href="Home Page.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

        </header>
        <!-- header-end -->


<div id="main_content">


 <div id="SquareAthuCode">
   <!-- start of square of log in -->
       <div class="wrapper fadeInDown" style="padding-bottom:10%">
         <div class="col-lg-6">
           <div class="section_title text-center mb-55">
             <h3><span>رمز التحقق</span></h3>
           </div>
         </div>

         <div id="formContent">
           <h3 style="padding-top:10%"><span>الرجاء التحقق من البريد الالكتروني وإدخال رمز التحقق المرسل</span></h3>
           <!-- signup Form -->
           <form class="fadeIn second" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
             <input type="text" id="authCode" name="authCode" class="fadeIn second" placeholder="رمز التحقق" required
             oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
             <input type="submit" class="fadeIn fourth" value="التحقق" >
           </form>
         </div>
       </div>
   <!-- end of square of log in -->
 </div>


</div>





    <!-- footer_start  -->
    <footer class="footer" style="  padding : 60px; background:#F3FCF8">

      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6 col-lg-4 ">
            <div class="footer_widget">
              <div class="footer_logo">

                <img src="image_nuha/logo-footer.png" alt="" style="padding-top: 9px;">

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
