<!doctype html>
<?php
$connect = mysqli_connect('localhost','root','05371433','almusalla');
  ?>
<html class="no-js" lang="ar">
<?php session_start(); ?>

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
  <link rel="stylesheet" href="css_nuha/elm.css">
  <link rel="stylesheet" href="css_nuha/list.css">
    <link rel="stylesheet" type="text/css" href="css_nuha/Signup.css">
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
  </style>

  <style>
      /* The Modal (background) */
      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
        position: relative;
        background-color: #fefefe;
        margin: auto;
        padding: 0;
        border: 1px solid #888;
        width: 80%;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
        -webkit-animation-name: animatetop;
        -webkit-animation-duration: 0.4s;
        animation-name: animatetop;
        animation-duration: 0.4s
      }

      /* Add Animation */
      @-webkit-keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
      }

      @keyframes animatetop {
        from {top:-300px; opacity:0}
        to {top:0; opacity:1}
      }

      /* The Close Button */
      .close {
        color: white;
        float: right;
        font-size: 28px;
        font-weight: bold;
      }

      .close:hover,
      .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
      }

      .modal-header {
        padding: 2px 16px;
        background-color: #07B5B2;
        color: white;
        text-align: center;

      }

      .modal-body {
        padding: 2px 16px;



      }

      .modal-footer {
        padding: 2px 16px;
        background-color: white;
        color: white;
      }
      </style>
      <script>
function alert_warning(){
Swal.fire({
  title: '!تنــبيـه',
   icon: 'warning',
   text: '  لا يمكنك اختيار اكثر من موعد اذا اردتي اختيار موعد اخر قومي بحذف الموعد المسجل مسبقا',
    confirmButtonColor: '#28d1cf',
   confirmButtonText: 'اغلاق'
}) }
</script>

</head>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->



                  <!-- The Modal -->
                  <div id="myModal" class="modal" style=" z-index:1000;">

                    <!-- Modal content -->
                    <div class="modal-content">
                      <div class="modal-header">
                        <span class="close">&times;</span>

                      </div>
                      <div class="modal-body" >
                        <p style="text-align:center;color:#07B5B2">:بامكانك تغيير المعلومات الشخصية التالية </p>

                        <form action="Personal Page administrator.php?reason2=saveinfo" method="post"  style="text-align:center">



                          <input type="text" id="adminname" name="adminname" placeholder="<?php  echo $_SESSION['adminname'];?>"  >
                          <input type="text" id="adminemail" name="adminemail" placeholder="<?php  echo $_SESSION['adminemail'];?>"
                            >
                          <input type="password" id="adminpass" name="adminpass" placeholder="كلمة المرور" >

                          <button required>حــفــظ</button>
                        </form>
                      </div>
                      <div class="modal-footer">

                      </div>
                    </div>

                  </div>





  <!-- header-start -->
  <header>
    <div class="header-area ">
      <div class="header-top_area"  >
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-8">
              <div class="short_contact_list">
                <ul>
                  <li> <img src="image_nuha/logo-1.png" alt="" style="width:150px;"></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-4" >


              <div class="social_media_links d-none d-lg-block">
                <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                <a dir="rtl" href="Personal Page for administrator.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px; margin-left:1%" >
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
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url(image_nuha/1.png);   background-size:auto;   background-position:top ;">


      <div class="row text-right" style="margin-left:72.2%; margin-top:-20%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <div class="single_reson">
                    <div class="thum" >
                      <div class="row" style="margin-left:-90%;">
                        <div class="col-5">
                      <h3  style="font-size:30px"><span style="margin-top:115%; margin-right:-9%;"><?php   echo "مرحبــاً "; echo "  "; echo $_SESSION['adminname'];?> </span></h3>
                         </div>
                      <div class="col-5  "style="margin-top:30%; margin-left:2%;">
                        <div class="reson_area ">
                                  <div class="single_reson">
                                    <div class="thum">
                      <img src="image_nuha/woman.png" height="250px" width="250px"/>
                    </div>
                      </div>
                        </div>
                          </div>
                  </div>
                      <!-- <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                            </br>
                              <div style="font-size:18px; margin-left:15%;">
                               <button type="submit" class="button button-contactForm btn_1 boxed-btn" > <img src="image_personal_page/wheel.png" width=25 height=25/>&nbsp;&nbsp;  الاعــــدادات</button>
                            </div>
                          </div>

                          </div>
                      </div> -->
                    </div>
                   </div>



                </div>
              </div>
            </div>
      </div>
    </div>
  </div>
  <!-- slider_area_end -->
  <!--الشخصيه -->



<div style=" margin-top:-29%;padding-right:3%; padding-left:5%; padding-bottom:8%;" >
  <div class="row " style="padding-right:6%;">

                                   <div class=" col-3"> </div>
                                           <div class=" col-3 "> </div>
                                           <div class=" col-3"> </div>

<div class=" col-3 rec2" > معلــومــــاتي الشخصيــــة </div>


  </div>




  <div class="row" style="padding-top:5%; padding-left:44%;">
    <div class="col-3" style="width:270px;  ">
      <label class="rec3" style="background-color:#ffffff; width:230px;font-size:14px;padding-right:10%;color:black " ><?php  echo $_SESSION['adminemail'];?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
    </div>

    <div class="col-3"  >
    <h4 class="rec3" style=" width:100px;   background-color:#F7F7F7; "> الايميل الجامعــي&nbsp;</h4>
    </div>



