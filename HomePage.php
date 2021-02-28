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
  <link rel="stylesheet" type="text/css" href="css_nuha/list.css">
  <link rel="stylesheet" type="text/css" href="css_nuha/formQuranVolunteer.css">
    <link rel="stylesheet" href="css_HomePge/style_HomePage.css">
    <link rel="stylesheet" href="‏‏css_HomePage\css_volunteer_request.css">
  <!-- <link rel="stylesheet" href="css/responsive.css"> -->

  <style>
  #adv_table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
  }

  #adv_table td, #adv_table th {
    border: 2px solid #ddd;
    padding: 8px;
      text-align:center;

  }

  #adv_table tr:nth-child(even){background-color: #f2f2f2;}

  #adv_table tr:hover {background-color: #ddd;}

  #adv_table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: center;
    background-color: #07B5B2;
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
<?php if ($_GET['reason']=="signout"){?>
                <a dir="rtl" href="Sign up.php" style="font-size:15px; "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> التسجيل</a>
                <a dir="rtl" href="Sign in.php" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الدخول</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
     <?php } elseif (!empty($_SESSION['adminemail'])){?>
                <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                <a dir="rtl" href=" Personal Page administrator.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                      <?php } elseif(!empty($_SESSION['facultyemail'])){?>
                      <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                      <a dir="rtl" href="Personal Page for Faculty Member.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                      <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                      <?php  } elseif (!empty($_SESSION['studentemail'])){?>
                      <a dir="rtl" href="HomePage.php?reason=signout" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الخروج</a>
                <a dir="rtl" href="Personal Page for Student.php" style="font-size:15px; "><i class="fa fa-user-circle-o" aria-hidden="true"></i> الصفحة الشخصية</a>
                <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>
                     <?php } else {?>
                       <a dir="rtl" href="Sign up.php" style="font-size:15px; "><i class="fa fa-pencil-square-o" aria-hidden="true"></i> التسجيل</a>
                       <a dir="rtl" href="Sign in.php" style="font-size:15px; "><i class="fa fa-sign-in" aria-hidden="true"></i> تسجيل الدخول</a>
                       <a dir="rtl" href="HomePage.php" style="font-size:15px; "><i class="fa fa-home"></i> الصفحة الرئيسية</a>


                    <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="sticky-header" class="main-header-area" style="margin-top: 15px; " >
        <div class="container-fluid">
          <div class="row align-items-center">

            <!-- volunteer  -->
        <div class="col-xl-9 col-lg-9">
              <div class="main-menu" style="padding-right:6%" >

                  <ul id="navigation">
                    <li><a href="#timetable" style="font-size:15px;">حلـقات التقـوية</li></a>
                    <li><a style="font-size:15px;">|</a></li>
                    <li><a href="#adv" style="font-size:15px;"> دروس المصـلى </i></a>  </li>
                    <li><a style="font-size:15px;">|</a></li>
                    <li><a href="#servers" style="font-size:15px;">خـدمـات المصـلى</a></li>
                  </ul>
                </nav>

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
  <div class="slider_area" style= "padding-left:3%">
    <div class="single_slider  d-flex align-items-center   " style="  background-image: url( image_HomePage/back3.png);   background-size:auto;height:450px ; width:97%;  background-position:top ;">
      <div class="container">
        <div class="row">

          <div class="slider_text" style="margin-top:10% ;padding-left: 440px ;text-align: right;  ">
              <h3 style="font-size: 55px ;  color: #457c86; "><strong>مصلى جامعة أم القرى </strong></h3>
          <!--    <span style="font-size: 30px">&nbsp;شطر الطالبات </span> -->
              <p style="margin-top:30px ; margin-bottom:30px ;font-size: 30px;color: #07b5b2;"><strong>رياضٌ من جنّٓة .. وبوابةٌ من نور</strong>
                <h4 style="font-size: 22px; font-color:black;"><strong> موقع لتقديم خدمات المصلى لطالبات وأعضاء هيئة التدريس في جامعة أم القرى بالزاهر  </strong></h5>
              </p>
              </a>
          </div>

          </div>
        </div>
      </div>
    </div>
  <!-- slider_area_end -->

      <!-- link servers  -->
      <h1  id="servers"></h1>
      <div class="reson_area section_padding" style=" margin-top: :80%" >
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-6">
                      <div class="section_title text-center mb-55">
                          <h3 style="font-size:29px;"><span><strong>خـدمــــات الـمـصـــلى</strong></span></h3>
                      </div>
                  </div>
              </div>
              </br> 
</br>
        
              <div class="row justify-content-center" align="right">
              <div class="col-lg-4 col-md-6">
                      <div class="single_reson">
                          <div class="thum">
                              <div class="thum_1">
                                  <img src="image_HomePage/f33.png" alt="">
                              </div>
                          </div>
                          <div class="help_content" align="right">

                            <h4 style="color:#046f6d">  <strong>التطوع في المصلى</strong></h4>
                              <p>يمكن لأعضاء هيئة التدريس
                               تقديم طلب كمتطوعة في المصلى
                                  وإفادة الطالبات من خلال
                                  التسميع أو تقديم محاضرات ودورات لهن </p>
                                  </br>

                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single_reson">
                          <div class="thum">
                              <div class="thum_1">
                                  <img src="image_HomePage/f11.png" alt="">
                              </div>
                          </div>
                          <div class="help_content" align="right">
                          <h4 style="color:#046f6d">  <strong>التسجيل في الدروس والحلقات</strong></h4>
                              <p> تستطيع الطالبة التسجيل في دروس وحلقات المصلى مع اختيار الأوقات المناسبة لحضورها كما يمكن لعضو هيئة التدريس المتطوعة في المصلى بمتابعة الطالبة وتقييمها بطريقة سهلة عن طريق الموقع</p>

                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="single_reson">
                          <div class="thum">
                              <div class="thum_1">
                                  <img src="image_HomePage/f22.png" alt="">
                              </div>
                          </div>
                          <div class="help_content" align="right">

                            <h4 style="color:#046f6d">  <strong>التسجيل في أنشطة المواد الدراسية</strong></h4>
                              <p id ="adv">يمكن لعضو هيئة التدريس تحديد درس من دروس المصلى وتعيينه كنشاط لطالباتها ومتابعة حضورهن ، ومن ثم إعطائهم الدرجات المستحقة </p>

                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
    

      <!-- link add  -->

      <div style="margin-left:2%; margin-top:-5%;padding:5%" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3 style="font-size:25px;"><span><strong> الدروس الإسلامية في المصلى</strong></span></h3>
                    </div>
                </div>
            </div>
          </div>
          
        <table id="adv_table" style="margin-left:130px">
          <tr >
            <th style=" background-color: #07b5b2">تقديم شهادة</th>
            <th style=" background-color: #07b5b2">عدد اللقاءات</th>
            <th style=" background-color: #07b5b2">اسم الدرس</th>
            <th style=" background-color: #07b5b2">اسم الكتاب</th>
            <th style=" background-color: #07b5b2">وقت الدرس</th>
            <th style=" background-color: #07b5b2">يوم الدرس</th>
            <th style=" background-color: #07b5b2">تاريخ الدرس</th>
            <th style=" background-color: #07b5b2">الاسم </th>
          </tr>


          <?php
                //Quran volunteer table
            $IS_volunteers = $connect->query("SELECT i.FacultyUniversityID,FacultyMemberName,time,day,lessonDate,bookName,lessonName,meetingsNumber,havingCertificate
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
                 
                <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"><?php echo $IS_info["meetingsNumber"] ?></output></td>
                <td><?php echo $IS_info["lessonName"] ?></td>
                <td><?php echo $IS_info["bookName"] ?></td>
                <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"><?php echo $IS_info["time"] ?></output> </td>
                <td><label style="font-size:27;"><strong>  <?php echo $IS_info["day"] ; ?> </strong> </label> </td>
                <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"><?php echo $IS_info["lessonDate"] ?></output></td>
                <td><?php echo $IS_info["FacultyMemberName"] ?></td>
                </tr >
                <?php
            }
          }

           else echo "
                         <div style=margin-left:2%; margin-bottom:-29%;padding:5% >
                           <div class=container>
                               <div class=row justify-content-center>
                                   <div class=col-lg-6>
                                       <div class= section_title text-center mb-55>
                                          <tr><td colspan= 11> <p style= color:gray; font-size:5px;> <strong> &quot;لا يوجد دروس في المصلى حتى الآن  &quot; </strong> </p> </tr></td>
                                       </div>
                                   </div>
                               </div>
                             </div>
                             ";

              ?>


