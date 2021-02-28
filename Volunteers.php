
<?php $connect = mysqli_connect('localhost','root','05371433','almusalla'); 
 session_start();
 ?>

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
  <link rel="stylesheet" type="text/css" href="css_nuha/formQuranVolunteer.css"> 
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->
  <style>
  #Qvolunter_table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #Qvolunter_table td, #Qvolunter_table th {
    border: 2px solid #ddd;
    padding: 8px;
      text-align:center;

  }

  #Qvolunter_table tr:nth-child(even){background-color: #f2f2f2;}

  #Qvolunter_table tr:hover {background-color: #ddd;}

  #Qvolunter_table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #28d1cf;
    color: white;
  }


  #Ivolunter_table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
  }

  #Ivolunter_table td, #Ivolunter_table th {
    border: 2px solid #ddd;
    padding: 8px;
      text-align:center;

  }

  #Ivolunter_table tr:nth-child(even){background-color: #f2f2f2;}

  #Ivolunter_table tr:hover {background-color: #ddd;}

  #Ivolunter_table th {
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
      <div class="header-top_area"  >
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-6 col-md-12 col-lg-8">
              <div class="short_contact_list">
                <ul>
                  <li> <img src="image_HomePage/logo-1.png" alt="" style="width:150px;"></li>
                </ul>
              </div>
            </div>

            <div class="col-xl-6 col-md-6 col-lg-4" >
            <div class="social_media_links d-none d-lg-block">
                      <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                      <a dir="rtl" href="Personal Page administrator.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
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


<!-- slider_area_start -->
<div class="slider_area" style= "padding-left:1%">
    <div class="single_slider  d-flex align-items-center" style="  background-image: url(image_HomePage/pack1.png);   background-size:auto;   background-position:top ;">
      <div class="row text-right" style="margin-left:70%; margin-top:-23%;">
              <div class="col-12 text-right">
                <div class="section_title text-right mb-55">
                  <h3 dir="rtl" style="font-size:30px"><span>المتطوعات في المصلى</span></h3>
                </div>
              </div>
            </div>
      </div>
    </div>
  
  <!-- slider_area_end -->



  <!-- >المتطوعات في حلقات التقوية -->