<div class="col-3" style="width:270px;  ">
  <label class="rec3" style="background-color:#ffffff; width:230px;font-size:14px;padding-right:10%;color:black " ><?php  echo $_SESSION['adminname'];?>&nbsp;</label>
</div>

<div class="col-3"  >
<h4 class="rec3" style=" width:100px;   background-color:#F7F7F7; "> الاســــــم&nbsp;</h4>
</div>

</div>





</br></br>
<hr>
<div class="form-group" >

</br>
  <div style="font-size:15px; margin-left:12%; ">
 <button type="submit" class="button button-contactForm btn_1 boxed-btn" style="border-width:2px; background-color:#07b5b2;" id="myBtn" ><p style="color:#ffffff;"  > <img src="image_nuha/wheel.png" width=22 height=22 />&nbsp;&nbsp; تغير الاعدادات الشخصية</p></button>
</div>
  </div>


<div style="padding-right:6%; margin-top:1%;">

<div class="row " >
  <div class=" col-3"> </div>
  <div class=" col-3 "> </div>
<div class=" col-3" style="padding-left:270px; z-index:1; margin-top:73px"> </div>
<div class=" col-3 rec2" style="font-size:25px; text-align:right; ">  التنبيـــهات </div>
</div>


<div class="rec3" style="height:300px; width:1070px; background-color:#ffffff;   margin-top:1%; margin-left:18.5%;">
    <div class=" col-12" style="font-size:18px; text-align:right;margin-bottom:10% " >

  <h3 style=" text-align:right;color:#07b5b2;">
    : طلبــات التطــوع فـي حلقـــات التقـــوية
  </h3>

  <?php

    $result = $connect->query("SELECT * FROM `quranvolunteer` WHERE requestState='انتظار' ");
    $facultyids=array();

    if (mysqli_num_rows($result) < 1) {
    echo "لاتوجد تنبيهات";

  }else {while($row = mysqli_fetch_array($result)) {

    if(in_array($row['FacultyUniversityID'], $facultyids))
    continue;
    if(empty($row['Surah_name'])){
    $nameofsu = "حلقة تقوية";
  }else{
    $nameofsu = $row['Surah_name'];
  }
    echo   " عنوان الحلقة :  ";
    echo   $nameofsu." - ";
    echo $row['requestState']."<br />";
    array_push($facultyids , $row['FacultyUniversityID']);

}}
  ?>

  <h3 style=" text-align:right;color:#07b5b2;">
    : طلبــات التطــوع فـي الــدروس الاســـلاميـة
  </h3>

  <?php

    $result = $connect->query("SELECT * FROM `islamicvolunteer` WHERE requestState='انتظار' ");

    if (mysqli_num_rows($result) < 1) {
    echo "لاتوجد تنبيهات";
  }else {
    while($row = mysqli_fetch_array($result)) {
    echo "عنوان الدرس : ";
    echo $row['lessonName']." - ";
    echo " حالة الطلب : ";
    echo $row['requestState']."<br />";
}
  }
  ?>




    </div>
</div>






</div>
</div>
</div>




</div>
    </div>
  </div>

  <!-- footer_start  -->
  <footer class="footer" style="padding :60px; background:#F3FCF8;margin-top:10%">

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


    <script>


     // Get the modal
     var modal = document.getElementById("myModal");

     // Get the button that opens the modal
     var btn = document.getElementById("myBtn");

     // Get the <span> element that closes the modal
     var span = document.getElementsByClassName("close")[0];

     // When the user clicks the button, open the modal
     btn.onclick = function() {
       modal.style.display = "block";
     }

     // When the user clicks on <span> (x), close the modal
     span.onclick = function() {
       modal.style.display = "none";
     }

     // When the user clicks anywhere outside of the modal, close it
     window.onclick = function(event) {
       if (event.target == modal) {
         modal.style.display = "none";
       }
     }


    </script>

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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
 function alert() {
      Swal.fire({
        icon: 'success',
        title: "تم تحديث بياناتك بنجاح",
        showConfirmButton: false,
        timer: 2000
      })

    }
 </script>
</body>
<?php
error_reporting(E_ALL ^ E_NOTICE);


$MSS=$_GET['reason2'];

if($MSS == "saveinfo"){

  if(Empty($_POST["adminpass"])){
  $password=$_SESSION['adminpw'];
  }
  else if(!Empty($_POST["adminpass"])){
  $password=$_POST["adminpass"];
  }
  if(Empty($_POST["adminname"])){
  $name = $_SESSION['adminname'];
  }
  else if(!Empty($_POST["adminname"])){
  $name = $_POST["adminname"];
  }

  $EMAIL = $_SESSION['adminemail'];

  $connect->query("UPDATE `adminstrator` SET Facilty_Member_Name ='$name' ,Password=$password WHERE Email ='$EMAIL'");


  $_SESSION['adminname'] =$name;


  echo "<script type=text/javascript >
   alert();
  </script>";


}

?>
</html>