<h1  id="timetable"> </h1> 
        </table>
      </div>
     
  <!-- reson_area_end  -->
      <div style="margin-left:2%; margin-top:-5%;padding:5%" >
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3 style="font-size:25px;"><span><strong>حلقات التقوية</strong></span></h3>
                    </div>
                </div>
            </div>
          </div>

          <table id="adv_table"  style="margin-left:130px">
                  <tr bgcolor="#07B1B2">
                    <th colspan="2">الـــوقــت</th>
                    <th rowspan="2">اليوم </th>
                    <th rowspan="2">اسم الأستاذة </th>
                  </tr>
                  <tr>
                    <th>إلى</th>
                    <th>من</th>
                  </tr>


<?php
$Q_volunteers = $connect->query("SELECT FacultyMemberName,Quran_volunteer_id
  FROM quranvolunteer q, facultymember f
  WHERE f.FacultyUniversityID =q.FacultyUniversityID AND requestState = 'مقبول' ");

  if(!empty($Q_volunteers) && $Q_volunteers-> num_rows  > 0)  {
    while ($row =$Q_volunteers->fetch_assoc()){
      $volunteer_id1= $row["FacultyMemberName"];
      $_SESSION["volunteer_name"]=(int)$volunteer_id1 ;

      $volunteer_id1= $row["Quran_volunteer_id"];
      $_SESSION["volunteer_id"]=(int)$volunteer_id1 ;



      
      $v_id=$_SESSION["volunteer_id"] ;
      $v_name=$_SESSION["volunteer_name"] ;
$result = $connect->query("SELECT Day,timeStart,timeEnd
  FROM timetable t
  WHERE t.Quran_volunteer_id = $v_id" );

  if(!empty($result) && $result -> num_rows  > 0)  {
    while ($row_t =$result->fetch_assoc()){
  ?>
  
                  <tr >
                    <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"> <?php echo $row_t['timeEnd'] ; ?> </output> </td>
                    <td><output style=" padding-left:5px;padding-right:5px; border-bottom: 2px solid #07B5B2;  background-color:#f6f6f6 ;"> <?php echo $row_t['timeStart'] ; ?> </output> </td>
                    <td><label style="font-size:27;"><strong>  <?php echo $row_t['Day'] ; ?> </strong> </label></td>
                    <td><?php echo $row["FacultyMemberName"] ; ?>  </td>

                  </tr>
  <?php } }



 }} 
 else echo "
 <div style=margin-left:2%; margin-bottom:-29%;padding:5% >
   <div class=container>
       <div class=row justify-content-center>
           <div class=col-lg-6>
               <div class= section_title text-center mb-55>
                  <tr><td colspan= 11> <p style= color:gray; font-size:5px;> <strong> &quot;لا توجد حلقات تقوية في المصلى حتى الان  &quot; </strong> </p> </tr></td>
               </div>
           </div>
       </div>
     </div>
     ";
 ?>
                </table></br>
                </div>
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