<div style="margin-left:2%; margin-top:-29%;padding:5%" >
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-lg-6">
              <div class="section_title text-center mb-55">
                  <h3 style="font-size:25px;"><span><strong>المتطوعات في حلقات التقوية</strong></span></h3>
              </div>
          </div>
      </div>
    </div>

  <table id="Qvolunter_table">
    <tr >
      <th style=" background-color: #07b5b2">اسم السورة</th>
      <th style=" background-color: #07b5b2">القسم/الكلية</th>
      <th style=" background-color: #07b5b2">رقم الجوال</th>
      <th style=" background-color: #07b5b2">رقم المنسوب</th>
      <th style=" background-color: #07b5b2">الاسم </th>
    </tr>


    <?php
      //Quran volunteer table
  $Q_volunteers = $connect->query("SELECT q.FacultyUniversityID,FacultyMemberName,UniversityEmail,PhoneNumber,FacultyDepartment,Quran_volunteer_id,Surah_name
    FROM quranvolunteer q, facultymember f WHERE f.FacultyUniversityID =q.FacultyUniversityID AND requestState = 'مقبول'");
    if(!empty($Q_volunteers) && $Q_volunteers->num_rows  > 0)  {
     while ($Q_info =$Q_volunteers->fetch_assoc()){ 
      $vol_id1= $Q_info["Quran_volunteer_id"];
      $_SESSION["vol_id"]=(int)$vol_id1 ;

      ?>
      <tr>
  
      <td><?php echo$Q_info["Surah_name"]?></td>   
      <td><?php echo$Q_info["FacultyDepartment"]?></td>
      <td><?php echo$Q_info["PhoneNumber"]?></td>
      <td><?php echo$Q_info["FacultyUniversityID"]?></td>
      <td><?php echo $Q_info["FacultyMemberName"] ?></td>
      </tr>
      <?php 
  }
}
 else{ ?> 
               <div style=margin-left:2%; margin-bottom:-29%;padding:5% >
                 <div class=container>
                     <div class=row justify-content-center>
                         <div class=col-lg-6>
                             <div class= section_title text-center mb-55>
                                <tr><td colspan= 6> <p style= color:gray; font-size:5px;> <strong> &quot; لا يوجد متطوعات في حلقات التقوية &quot; </strong> </p> </tr></td>
                             </div>
                         </div>
                     </div>
                   </div>             
 <?php } ?>

  </table>

</div>






</div>

  <!-- المتطوعات في الدروس الاسلامية -->


      <div style="margin-left:2%; margin-top:-5%;padding:5%" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3 style="font-size:25px;"><span><strong>المتطوعات لتقديم الدروس الإسلامية</strong></span></h3>
                    </div>
                </div>
            </div>
          </div>
          
        <table id="Ivolunter_table">
          <tr >
            <th style=" background-color: #07b5b2">تقديم شهادة</th>
            <th style=" background-color: #07b5b2">عدد القاءات</th>
            <th style=" background-color: #07b5b2">اسم الدرس</th>
            <th style=" background-color: #07b5b2">اسم الكتاب</th>
            <th style=" background-color: #07b5b2">وقت الدرس</th>
            <th style=" background-color: #07b5b2">يوم الدرس</th>
            <th style=" background-color: #07b5b2">تاريخ الدرس</th>
            <th style=" background-color: #07b5b2">القسم/الكلية</th>
            <th style=" background-color: #07b5b2">رقم الجوال</th>
            <th style=" background-color: #07b5b2">رقم المنسوب</th>
            <th style=" background-color: #07b5b2">الاسم </th>
          </tr>


              <?php
                //Quran volunteer table
            $IS_volunteers = $connect->query("SELECT i.FacultyUniversityID,FacultyMemberName,UniversityEmail,PhoneNumber,FacultyDepartment,time,day,lessonDate,bookName,lessonName,meetingsNumber,havingCertificate
              FROM islamicVolunteer i, facultymember f
              WHERE f.FacultyUniversityID =i.FacultyUniversityID AND requestState='مقبول'");

            if(!empty($IS_volunteers) && $IS_volunteers-> num_rows  > 0)  {
              while ($IS_info =$IS_volunteers->fetch_assoc()){
                $hav_Certificate1= $IS_info["havingCertificate"];
                $_SESSION["hav_Certificate"]=(int)$hav_Certificate1 ;

                ?>
                <tr>
                <?php $hav_Certific = $_SESSION["hav_Certificate"];
                 if($hav_Certific==1){ ?>
                <td> نعم</td>
                <?php }else if($hav_Certific==0){ ?>
                  <td> لا</td>
                <?php } ?>
                 
                <td><?php echo $IS_info["meetingsNumber"] ?></td>
                <td><?php echo $IS_info["lessonName"] ?></td>
                <td><?php echo $IS_info["bookName"] ?></td>
                <td><?php echo $IS_info["time"] ?></td>
                <td><?php echo $IS_info["day"] ?> </td>
                <td><?php echo $IS_info["lessonDate"] ?></td>
                <td><?php echo $IS_info["FacultyDepartment"] ?></td>
                <td><?php echo $IS_info["PhoneNumber"] ?></td>
                <td><?php echo $IS_info["FacultyUniversityID"] ?></td>
                <td><?php echo $IS_info["FacultyMemberName"] ?></td>
                </tr>
                <?php
            }
          }

           else echo "
                         <div style=margin-left:2%; margin-bottom:-29%;padding:5% >
                           <div class=container>
                               <div class=row justify-content-center>
                                   <div class=col-lg-6>
                                       <div class= section_title text-center mb-55>
                                          <tr><td colspan= 11> <p style= color:gray; font-size:5px;> <strong> &quot;لا يوجد متطوعات لتقديم الدروس في المصلى حتى الآن  &quot; </strong> </p> </tr></td>
                                       </div>
                                   </div>
                               </div>
                             </div>
                             ";

              ?>

        </table>
      </div>


  <!-- footer_start  -->
  <footer class="footer" style="  padding : 60px; background:#F3FCF8">

    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-6 col-lg-4 ">
          <div class="footer_widget">
            <div class="footer_logo">

              <img src="image_HomePage/logo.png" alt="" style="padding-top: 9px;">

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
